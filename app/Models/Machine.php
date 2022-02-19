<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [
        'id',
        'workshop_id',
        'model',
        'factory_number',
        'production_year',
        'company_manufacturer'
    ];

    public function workshop()
    {
        return $this->belongsTo(Workshop::class);
    }
}
