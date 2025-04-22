<?php
namespace App\Repositories;
use App\Models\reservation;
use App\Repositories\Interfaces\StatistiqueInterface;

class StatistiqueRepository implements StatistiqueInterface{
    public function getTotalRevenus(){
        return Reservation::sum('total_price');
    }
}