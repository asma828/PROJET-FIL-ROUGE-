<?php
namespace App\Repositories;

use App\Models\reservation;
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
}
