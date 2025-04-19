<?php
namespace App\Repositories;

use App\Repositories\Interfaces\ServiceImageInterface;
class ServiceImageRepository implements ServiceImageInterface{
public function store($serviceId, $images){}
public function delete($id){}
}