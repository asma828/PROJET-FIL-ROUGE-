<?php
namespace App\Repositories;

use App\Models\reservation;
use App\Models\User;
use App\Repositories\Interfaces\ReservationInterface;

class ReservationRepository implements ReservationInterface
{
    public function store(array $data)
    {
        return Reservation::create($data);
    }

     public function findById($id)
    {
        return Reservation::with('service')->find($id);
    }

    public function getAllEvents(){
        return reservation::with('category','client')
        ->get();
    }
    public function getLastetEvent(){
        return reservation::with('category','client')
        ->limit(5)
        ->get();
    }

    public function destroy($id){
        $user = reservation::findOrFail($id);
        return $user->delete();
    }

    public function getClientEvents($clientId)
    {
        $client = User::with(['events.category'])->findOrFail($clientId);
        return $client;
    }

    public function getProviderEvents($providerId){
        return User::with(['providerBookings.client'])
        ->findOrFail($providerId);    
    }

    public function reservationDetail($id){
    $event = reservation::with(['category', 'client', 'provider'])->findOrFail($id);
    return $event;
}
    
public function getProviderReservationById($providerId, $reservationId)
{
    return Reservation::with(['category', 'client']) 
        ->where('provider_id', $providerId)
        ->where('id', $reservationId)
        ->firstOrFail();
}


}
