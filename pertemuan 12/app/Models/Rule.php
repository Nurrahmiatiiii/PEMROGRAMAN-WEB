<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'major_id',
        'min_value',
        'weight'
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function major()
    {
        return $this->belongsTo(Major::class);
    }
}