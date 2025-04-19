<?php
namespace App\Repositories;

use App\Models\ServiceImage;
use App\Repositories\Interfaces\ServiceImageInterface;
use Storage;
class ServiceImageRepository implements ServiceImageInterface{

    public function getByService($serviceId)
    {
        return ServiceImage::where('service_id', $serviceId)->get();
    }
public function store($serviceId, $images){
    foreach ($images as $image) {
        $path = $image->store('service_images', 'public');
        ServiceImage::create([
            'service_id' => $serviceId,
            'image_path' => $path,
        ]);
    }
}
public function delete($id){
    $image = ServiceImage::findOrFail($id);
    Storage::disk('public')->delete($image->image_path);
    $image->delete();

}
}