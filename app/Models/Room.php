<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table = "rooms";
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable=['name', 'seats'];

    public function movie()
    {
        return $this->belongsToMany(Movie::class, 'movie_plays', 'room_id', 'movie_id');
    }
}
