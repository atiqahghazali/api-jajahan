<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_long',
        'code2',
        'code3',
        'capital',
    ];

    public function districts()
    {
        return $this->hasMany(District::class);
    }

    public function duns()
    {
        return $this->hasMany(Dun::class);
    }

    public function parliaments()
    {
        return $this->hasMany(Parliament::class);
    }
}
