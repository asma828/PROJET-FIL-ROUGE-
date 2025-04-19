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

    public function store(Request $request, $id)
    {
        $request->validate([
            'images.*' => 'image|max:2048',
        ]);
        
        $this->serviceImageRepo->store($id, $request->file('images'));
        
        return back()->with('success', 'Images uploaded successfully!');
    }

    public function destroy($id)
    {
        $this->serviceImageRepo->delete($id);

        return back()->with('success', 'Image deleted successfully!');
    }
}

