<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annouce extends Model
{
    use HasFactory;

/**
 * get the image of the annouces
 */

    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
}
