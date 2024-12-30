<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Passenger;

class PassengerSeeder extends Seeder
{
    public function run()
    {
        $passengers = [
            ['booking_code' => 'BK1234', 'name' => 'John Doe', 'age' => 25, 'city' => 'Jakarta', 'travel_id' => 1],
            ['booking_code' => 'BK1235', 'name' => 'Jane Smith', 'age' => 30, 'city' => 'Surabaya', 'travel_id' => 2],
            ['booking_code' => 'BK1236', 'name' => 'Alex Johnson', 'age' => 28, 'city' => 'Bali', 'travel_id' => 3],
            ['booking_code' => 'BK1237', 'name' => 'Linda Brown', 'age' => 35, 'city' => 'Yogyakarta', 'travel_id' => 4],
        ];

        foreach ($passengers as $passenger) {
            Passenger::create($passenger);
        }
    }
}
