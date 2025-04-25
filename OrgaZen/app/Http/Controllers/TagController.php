<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\TagInterface;
use Illuminate\Http\Request;

class TagController extends Controller
{
    protected $TagRepo;
    public function __construct(TagInterface $TagRepo){
        $this->TagRepo=$TagRepo;
    }
    public function Tags(){
        $tags=$this->TagRepo->getAllTags();
        return view('components.admin.TagsManagement',compact('tags'));
    }
    public function destroy($id){
        $tag=$this->TagRepo->destroy($id);
        return redirect()->back()->with('Tag deleted successfully');

    }
    public function store(Request $request){
        $data = $request->validate([
            'name'=>'required|string|max:255',
        ]);
        $this->TagRepo->store($data);
        return redirect()->back()->with('success', 'tag ajoutée avec succès.');


    }
}
