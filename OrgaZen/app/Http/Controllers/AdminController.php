<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('components.admin.dashboard');
    }

    public function usersManagement(){
        return view('components.admin.UserManagement');
    }

    public function events(){
        return view('components.admin.EventManagement');
    }
}
