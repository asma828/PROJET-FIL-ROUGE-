<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Interfaces\AuthRepositoryInterface;

class AuthRepository implements AuthRepositoryInterface
{
    public function register(array $data)
    {
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name'  => $data['last_name'],
            'email'      => $data['email'],
            'password'   => Hash::make($data['password']),
            'role_id'    => $data['role_id'],
        ]);

        Auth::login($user);
        return $user;
    }

    public function login(array $credentials)
    {
        if (Auth::attempt($credentials)) {
            return Auth::user();
        }

        return false;
    }
}
