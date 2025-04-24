<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\UserInterface;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    protected $userRepository;

    public function __construct(UserInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

     public function dashboard($providerId)
    {
        $provider = $this->userRepository->getProviderDashboardData($providerId);

        return view('components.provider.dashboard', [
            'provider' => $provider['provider'],
            'latestReservation' => $provider['latestReservation'],
            'latestComment' => $provider['latestComment'],
        ]);
    }
    
    public function chat(){
        return view('components.provider.LiveChat');
    }


    
}
