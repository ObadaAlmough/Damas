<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class order extends Model
{
    use HasFactory;
    public $guarded = [];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product')->withPivot('quantity', 'price', 'map')->withTimestamps();
    }

    public function client()
    {
        return $this->belongsTo(client::class);
    }

    public function delevery()
    {
        return $this->belongsTo(delevery::class);
    }

    public function getCreatedAtAttribute($timestamp)
    {
        return \Carbon\Carbon::parse($timestamp)->format('M d, Y');
    }
}
