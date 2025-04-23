<?php
namespace App\Repositories;

use App\Models\Comment;
use App\Models\reservation;
use App\Models\tag;
use App\Models\User;
use App\Repositories\Interfaces\UserInterface;
use Auth;
use DB;

class UserRepository implements UserInterface{
        public function getAuthenticatedUserProfile()
        {
            return Auth::user()->load(['tags', 'service']);
        }
    
     public function updateProfile(array $data){
        $user = Auth::user();
        $user->update([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'image' => $data['image'] ?? $user->image,
        ]);
        if (isset($data['service_area'],$data['description'])) {
            $user->service()->update([
                'service_area' => $data['service_area'],
                'description' => $data['description'],
            ]);
        }
        
        if (isset($data['tags'])) {
            $user->tags()->sync($data['tags']);
        }

        return $user->load(['tags', 'service']);
     }

     public function getAllProviders()
     {
        $providers = User::where('role_id', 3)
             ->with(['tags', 'service','eventCategory'])
             ->get();

             foreach ($providers as $provider) {
                $totalEvents = DB::table('reservation')
                    ->where('provider_id', $provider->id)
                    ->where('is_paid', true)
                    ->count();
        
                $totalRevenue = DB::table('reservation')
                    ->join('service', 'reservation.provider_id', '=', 'service.provider_id')
                    ->where('reservation.provider_id', $provider->id)
                    ->where('reservation.is_paid', true)
                    ->sum(DB::raw('(service.price / service.guest_count) * reservation.guest_count'));
        
                $provider->total_events = $totalEvents;
                $provider->total_revenue = $totalRevenue;
            }
        
            return $providers;
     }
     
     public function getProvidersByEventCategory($categoryId)
     {
         return User::where('role_id', 3)
             ->where('event_category_id', $categoryId)
             ->with('service') 
             ->get();
     }
     public function getAllUsers()
     {
         return User::with('role')
             ->whereHas('role', function ($query) {
                 $query->where('name', '!=', 'admin');
             })
             ->get();
     }
     public function destroy($id){
        $user = User::findOrFail($id);
        return $user->delete();
    }

    public function getProviderDetails($providerId)
    {
        $provider = User::with(['service.images', 'tags', 'eventCategory'])->findOrFail($providerId);

        $comments = Comment::where('provider_id', $providerId)->with('user')->get();

        $canComment = false;
        if (Auth::check()) {
            $clientId = Auth::id();
            $reservation = reservation::where('user_id', $clientId)
                                      ->where('provider_id', $providerId)
                                      ->first();
            if ($reservation) {
                $canComment = true;
            }
        }

        return compact('provider', 'comments', 'canComment');
    }

public function getAuthenticatedProviderWithComments($perPage = 4){
$provider = auth()->user();

$comments = $provider->comments()
    ->with('user')
    ->latest()
    ->paginate($perPage);

return [
    'provider' => $provider,
    'comments' => $comments
];


}
}