<?php 
namespace App\Repositories\Interfaces;


interface CommentInterface
{
    public function store(array $data);
    public function destroy($id);
    public function findById($id);
    public function delete($id);
}