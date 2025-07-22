<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['title', 'body', 'quiz', 'section_id'];

    protected $casts = [
        'quiz' => 'json',
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
