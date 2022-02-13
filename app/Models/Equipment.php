<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    public $incrementing = false;

    public function workshops()
    {
        return $this->belongsTo(Workshop::class);
    }
}
