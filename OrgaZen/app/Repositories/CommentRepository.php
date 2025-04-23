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
}