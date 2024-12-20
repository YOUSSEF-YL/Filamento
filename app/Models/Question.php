<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
      use HasFactory;

    protected $fillable = [
        'quiz_id',
        'question_text',
        'type', // e.g., 'multiple_choice', 'true_false'
        'options', // JSON for options (if applicable)
        'correct_answer', // JSON or text
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
