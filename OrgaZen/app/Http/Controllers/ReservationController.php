<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ReservationInterface;
use App\Repositories\Interfaces\UserInterface;
use Illuminate\Http\Request;
use App\Mail\EventInvitationMail;
use Illuminate\Support\Facades\Mail;
use App\Notifications\ReservationMade;


class ReservationController extends Controller
{
    protected $reservationRepository;
    protected $userRepository;

    public function __construct(ReservationInterface $reservationRepository ,UserInterface $userRepository)
    {
        $this->reservationRepository = $reservationRepository;
        $this->userRepository= $userRepository;
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
    $provider = \App\Models\User::find($request->provider_id);
    if ($provider) {
        $provider->notify(new ReservationMade($reservation));
    }
    
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

public function skipInvitations($reservationId)
{
    $reservation = $this->reservationRepository->findById($reservationId);

    $reservation->update(['status' => 'step3']);

    return redirect()->route('components.client.payement', $reservationId)->with('success', 'Proceeding to payment!');
}

public function destroy($id){
    $user=$this->reservationRepository->destroy($id);
    return redirect()->route('components.admin.EventManagement')->with('success', 'Reservation deleted successfully.');
}

public function Booking(){
    $providerId = auth()->id(); 
    $bookings = $this->reservationRepository->getProviderEvents($providerId);
    $provider = $this->userRepository->getProfile();

    return view('components.provider.BookingManagement',compact('bookings','provider'));
}

public function showReservationDetail($id)
{
    $providerId = auth()->id();
    $reservation = $this->reservationRepository->getProviderReservationById($providerId, $id);
    $provider = $this->userRepository->getProfile();
    return view('components.provider.Booking detail', compact('reservation','provider'));
}

}

