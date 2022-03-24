<?php

namespace App\Models;

use App\Models\order;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    public $guarded = [];
    protected $casts = [
        'price' => 'array'
    ];
    protected $appands = ['name_lan'];

    public function getNamelanAttribute()
    {
        $lang = App::getLocale();

        $name = $this->{$lang == "ar" ? 'name_ar' : 'name_en'};
        return $name;

    }

    public function orders()
    {
        return $this->belongsToMany(order::class, 'order_product')->withPivot('quantity','price','map');
    }
}
