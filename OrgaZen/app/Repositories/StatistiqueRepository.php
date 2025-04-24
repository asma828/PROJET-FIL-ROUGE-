<?php
namespace App\Repositories;
use App\Models\reservation;
use App\Models\User;
use App\Repositories\Interfaces\StatistiqueInterface;

class StatistiqueRepository implements StatistiqueInterface{
    public function getTotalRevenus(){
        return Reservation::sum('total_price');
    }
    public function getTotalReservations(){
        return reservation::count();
    }
    public function getTotalUsers(){
        return User::count();
    }
    public function getTotalProvider(){
        return User::with('role')
        ->where('role_id',3)
        ->count();
    }
}