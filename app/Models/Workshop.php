<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    protected $fillable = [
        'name',
        'division_code'
    ];

    public function machines()
    {
        return $this->hasMany(Machine::class);
    }
}
