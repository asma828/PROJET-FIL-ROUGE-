<?php
namespace App\Repositories;

use App\Models\EventCategory;
use App\Repositories\Interfaces\EventCategoryInterface;

class EventCategoryRepo implements EventCategoryInterface
{
    public function getAllCategory()
    {
        $categories=EventCategory::with('user')->get();
        // dd($categories);
        return $categories;
    }
public function destroy($id){
    $category= EventCategory::findOrFail($id);
    return $category->delete();
}
}
