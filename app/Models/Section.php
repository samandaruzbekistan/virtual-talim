<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['title', 'name', 'image'];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
