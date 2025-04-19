<?php

namespace App\Http\Controllers;

use App\Models\EventCategory;
use App\Repositories\Interfaces\UserInterface;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    protected $userRepo;
     public function __construct(UserInterface $userRepo) {
        $this->userRepo= $userRepo;
    }
    public function home(){
        return view('components.client.home');
    }

    public function listingProviders(){  
        $providers= $this->userRepo->getAllProviders(); 
        return view('components.client.providers',compact('providers'));
    }

    public function details(){
        return view('components.client.provider-details');
    }

    public function categories(){
        $categories=EventCategory::with('user')->get();
        return view('components.client.categories',compact('categories'));
    }

    public function createvent(){
        return view('components.client.eventdetails');
    }

    public function selectProvider(){
        return view('components.client.serviceProviderSelect');
    }

    public function history(){
        return view('components.client.EventHistory');
    }
}
