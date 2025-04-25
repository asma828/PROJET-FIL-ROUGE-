<?php 
namespace App\Repositories\Interfaces;


interface TagInterface{
public function getAllTags();
public function destroy($id);
}