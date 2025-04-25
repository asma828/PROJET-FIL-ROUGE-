<?php 
namespace App\Repositories\Interfaces;


interface TagInterface{
public function getAllTags();
public function destroy($id);
public function store(array $data);
public function update($id, array $data);
public function findById($id);
}