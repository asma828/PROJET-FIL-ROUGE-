<?php 
namespace App\Repositories\Interfaces;

interface ReservationInterface
{
    public function store(array $data);
    public function findById($id);
    public function getAllEvents();
    public function destroy($id);
    public function getClientEvents($clientId);
    public function getProviderEvents($providerId);
    public function reservationDetail($id);
    public function getLastetEvent();
    public function getProviderReservationById($providerId, $reservationId);

}
