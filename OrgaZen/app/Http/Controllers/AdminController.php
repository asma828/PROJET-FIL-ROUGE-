<?php

namespace App\Http\Controllers;

use App\Models\EventCategory;
use App\Repositories\Interfaces\EventCategoryInterface;
use App\Repositories\Interfaces\ReservationInterface;
use App\Repositories\Interfaces\StatistiqueInterface;
use App\Repositories\Interfaces\UserInterface;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $userRepo;
    protected $reservationRepo;
    protected $statiqueRepo;
    protected $evenCategoryRepo;
public function __construct(UserInterface $userRepo,ReservationInterface $reservationRepo,StatistiqueInterface $statiqueRepo,EventCategoryInterface $evenCategoryRepo){
    $this->userRepo=$userRepo;
    $this->reservationRepo=$reservationRepo;
    $this->statiqueRepo=$statiqueRepo;
    $this->evenCategoryRepo=$evenCategoryRepo;
}
    public function index(){
        $events=$this->reservationRepo->getLastetEvent();
        $TotalEvent= $this->statiqueRepo->getTotalReservations();
        $TotalUsers = $this->statiqueRepo->getTotalUsers();
        $TotalProviders = $this->statiqueRepo->getTotalProvider();
        $TotalRevenus = $this->statiqueRepo->getTotalRevenus();
        $TopProviders = $this->userRepo->getTopProviders();
        $popularCategories = $this->evenCategoryRepo->getPopularCategories();
        $profile=$this->userRepo->getProfile();
        return view('components.admin.dashboard',compact('events','TotalEvent','TotalUsers','TotalProviders','TotalRevenus','TopProviders','popularCategories','profile'));
    }

    public function usersManagement(){
        $users=$this->userRepo->getAllUsers();
        $profile=$this->userRepo->getProfile();
        return view('components.admin.UserManagement',compact('users','profile'));
    }

     public function destroy($id){
        $user=$this->userRepo->destroy($id);
        return redirect()->back()->with('success', 'User deleted successfully.');
    }


    public function events(){
        $Upcoming = $this->statiqueRepo->getActiveReservation();
        $CompleteReservation = $this->statiqueRepo->getCompletedReservation();
        $events=$this->reservationRepo->getAllEvents();
        $profile=$this->userRepo->getProfile();
        return view('components.admin.EventManagement',compact('events','Upcoming','CompleteReservation','profile'));
    }

    public function service(){
        $providers= $this->userRepo->getAllProviders(); 
        $profile=$this->userRepo->getProfile();
        return view('components.admin.serviceProvider',compact('providers','profile'));
    }
 
    public function Payment(){
        $events=$this->reservationRepo->getAllEvents();
        $totalRevenus = $this->statiqueRepo->getTotalRevenus();
        $profile=$this->userRepo->getProfile();
        return view('components.admin.Payment',compact('events','totalRevenus','profile'));
    }
    public function toggleProviderStatus($id)
{
    $provider = $this->userRepo->toggleStatus($id);
    return redirect()->back()->with('status', 'Provider status updated!');
}
public function detail($id){
    $details = $this->reservationRepo->reservationDetail($id);
    return view('components.admin.reservationDetail', compact('details'));
}

 
}
