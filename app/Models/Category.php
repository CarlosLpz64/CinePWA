<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "categories";
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable=['name', 'description'];

    // Relación con el modelo Movie
    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
