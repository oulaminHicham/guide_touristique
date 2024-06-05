<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'distination_id',
        'user_id',
        'cirquit_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cirquit()
    {
        return $this->belongsTo(Cirquit::class);
    }

    public function distination(){
        return $this->belongsTo(Distination::class);
    }
}
