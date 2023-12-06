<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $table = "movies";
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable=['name', 'duration', 'synopsis', 'cover_path','director_id', 'category_id'];

     public function director()
     {
         return $this->belongsTo(Director::class);
     }
 
     public function category()
     {
         return $this->belongsTo(Category::class);
     }

     public function room()
    {
        return $this->belongsToMany(Room::class, 'movie_plays', 'movie_id', 'room_id');
    }
}
