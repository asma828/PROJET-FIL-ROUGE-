<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function dashboard(){
        return view('components.provider.dashboard');
    }

    public function chat(){
        return view('components.provider.LiveChat');
    }

    public function Booking(){
        return view('components.provider.BookingManagement');
    }

    public function services(){
        return view('components.provider.MyService');
    }

    public function Reviews(){
        return view('components.provider.Reviews');
    }

    public function Profile(){
        return view('components.provider.Profile');
    }
    
}
