<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
     use HasFactory;

    protected $fillable = [
        'user_id',
        'course_id',
        'rating', // Numeric rating, e.g., 1-5
        'comment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
