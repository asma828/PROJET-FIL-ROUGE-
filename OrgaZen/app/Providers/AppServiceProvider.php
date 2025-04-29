<?php

namespace App\Providers;

use App\Models\EventCategory;
use App\Repositories\AuthRepository;
use App\Repositories\CommentRepository;
use App\Repositories\EventCategoryRepo;
use App\Repositories\Interfaces\AuthRepositoryInterface;
use App\Repositories\Interfaces\CommentInterface;
use App\Repositories\Interfaces\EventCategoryInterface;
use App\Repositories\Interfaces\NotificationInterface;
use App\Repositories\Interfaces\ReservationInterface;
use App\Repositories\Interfaces\ServiceImageInterface;
use App\Repositories\Interfaces\ServiceInterface;
use App\Repositories\Interfaces\StatistiqueInterface;
use App\Repositories\Interfaces\TagInterface;
use App\Repositories\Interfaces\UserInterface;
use App\Repositories\NotificationRepository;
use App\Repositories\ReservationRepository;
use App\Repositories\ServiceImageRepository;
use App\Repositories\ServiceRepository;
use App\Repositories\StatistiqueRepository;
use App\Repositories\tagRepository;
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
        $this->app->bind(ServiceImageInterface::class, ServiceImageRepository::class);
        $this->app->bind(ReservationInterface::class,ReservationRepository::class);
        $this->app->bind(StatistiqueInterface::class,StatistiqueRepository::class);
        $this->app->bind(CommentInterface::class,CommentRepository::class);
        $this->app->bind(TagInterface::class,tagRepository::class);
        $this->app->bind(NotificationInterface::class, NotificationRepository::class);


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
