<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circuit extends Model
{
    use HasFactory;
    protected $fillable = [
        'distination',
        'photos',
        'descreption',
        'prix',
        'guide_id',
        'distination_id',
    ];
}
