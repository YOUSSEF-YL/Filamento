<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content', // Could be video URL, text, or file path
        'course_id',
        'order',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
