<?php

namespace App\Models;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class district extends Model
{
    use HasFactory;
    // public $guarded =[];
    protected $fillable = [
        'name_ar',
        'name_en',
    ];


    public $appands = ['name'];

    public function client()
    {
        return $this->hasMany(client::class);
    }






    public function getNameAttribute()
    {
        $lang = App::getLocale();

        $name = $this->{$lang == "ar" ? 'name_ar' : 'name_en'};
        return $name;

    }

}
