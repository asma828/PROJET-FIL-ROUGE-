<?php 
namespace App\Repositories\Interfaces;


interface EventCategoryInterface
{
    public function getAllCategory();
    public function destroy($id);
}