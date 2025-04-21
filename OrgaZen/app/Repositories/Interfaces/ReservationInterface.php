<?php 
namespace App\Repositories\Interfaces;

interface ReservationInterface
{
    public function store(array $data);
    public function updateStep2($id, array $data);
    public function updateStep3($id, array $data);
    public function completeStep4($id);
    public function findById($id);
}
