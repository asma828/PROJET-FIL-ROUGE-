<?php

namespace App\Http\Controllers;

use App\Models\EventCategory;
use App\Models\reservation;
use App\Models\Service;
use App\Repositories\Interfaces\EventCategoryInterface;
use App\Repositories\Interfaces\ReservationInterface;
use App\Repositories\Interfaces\UserInterface;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    protected $userRepo;
    protected $reservationRepo;
    protected $evenCategoryRepo;

     public function __construct(UserInterface $userRepo, ReservationInterface $reservationRepo,EventCategoryInterface $evenCategoryRepo) {
        $this->userRepo= $userRepo;
        $this->reservationRepo=$reservationRepo;
        $this->evenCategoryRepo= $evenCategoryRepo;

    }
    public function home(){
        return view('components.client.home');
    }

    public function listingProviders(Request $request)
    {
        $search = $request->input('search');
        $providers = $this->userRepo->getAllProviders($search); 
        return view('components.client.providers', compact('providers'));
    }
    

    public function details($providerId){
        $data = $this->userRepo->getProviderDetails($providerId);
        return view('components.client.provider-details',$data);
    }

    public function categories(Request $request)
    {
        $search = $request->query('search');
        $categories = $this->evenCategoryRepo->searchWithPagination($search);
        return view('components.client.categories', compact('categories', 'search'));
    }
    

    public function createvent($category_id){
        return view('components.client.eventdetails', compact('category_id'));
    }

public function showProviders($reservationId)
{
    $reservation = $this->reservationRepo->findById($reservationId);
    $categoryId = $reservation->event_category_id;
    $eventDate = $reservation->event_date;

    // Get the providers based on the event category
    $providers = $this->userRepo->getProvidersByEventCategory($categoryId, $eventDate);
    return view('components.client.serviceProviderSelect', [
        'reservation' => $reservation,
        'providers' => $providers,
    ]);
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

    public function history($clientId){
        $client = $this->reservationRepo->getClientEvents($clientId);

        return view('components.client.EventHistory',compact('client'));
    }
}
