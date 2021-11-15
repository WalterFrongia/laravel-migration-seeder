<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TravelPackage extends Model
{
    protected $fillable = ['place' , 'description' , 'days' , 'price'];

    // protected $table serve per modificare il nome della tabella 
    protected $table = 'travelpackages';
}
