<?php

namespace App\Http\Controllers;

use App\Models\EventCategory;
use App\Repositories\Interfaces\EventCategoryInterface;
use Illuminate\Http\Request;

class EventCategoryController extends Controller
{
    protected $evenCategoryRepo;
     public function __construct(EventCategoryInterface $evenCategoryRepo) {
        $this->evenCategoryRepo= $evenCategoryRepo;
    }

    public function category(){
        $categories=$this->evenCategoryRepo->getAllCategory();
        
        return view('components.admin.CategoryManagement',compact('categories'));
    }

}
