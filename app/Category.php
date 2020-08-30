<?php

namespace App;

use App\User;
use App\Lecture;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    public function users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function lectures(){
        return $this->hasMany(Lecture::class)->orderBy('created_at');
    }

    public function numLectures(){
        return $this->lectures->count();
    }
}
