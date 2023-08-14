<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'color'];

    public function getRouteKeyName() //Este permite que laravel no tome el ID para mostrar la información de una categoría sino el slug.
    {
        return "slug";
    }

    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
