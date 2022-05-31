<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cinemas;

class CinemasSeeder extends Seeder
{

    public function run()
    {
        Cinemas::create([
            'cinema_name' => 'Lagos',
        ]);

        Cinemas::create([
            'cinema_name' => 'Abuja',
        ]);

        Cinemas::create([
            'cinema_name' => 'Ibadan',
        ]);
    }
}
