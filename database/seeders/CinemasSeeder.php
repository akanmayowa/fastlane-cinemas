<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cinemas;

class CinemasSeeder extends Seeder
{

    public function run()
    {
        Cinemas::create([
            'movies_id' => 1,
            'cinema_name' => 'Lagos',
        ]);

        Cinemas::create([
            'movies_id' => 2,
            'cinema_name' => 'Abuja',
        ]);

        Cinemas::create([
            'movies_id' => 3,
            'cinema_id' => 'Ibadan',
        ]);
    }
}
