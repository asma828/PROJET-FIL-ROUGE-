<?php
namespace App\Repositories\Interfaces;

interface UserInterface{
    public function getAuthenticatedUserProfile();
    public function updateProfile(array $data);
    public function getAllProviders($search = null);
    public function getProvidersByEventCategory($categoryId,$eventDate);
    public function getAllUsers();
    public function destroy($id);
    public function getProviderDetails($providerId);
    public function getAuthenticatedProviderWithComments($perPage);
    public function getProviderDashboardData($providerId);
    public function getTopProviders();
    public function toggleStatus($id);
    public function getProfile();





}