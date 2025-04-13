<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ServiceInterface;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    protected $serviceRepo;

    public function __construct(ServiceInterface $serviceRepo)
    {
        $this->serviceRepo = $serviceRepo;
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

       $this->serviceRepo->store($data);
       return redirect()->route('components.provider.MyService')->with('success', 'service update successfully');   
     }
}
