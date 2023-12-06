<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;
    protected $table = "directors";
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable=['name'];

    // Relación con el modelo Movie
    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
