<?php
namespace App\Repositories;

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
            $user->services()->update([
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
         return User::where('role_id', 3)
             ->with(['tags', 'service','eventCategory'])
             ->get();
     }
     
     public function getProvidersByEventCategory($categoryId)
     {
         return User::where('role_id', 3)
             ->where('event_category_id', $categoryId)
             ->with('service') 
             ->get();
     }
     
}