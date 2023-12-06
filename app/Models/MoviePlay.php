<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoviePlay extends Model
{
    use HasFactory;
    protected $table = "movie_plays";
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable=['movie_id', 'room_id', 'hour_function', 'date_function'];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
