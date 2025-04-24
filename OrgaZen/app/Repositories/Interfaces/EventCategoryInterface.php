<?php 
namespace App\Repositories\Interfaces;


interface EventCategoryInterface
{
    public function getAllCategory();
    public function destroy($id);
    public function store(array $data);
  
}