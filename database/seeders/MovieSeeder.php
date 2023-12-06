<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // php artisan db:seed --class=MovieSeeder
        // 1
        Movie::create([
            'name' => 'Iron Man',
            'duration' => 126,
            'synopsis' => 'Tony Stark builds a powered suit of armor and becomes the armored superhero Iron Man.',
            'cover_path' => 'https://moviepostermexico.com/cdn/shop/products/iron_man_ver4_xlg_1024x1024@2x.jpg?v=1626931702',
            'director_id' => 1,
            'category_id' => 4,
        ]);

        // 2
        Movie::create([
            'name' => 'The Avengers',
            'duration' => 143,
            'synopsis' => 'Earth\'s mightiest heroes must come together and learn to fight as a team to stop the mischievous Loki and his alien army from enslaving humanity.',
            'cover_path' => 'https://i.pinimg.com/originals/ea/a7/26/eaa726175de6c3300ad13d9bb7402aec.jpg',
            'director_id' => 3,
            'category_id' => 4,
        ]);

        // 3
        Movie::create([
            'name' => 'Black Panther',
            'duration' => 134,
            'synopsis' => 'T\'Challa, heir to the hidden but advanced kingdom of Wakanda, must step forward to lead his people into a new future and confront a challenger from his country\'s past.',
            'cover_path' => 'https://m.media-amazon.com/images/M/MV5BMTg1MTY2MjYzNV5BMl5BanBnXkFtZTgwMTc4NTMwNDI@._V1_.jpg',
            'director_id' => 2,
            'category_id' => 4,
        ]);

        // 4
        Movie::create([
            'name' => 'Guardians of the Galaxy',
            'duration' => 121,
            'synopsis' => 'A group of intergalactic criminals are forced to work together to stop a fanatical warrior from taking control of the universe.',
            'cover_path' => 'https://m.media-amazon.com/images/I/71lbFfxfMtL.jpg',
            'director_id' => 4,
            'category_id' => 4,
        ]);

        // 5
        Movie::create([
            'name' => 'Thor: Ragnarok',
            'duration' => 130,
            'synopsis' => 'Thor is imprisoned on the planet Sakaar and must race against time to return to Asgard and stop Ragnarok, the destruction of his world, at the hands of the powerful and ruthless villain Hela.',
            'cover_path' => 'https://m.media-amazon.com/images/M/MV5BMjMyNDkzMzI1OF5BMl5BanBnXkFtZTgwODcxODg5MjI@._V1_.jpg',
            'director_id' => 5,
            'category_id' => 4,
        ]);

        // 6
        Movie::create([
            'name' => 'Captain America: The Winter Soldier',
            'duration' => 136,
            'synopsis' => 'As Steve Rogers struggles to embrace his role in the modern world, he teams up with a fellow Avenger and S.H.I.E.L.D agent, Black Widow, to battle a new threat from history: an assassin known as the Winter Soldier.',
            'cover_path' => 'https://m.media-amazon.com/images/M/MV5BMzA2NDkwODAwM15BMl5BanBnXkFtZTgwODk5MTgzMTE@._V1_.jpg',
            'director_id' => 3,
            'category_id' => 4,
        ]);

        // 7
        Movie::create([
            'name' => 'Doctor Strange',
            'duration' => 115,
            'synopsis' => 'While on a journey of physical and spiritual healing, a brilliant neurosurgeon is drawn into the world of the mystic arts.',
            'cover_path' => 'https://m.media-amazon.com/images/I/A12-NFRep6L.jpg',
            'director_id' => 2,
            'category_id' => 4,
        ]);

        // 8
        Movie::create([
            'name' => 'Ant-Man',
            'duration' => 117,
            'synopsis' => 'Armed with a super-suit with the astonishing ability to shrink in scale but increase in strength, cat burglar Scott Lang must embrace his inner hero and help his mentor, Dr. Hank Pym, plan and pull off a heist that will save the world.',
            'cover_path' => 'https://m.media-amazon.com/images/I/71E9abm2ayL.jpg',
            'director_id' => 4,
            'category_id' => 4,
        ]);

        // 9
        Movie::create([
            'name' => 'Spider-Man: Homecoming',
            'duration' => 133,
            'synopsis' => 'Peter Parker balances his life as an ordinary high school student in Queens with his superhero alter-ego Spider-Man, and finds himself on the trail of a new menace prowling the skies of New York City.',
            'cover_path' => 'https://moviepostermexico.com/cdn/shop/products/spiderman_homecoming_ver14_1200x1200.jpg?v=1630331545',
            'director_id' => 1,
            'category_id' => 4,
        ]);

        // 10
        Movie::create([
            'name' => 'Captain Marvel',
            'duration' => 123,
            'synopsis' => 'Carol Danvers becomes one of the universe\'s most powerful heroes when Earth is caught in the middle of a galactic war between two alien races.',
            'cover_path' => 'https://m.media-amazon.com/images/M/MV5BMTE0YWFmOTMtYTU2ZS00ZTIxLWE3OTEtYTNiYzBkZjViZThiXkEyXkFqcGdeQXVyODMzMzQ4OTI@._V1_.jpg',
            'director_id' => 5,
            'category_id' => 4,
        ]);
    }
}
