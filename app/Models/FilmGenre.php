<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmGenre extends Model
{
    protected $fillable = ['film_id','genre_id'];
    use HasFactory;
    protected $table = 'film_genre';
}
