<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable= ['name', 'description', 'location', 'price', 'starts_at'];
    //!!! contraire => protectd $guarded = ['id'];

    // on utilise la transformation de date de Laravel / Carbon pour 'starts_at'
    //protected $dates = ['starts_at'];

    protected $casts = [
        'starts_at' => 'datetime',
        'price' => 'float',
    ];

    public function isFree() 
    {
        return $this->price == 0;
    }
}
