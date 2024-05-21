<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;
    protected $table="commentaires";
    protected $fillable = [
        'client_id', 'circuit_id', 'texte', 'date',
    ];

}
