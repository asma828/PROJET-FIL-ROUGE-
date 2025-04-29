<?php 
namespace App\Repositories\Interfaces;

interface StatistiqueInterface
{
public function getTotalRevenus();
public function getTotalReservations();
public function getTotalUsers();
public function getTotalProvider();
public function getActiveReservation();
public function getCompletedReservation();

}
