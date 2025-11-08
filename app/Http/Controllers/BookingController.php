<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingsRequest;
use App\Models\Booking;
use App\Models\Service; // ✅ Add this line
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('service')->get();
        return view('Bookings.index', compact('bookings'));
    }

    public function create()
    {
        $status = 'create';
        $services = Service::all();
        $booking = new Booking(); // empty booking object
        return view('Bookings.create', compact('status', 'services', 'booking'));
    }


    public function store(StoreBookingsRequest $request)
    {
        Booking::create($request->validated());
        return redirect()->route('bookings.index');
    }

    public function show(Booking $booking)
    {
        return view('Bookings.show', compact('booking'));
    }

    public function edit(Booking $booking)
    {
        $status = 'update';
        $services = Service::all();
        return view('Bookings.create', compact('status', 'services', 'booking'));
    }


    public function update(StoreBookingsRequest $request, Booking $booking)
{
    $booking->update($request->validated()); 
    return redirect()->route('bookings.index')->with('success', 'Booking updated successfully.');
}

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index');
    }
}
