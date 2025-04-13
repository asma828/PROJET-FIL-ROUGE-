<?php 
namespace App\Repositories\Interfaces;

use App\Models\Plant;

interface ServiceInterface
{
    public function store(array $data);
}