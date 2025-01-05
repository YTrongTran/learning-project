<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['exam_id', 'content'];
    
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
