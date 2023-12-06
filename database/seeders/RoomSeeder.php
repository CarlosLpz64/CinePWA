<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // php artisan db:seed --class=RoomSeeder
        Room::create([
            'name' => 'Sala 1',
            'seats' => '[]'
        ]);
        Room::create([
            'name' => 'Sala 2',
            'seats' => '[]'
        ]);
        Room::create([
            'name' => 'Sala 3',
            'seats' => '[]'
        ]);
        Room::create([
            'name' => 'Sala 4',
            'seats' => '[]'
        ]);
        Room::create([
            'name' => 'Sala 5',
            'seats' => '[]'
        ]);
    }
}
