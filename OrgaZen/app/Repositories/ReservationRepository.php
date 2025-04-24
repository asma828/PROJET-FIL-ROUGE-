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
        return reservation::with('category','client')->get();
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



}
