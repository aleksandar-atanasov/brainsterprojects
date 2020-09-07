<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{

    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
