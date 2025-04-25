<?php
namespace App\Repositories;
use App\Models\tag;
use App\Repositories\Interfaces\tagInterface;

class tagRepository implements tagInterface{
    public function getAllTags(){
        return tag::all();
    }
    public function destroy($id){
        $tag= tag::findOrFail($id);
        return $tag->delete();
    }
}