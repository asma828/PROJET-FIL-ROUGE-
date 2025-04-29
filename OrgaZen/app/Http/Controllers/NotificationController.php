<?php


namespace App\Http\Controllers;

use App\Repositories\Interfaces\NotificationInterface;

class NotificationController extends Controller
{
    protected $notificationRepo;

    public function __construct(NotificationInterface $notificationRepo)
    {
        $this->notificationRepo = $notificationRepo;
    }

    public function markAllRead()
    {
        $this->notificationRepo->markAllAsRead();
        return back()->with('success', 'All notifications marked as read.');
    }
}

