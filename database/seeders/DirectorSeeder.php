<?php

namespace Database\Seeders;

use App\Models\Director;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // php artisan db:seed --class=DirectorSeeder
        Director::create(['name' => 'Carlos López']);
        Director::create(['name' => 'América Loera']);
        Director::create(['name' => 'Mariano Alejandro']);
        Director::create(['name' => 'Kenneth Reyes']);
        Director::create(['name' => 'Brenda Azucena']);
    }
}
