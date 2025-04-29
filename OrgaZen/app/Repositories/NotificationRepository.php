<?php 

namespace App\Repositories;

use App\Repositories\Interfaces\NotificationInterface;

class NotificationRepository implements NotificationInterface
{
    public function markAllAsRead()
    {
        auth()->user()->unreadNotifications->markAsRead();
    }
}
