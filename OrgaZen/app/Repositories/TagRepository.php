<?php
namespace App\Repositories;
use App\Models\tag;
use App\Repositories\Interfaces\tagInterface;
use GuzzleHttp\Promise\Create;

class tagRepository implements tagInterface{
    public function getAllTags(){
        return tag::all();
    }
    public function destroy($id){
        $tag= tag::findOrFail($id);
        return $tag->delete();
    }

    public function store(array $data){
        return tag::create($data);
    }

    public function update($id, array $data)
{
    $tag = tag::findOrFail($id);
    $tag->update($data);
    return $tag;
}
public function findById($id)
{
    return tag::findOrFail($id);
}
}