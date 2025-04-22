<?php

namespace App\Http\Controllers;

use App\Models\EventCategory;
use App\Repositories\Interfaces\UserInterface;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $userRepo;
public function __construct(UserInterface $userRepo){
    $this->userRepo=$userRepo;
}
    public function index(){
        return view('components.admin.dashboard');
    }

    public function usersManagement(){
        $users=$this->userRepo->getAllUsers();
        return view('components.admin.UserManagement',compact('users'));
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
