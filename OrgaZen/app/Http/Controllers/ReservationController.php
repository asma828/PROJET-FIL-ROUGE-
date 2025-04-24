<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ReservationInterface;
use Illuminate\Http\Request;
use App\Mail\EventInvitationMail;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    protected $reservationRepository;

    public function __construct(ReservationInterface $reservationRepository)
    {
        $this->reservationRepository = $reservationRepository;
    }

    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'event_date' => 'required|date',
            'event_time' => 'required|date_format:H:i',
            'guest_count' => 'required|integer',
            'duration' => 'required|integer',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
            'event_category_id' => 'required|integer|exists:event_categories,id',
        ]);

    
        $reservation = $this->reservationRepository->store([
            'user_id' => auth()->id(), 
            'name' => $validated['name'],
            'event_date' => $validated['event_date'],
            'event_time' => $validated['event_time'],
            'guest_count' => $validated['guest_count'],
            'duration' => $validated['duration'],
            'location' => $validated['location'],
            'description' => $validated['description'] ?? null,
            'event_category_id' => $validated['event_category_id'],
            'provider_id' => null,
            'status' => 'step1',
        ]);

        return redirect()->route('components.client.serviceProviderSelect', $reservation->id);
    }

    public function assignProvider(Request $request, $reservationId)
{

    // dd($request->all());
    $reservation = $this->reservationRepository->findById($reservationId);

    $reservation->update([
        'provider_id' => $request->provider_id,
        'status' => 'step2',
    ]);
    return redirect()->route('components.client.invitation', $reservationId);
}



public function sendInvitations(Request $request, $reservationId)
{
    $request->validate([
        'guest_emails' => 'required|array',
        'guest_names' => 'required|array',
        'guest_emails.*' => 'email',
        'guest_names.*' => 'string|max:255',
    ]);

    $reservation = $this->reservationRepository->findById($reservationId);

    $emails = $request->guest_emails;
    $names = $request->guest_names;
    $personalMessage = $request->personal_message;

    foreach ($emails as $index => $email) {
        Mail::to($email)->send(new EventInvitationMail(
            $names[$index],
            $reservation->name,
            $reservation->event_date,
            $reservation->location,
            $personalMessage
        ));
    }

    
    $reservation->update(['status' => 'step3']);

    return redirect()->route('components.client.payement', $reservationId)->with('success', 'Invitations sent!');
}

public function destroy($id){
    $user=$this->reservationRepository->destroy($id);
    return redirect()->route('components.admin.EventManagement')->with('success', 'Reservation deleted successfully.');
}

public function Booking(){
    $providerId = auth()->id(); 
    $bookings = $this->reservationRepository->getProviderEvents($providerId);
    return view('components.provider.BookingManagement',compact('bookings'));
}


}

