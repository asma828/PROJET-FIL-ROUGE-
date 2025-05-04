<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\UserInterface;
use Auth;
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
        if (!$provider['provider']->is_active) {
            Auth::logout();
            return redirect()->route('components.auth.login')->withErrors([
                'email' => 'Your account has been banned by the admin.'
            ]);
        }
        return view('components.provider.dashboard', [
            'provider' => $provider['provider'],
            'latestReservation' => $provider['latestReservation'],
            'latestComment' => $provider['latestComment'],
        ]);
    }

    public function profile()
{
    $provider = $this->userRepository->getProfile();
    return view('components.provider.profile', compact('provider'));
}

}
