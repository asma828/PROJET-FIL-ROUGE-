<?php

namespace App\Http\Controllers;

use App\Models\EventCategory;
use App\Repositories\Interfaces\ReservationInterface;
use App\Repositories\Interfaces\StatistiqueInterface;
use App\Repositories\Interfaces\UserInterface;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $userRepo;
    protected $reservationRepo;
    protected $statiqueRepo;
public function __construct(UserInterface $userRepo,ReservationInterface $reservationRepo,StatistiqueInterface $statiqueRepo){
    $this->userRepo=$userRepo;
    $this->reservationRepo=$reservationRepo;
    $this->statiqueRepo=$statiqueRepo;
}
    public function index(){
        $events=$this->reservationRepo->getAllEvents();
        $TotalEvent= $this->statiqueRepo->getTotalReservations();
        $TotalUsers = $this->statiqueRepo->getTotalUsers();
        $TotalProviders = $this->statiqueRepo->getTotalProvider();
        $TotalRevenus = $this->statiqueRepo->getTotalRevenus();
        $TopProviders = $this->userRepo->getTopProviders();
        return view('components.admin.dashboard',compact('events','TotalEvent','TotalUsers','TotalProviders','TotalRevenus','TopProviders'));
    }

    public function usersManagement(){
        $users=$this->userRepo->getAllUsers();
        return view('components.admin.UserManagement',compact('users'));
    }

     public function destroy($id){
        $user=$this->userRepo->destroy($id);
        return redirect()->back()->with('success', 'User deleted successfully.');
    }


    public function events(){
        $events=$this->reservationRepo->getAllEvents();
        return view('components.admin.EventManagement',compact('events'));
    }

    public function service(){
        $providers= $this->userRepo->getAllProviders(); 
        return view('components.admin.serviceProvider',compact('providers'));
    }
 
    public function Payment(){
        $events=$this->reservationRepo->getAllEvents();
        $totalRevenus = $this->statiqueRepo->getTotalRevenus();
        return view('components.admin.Payment',compact('events','totalRevenus'));
    }
}
