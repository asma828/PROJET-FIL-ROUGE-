<?php
namespace App\Repositories;

use App\Models\EventCategory;
use App\Repositories\Interfaces\EventCategoryInterface;

class EventCategoryRepo implements EventCategoryInterface
{
    public function getAllCategory()
{
    $categories = EventCategory::withCount('reservation')->get();
    return $categories;
}

public function destroy($id){
    $category= EventCategory::findOrFail($id);
    return $category->delete();
}
public function store(array $data)
{
    return EventCategory::create($data);
}

public function update($id, array $data)
{
    $category = EventCategory::findOrFail($id);
    $category->update($data);
    return $category;
}
public function findById($id)
{
    return EventCategory::findOrFail($id);
}

public function getPopularCategories()
{
    return EventCategory::withCount('reservation') 
                         ->orderByDesc('reservation_count')
                         ->take(5)
                         ->get();
}

}
