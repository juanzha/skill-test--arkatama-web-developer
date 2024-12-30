<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Travel;

class TravelSeeder extends Seeder
{
    public function run()
    {
        $travels = [
            ['destination' => 'Jakarta', 'departure_date' => '2024-01-15'],
            ['destination' => 'Surabaya', 'departure_date' => '2024-02-20'],
            ['destination' => 'Bali', 'departure_date' => '2024-03-10'],
            ['destination' => 'Yogyakarta', 'departure_date' => '2024-04-05'],
        ];

        foreach ($travels as $travel) {
            Travel::create($travel);
        }
    }
}