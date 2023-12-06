<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Acción',
            'description' => 'Películas llenas de emocionantes escenas de acción y suspenso.'
        ]);

        Category::create([
            'name' => 'Comedia',
            'description' => 'Películas diseñadas para hacer reír al público con situaciones cómicas.'
        ]);

        Category::create([
            'name' => 'Ciencia Ficción',
            'description' => 'Explorando mundos futuristas, tecnologías avanzadas y conceptos fuera de este mundo, las películas de ciencia ficción llevan a los espectadores a viajes imaginativos. Abordan temas de futuro, espacio y posibilidades infinitas.'
        ]);

        Category::create([
            'name' => 'Drama',
            'description' => 'Profundizando en las complejidades de la vida humana, las películas de drama presentan historias emocionales y personajes con los que el público puede identificarse. Tratan temas serios con sensibilidad y realismo.'
        ]);

        Category::create([
            'name' => 'Terror',
            'description' => 'Diseñadas para enviar escalofríos por la espina dorsal, las películas de terror se centran en el miedo y la suspense. Criaturas aterradoras, situaciones paranormales y giros inesperados mantienen a los espectadores en vilo. ¡Prepárate para asustarte!'
        ]);
    }
}
