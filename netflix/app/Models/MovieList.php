<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieList extends Model
{
    use HasFactory;

    protected $guarded= [];

    public function movie()
    {
        return $this->hasMany(Movie::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }


}
