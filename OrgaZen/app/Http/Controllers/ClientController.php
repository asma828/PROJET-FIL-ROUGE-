<?php

namespace App\Http\Controllers;

use App\Models\EventCategory;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home(){
        return view('components.client.home');
    }

    public function listingProviders(){
        return view('components.client.providers');
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
}
