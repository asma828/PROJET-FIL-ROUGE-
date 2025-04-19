<?php
namespace App\Repositories\Interfaces;
interface ServiceImageInterface {
    public function store($serviceId, $images);
    public function delete($id);
    public function getByService($serviceId);

}