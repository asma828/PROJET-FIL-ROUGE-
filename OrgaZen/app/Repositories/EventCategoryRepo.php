<?php
namespace App\Repositories;

use App\Models\EventCategory;
use App\Models\Plant;
use App\Repositories\Interfaces\EventCategoryInterface;

class EventCategoryRepo implements EventCategoryInterface
{
    public function getAllCategory()
    {
        $categories=EventCategory::with('user')->get();
        // dd($categories);
        return $categories;
    }
}
