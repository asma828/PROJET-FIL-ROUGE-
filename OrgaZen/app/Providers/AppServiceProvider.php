<?php

namespace App\Providers;

use App\Models\EventCategory;
use App\Repositories\AuthRepository;
use App\Repositories\EventCategoryRepo;
use App\Repositories\Interfaces\AuthRepositoryInterface;
use App\Repositories\Interfaces\EventCategoryInterface;
use App\Repositories\Interfaces\ServiceInterface;
use App\Repositories\Interfaces\UserInterface;
use App\Repositories\ServiceRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AuthRepositoryInterface::class, AuthRepository::class);  
        $this->app->bind(EventCategoryInterface::class,EventCategoryRepo::class);
        $this->app->bind(ServiceInterface::class,ServiceRepository::class);
        $this->app->bind(UserInterface::class,UserRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
