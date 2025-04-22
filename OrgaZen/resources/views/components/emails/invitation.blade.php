<h2>Hello {{ $guestName }}!</h2>
<p>You're invited to the event: <strong>{{ $eventName }}</strong></p>
<p>Date: {{ $eventDate }}</p>
<p>Location: {{ $location }}</p>

@if($message)
    <p>Message from the host:</p>
    <blockquote>{{ $personalMessage }}</blockquote>
@endif

<p>We hope to see you there!</p>
