<?php 
namespace App\Repositories\Interfaces;


interface EventCategoryInterface
{
    public function getAllCategory();
    public function destroy($id);
    public function store(array $data);
    public function update($id, array $data);
    public function findById($id);
    public function getPopularCategories();
    public function getAllWithUser();
    public function searchWithPagination(?string $searchTerm);


}