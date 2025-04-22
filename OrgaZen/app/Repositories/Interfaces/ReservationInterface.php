<?php 
namespace App\Repositories\Interfaces;

interface ReservationInterface
{
    public function store(array $data);
    public function findById($id);
    public function getAllEvents();
    public function destroy($id);

}
