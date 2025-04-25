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
}
