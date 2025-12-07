<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_text',
        'category',
        'order'
    ];

    public function rules()
    {
        return $this->hasMany(Rule::class);
    }

    public function answers()
    {
        return $this->hasMany(TestAnswer::class);
    }
}