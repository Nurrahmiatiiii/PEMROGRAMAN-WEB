<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_id',
        'completed_at'
    ];

    public function answers()
    {
        return $this->hasMany(TestAnswer::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }
}