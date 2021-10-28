<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dun extends Model
{
    use HasFactory;

    protected $fillable = [
        'parliament_id',
        'kerusi_id',
        'state_id',
        'name'
    ];

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }
}
