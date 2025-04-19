<?php
namespace App\Repositories;

use App\Models\EventCategory;
use App\Models\service;
use App\Repositories\Interfaces\EventCategoryInterface;
use App\Repositories\Interfaces\ServiceInterface;
use GuzzleHttp\Psr7\Request;

class ServiceRepository implements ServiceInterface
{
    public function store(array $data)
    {
  return service::create($data);
    }

    public function update($id, array $data)
    {
        $service = service::findOrFail($id);
        $service->update($data);
        return $service;
    }

    public function find($id)
    {
        return service::findOrFail($id);
    }

}
