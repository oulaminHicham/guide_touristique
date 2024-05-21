<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circuit extends Model
{
    use HasFactory;
    protected $table ="circuits";
    protected $fillable = [
        'titre', 'description', 'prix', 'guide_id',
    ];

}
