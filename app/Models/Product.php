<?php

namespace App\Models;

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
}
