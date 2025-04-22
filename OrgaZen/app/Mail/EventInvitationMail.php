<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EventInvitationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $guestName, $eventName, $eventDate, $location, $personalMessage;
    /**
     * Create a new message instance.
     */
    public function __construct($guestName, $eventName, $eventDate, $location, $personalMessage = null)
    {
        $this->guestName = $guestName;
        $this->eventName = $eventName;
        $this->eventDate = $eventDate;
        $this->location = $location;
        $this->personalMessage = $personalMessage;
    }

    public function build()
    {
        return $this->subject('You are invited!')
                    ->view('components.emails.invitation');
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Event Invitation Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'components.emails.invitation',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
