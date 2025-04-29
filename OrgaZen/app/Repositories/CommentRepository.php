<?php
namespace App\Repositories;

use App\Models\Comment;
use App\Repositories\Interfaces\CommentInterface;

class CommentRepository implements CommentInterface
{

public function store(array $data)
{
    return Comment::create($data);
}

public function destroy($id){
    $user = Comment::findOrFail($id);
        return $user->delete();
}

public function findById($id)
{
    return Comment::find($id);
}

public function delete($id)
{
    return Comment::destroy($id);
}
}