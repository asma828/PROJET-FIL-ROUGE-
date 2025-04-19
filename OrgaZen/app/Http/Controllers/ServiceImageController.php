<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\ServiceImageInterface;

class ServiceImageController extends Controller
{
    protected $serviceImageRepo;

    public function __construct(ServiceImageInterface $serviceImageRepo)
    {
        $this->serviceImageRepo = $serviceImageRepo;
    }

    public function show($serviceId)
    {
        $images = $this->serviceImageRepo->getByService($serviceId);

        return view('components.provider.MyService', compact('images'));
    }

 
}

