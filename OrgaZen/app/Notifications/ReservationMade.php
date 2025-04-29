<?php

namespace App\Notifications;

use App\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\DatabaseMessage;

class ReservationMade extends Notification
{
    use Queueable;

    protected $reservation;

    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'message' => 'You have a new reservation from ' . $this->reservation->client->first_name,
            'reservation_id' => $this->reservation->id,
            'client_id' => $this->reservation->client_id,
            'client_name' => $this->reservation->client->first_name . ' ' . $this->reservation->client->last_name,
        ];
    }
}
