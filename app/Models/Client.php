<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;
    public $guarded =[];
    // public $append =['address'];
    public function order()
    {
        return $this->hasMany(order::class);
    }

    public function district()
    {
        return $this->belongsTo(district::class);
    }
    public function address(){

        $nearest_landmark = $this->nearest_landmark ?'-'. $this->nearest_landmark : '';
        $flat = $this->flat ? '/'. $this->flat : '';

        return $this->Building . $flat . $this->district->name . $nearest_landmark ;
    }

    public function Bulding(){

        $flat = $this->flat ? '/'. $this->flat : '';

        return $this->Building . $flat . '  ' . $this->district->name ;
    }
    
    public function getCreatedAtAttribute($timestamp) {
        return \Carbon\Carbon::parse($timestamp)->format('M d, Y');
    }

}
