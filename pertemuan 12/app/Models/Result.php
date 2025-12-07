<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_id',
        'major_id',
        'score',
        'rank'
    ];

    public function major()
    {
        return $this->belongsTo(Major::class);
    }
}