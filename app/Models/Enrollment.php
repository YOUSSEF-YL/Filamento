<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enrollment extends Model
{
     use HasFactory;

    protected $fillable = [
        'user_id',
        'course_id',
        'status', // e.g., 'active', 'completed'
        'progress', // Percentage or lesson count
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
