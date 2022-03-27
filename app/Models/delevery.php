<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class delevery extends Model
{
    use HasFactory;
    public $guarded = [];

    public function order()
    {
        return $this->hasMany(order::class);
    }

}
