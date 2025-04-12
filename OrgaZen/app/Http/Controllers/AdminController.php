<?php

namespace App\Http\Controllers;

use App\Models\EventCategory;
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

    public function service(){
        return view('components.admin.serviceProvider');
    }

    public function Payment(){
        return view('components.admin.Payment');
    }
}
