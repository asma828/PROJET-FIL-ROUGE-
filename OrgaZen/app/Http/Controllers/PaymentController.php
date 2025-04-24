<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use Illuminate\Http\Request;
use Stripe\Stripe;
use App\Models\Service;
use Stripe\PaymentIntent;
use Stripe\Checkout\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Log;


class PaymentController extends Controller
{
    
  
    
    public function makePayment(Request $request)
{    
    Stripe::setApiKey(env('STRIPE_SECRET'));

    $reservation = Reservation::findOrFail($request->reservation_id);
    $service = Service::where('provider_id', $reservation->provider_id)->first();

    $totalPrice = ($service->price / $service->guest_count) * $reservation->guest_count;

    // Save total
    $reservation->total_price = $totalPrice;
    $reservation->save();

    // Convert to cents for Stripe
    $amount = max(500, $totalPrice * 100);

    try {
        $payment = PaymentIntent::create([
            'amount' => $amount,
            'currency' => 'usd',
            'payment_method' => $request->payment_method,
            'confirm' => true,
            'automatic_payment_methods' => [
                'enabled' => true,
                'allow_redirects' => 'never',
            ],
        ]);
    

$reservation->update([
            'status' => 'completed',
            'is_paid' => true,
        ]);
        return redirect()->route('components.client.EventHistory', ['id' => auth()->user()->id])->with('success', 'Payment successful!');
    } catch (\Exception $e) {
        \Log::error(' Stripe error: ' . $e->getMessage());
        return back()->withErrors('Stripe error: ' . $e->getMessage());
    }
}

    
}

