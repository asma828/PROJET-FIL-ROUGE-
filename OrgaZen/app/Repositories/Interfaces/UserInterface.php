<?php
namespace App\Repositories\Interfaces;

interface UserInterface{
    public function getAuthenticatedUserProfile();
    public function updateProfile(array $data);
    public function getAllProviders();
    public function getProvidersByEventCategory($categoryId);
    public function getAllUsers();
}