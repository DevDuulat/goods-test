<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    use HasFactory;

    protected $casts = [
        'prices' => 'array',
    ];

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }

    public function characteristics()
    {
        return $this->hasMany(Characteristic::class);
    }
}
