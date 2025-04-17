<?php
namespace App\Repositories;

use App\Repositories\Interfaces\UserInterface;
use Auth;

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
            'city' => $data['city'],
            'image' => $data['image'] ?? $user->image,
        ]);
        if (isset($data['tags'])) {
            $user->tags()->sync($data['tags']);
        }

        return $user->load(['tags', 'services']);
     }
}