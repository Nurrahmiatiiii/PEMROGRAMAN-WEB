<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'description',
        'subjects',
        'career_prospects'
    ];

    public function rules()
    {
        return $this->hasMany(Rule::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }
}