<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passenger;
use App\Models\Travel;


class PassengerController extends Controller
{
    public function index()
    {
        $passengers = Passenger::with('travel')->get();
        $travels = Travel::all();
        
        return view('passengers.index', compact('passengers', 'travels'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'passenger' => 'required|string',
            'travel_id' => 'required|exists:travels,id',
        ]);

        // Extract data from passenger field
        [$name, $age, $city] = explode(' ', $request->passenger);

        // Generate unique booking code
        $bookingCode = strtoupper(uniqid('BK'));

        // Save passenger
        Passenger::create([
            'booking_code' => $bookingCode,
            'name' => $name,
            'age' => (int)$age,
            'city' => $city,
            'travel_id' => $request->travel_id,
        ]);

        return redirect()->route('passengers.index')->with('success', 'Passenger added successfully!');
    }
}