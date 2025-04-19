<?php 
namespace App\Repositories\Interfaces;


interface ServiceInterface
{
    public function store(array $data);
    public function update($id, array $data);
    public function find($id);
}