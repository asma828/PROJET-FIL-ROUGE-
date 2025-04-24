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

    public function destroy($id){
        $category=$this->evenCategoryRepo->destroy($id);
        return redirect()->back()->with('Category deleted successfully');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'categoryName' => 'required|string|max:255',
            'categoryDescription' => 'nullable|string',
            'categoryImage' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('categoryImage')) {
            $data['image'] = $request->file('categoryImage')->store('categories', 'public');
        }

        $data['name'] = $data['categoryName'];
        $data['description'] =$data['categoryDescription'];
        unset($data['categoryName']);

        $this->evenCategoryRepo->store($data);

        return redirect()->back()->with('success', 'Catégorie ajoutée avec succès.');
    }

    public function edit($id)
{
    $category = $this->evenCategoryRepo->findById($id);
    return view('components.admin.editCategoryModal', compact('category'));
}

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'categoryName' => 'required|string|max:255',
            'categoryDescription' => 'nullable|string',
            'categoryImage' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('categoryImage')) {
            $data['image'] = $request->file('categoryImage')->store('categories', 'public');
        }

        $data['name'] = $data['categoryName'];
        unset($data['categoryName']);

        $this->evenCategoryRepo->update($id, $data);

        return redirect()->route('components.admin.CategoryManagement')->with('success', 'Catégorie mise à jour avec succès.');
    }
}

    
