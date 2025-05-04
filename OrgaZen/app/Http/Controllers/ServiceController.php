<?php

namespace App\Http\Controllers;

use App\Models\service;
use App\Repositories\Interfaces\ServiceInterface;
use App\Repositories\Interfaces\UserInterface;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    protected $serviceRepo;
    protected $userRepo;


    public function __construct(ServiceInterface $serviceRepo, UserInterface $userRepo)
    {
        $this->serviceRepo = $serviceRepo;
        $this->userRepo = $userRepo;

    }

    public function show()
    {
        $service = service::where('provider_id', auth()->id())->first();
        $hasService = ($service !== null);
        $provider=$this->userRepo->getProfile();
        return view('components.provider.MyService', compact('service', 'hasService','provider'));
    }

    public function store(Request $request){
       $data=$request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric|min:0',
        'guest_count' => 'required|numeric|min:1',
        'service_area' => 'required|string|max:255',
        'experience_level' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        'status' => 'sometimes|boolean',
        'provider_id' => 'required|exists:users,id',
       ]);

       // Checking if service already exists for the provider
       $existingService = service::where('provider_id', auth()->id())->first();
        
       if ($existingService) {
           $this->serviceRepo->update($existingService->id, $data);
           $message = 'Service updated successfully';
       } else {
           $this->serviceRepo->store($data);
           $message = 'Service created successfully';
       }

       return redirect()->route('components.provider.MyService')->with('success', $message);
   }

}
