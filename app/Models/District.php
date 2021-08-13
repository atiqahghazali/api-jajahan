<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'state_id',
        'name',
        'code_3',
    ];

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    public function subdistricts()
    {
        return $this->hasMany(SubDistrict::class);
    }
}
