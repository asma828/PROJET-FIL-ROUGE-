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
        $user = User::create($data);

        return $user->createToken('auth_token')->plainTextToken;
    }

    public function login(array $credentials)
    {
        if (!Auth::attempt($credentials)) {
            return false;
        }

        $user = Auth::user();
        return $user->createToken('auth_token')->plainTextToken;
    }

public function logout()
{
    Auth::logout();
    session()->invalidate();
    
    session()->regenerateToken();
    
    if (auth()->check()) {
        auth()->user()->tokens()->delete();
    }
}
}

