<?php

namespace App\Http\Controllers;

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
        return view('components.client.categories');
    }

    public function createvent(){
        return view('components.client.eventdetails');
    }

    public function selectProvider(){
        return view('components.client.serviceProviderSelect');
    }
}
