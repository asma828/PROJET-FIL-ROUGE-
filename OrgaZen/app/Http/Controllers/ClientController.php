<?php

namespace App\Http\Controllers;

use App\Models\EventCategory;
use App\Models\reservation;
use App\Models\Service;
use App\Repositories\Interfaces\ReservationInterface;
use App\Repositories\Interfaces\UserInterface;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    protected $userRepo;
    protected $reservationRepo;
     public function __construct(UserInterface $userRepo, ReservationInterface $reservationRepo) {
        $this->userRepo= $userRepo;
        $this->reservationRepo=$reservationRepo;
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

    public function createvent($category_id){
        return view('components.client.eventdetails', compact('category_id'));
    }

public function showProviders($reservationId)
{
    $reservation = $this->reservationRepo->findById($reservationId);
    $categoryId = $reservation->event_category_id;

    // Get the providers based on the event category
    $providers = $this->userRepo->getProvidersByEventCategory($categoryId);
    return view('components.client.serviceProviderSelect', compact('reservation', 'providers'));
}


    public function invitation($reservationId){
        $reservation = $this->reservationRepo->findById($reservationId);
        return view('components.client.invitation', compact('reservation'));
    }

    public function payement($reservationId){
        $reservation = $this->reservationRepo->findById($reservationId);
        $service =Service::where('provider_id', $reservation->provider_id)->first();
        return view('components.client.payement',compact('reservation', 'service'));
    }

    public function history(){
        return view('components.client.EventHistory');
    }
}
