<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
        'title',
        'type',
        'duration',
        'point',
        'visible',
    ];
    
    protected $casts = [
        'visible' => 'boolean',
    ];
    
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
