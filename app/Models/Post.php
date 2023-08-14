<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'update_at'];

    //Relación de uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    //mUCHOS A MUCHOS

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }


    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
