<?php

namespace Database\Seeders;

use App\Models\MoviePlay;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class MoviePlaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        MoviePlay::create([
            'movie_id' => 1,
            'room_id' => 1,
            'hour_function'=> Carbon::now(),
            'date_function'=> Carbon::today()
        ]);
        MoviePlay::create([
            'movie_id' => 1,
            'room_id' => 2,
            'hour_function'=> Carbon::now(),
            'date_function'=> Carbon::today()
        ]);
        MoviePlay::create([
            'movie_id' => 1,
            'room_id' => 3,
            'hour_function'=> Carbon::now(),
            'date_function'=> Carbon::today()
        ]);
        MoviePlay::create([
            'movie_id' => 2,
            'room_id' => 4,
            'hour_function'=> Carbon::now(),
            'date_function'=> Carbon::today()
        ]);
        MoviePlay::create([
            'movie_id' => 3,
            'room_id' => 5,
            'hour_function'=> Carbon::now(),
            'date_function'=> Carbon::today()
        ]);
    }
}
