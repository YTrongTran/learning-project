<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        '_index',
        'question_text',
        'passage',
        'image',
        'audio',
        'type',
        'answer_1',
        'answer_2',
        'answer_3',
        'answer_4',
        'answer_correct',
        'exam_id',
    ];
    
    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
}
