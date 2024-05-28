<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circuit extends Model
{
    use HasFactory;
    protected $fillable = [
        'photos',
        'description',
        'price',
        'guide_id',
        'destination_id',
    ];
}
