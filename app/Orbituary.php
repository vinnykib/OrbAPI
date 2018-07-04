<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orbituary extends Model
{
    protected $table = 'orbituaries';

    protected $fillable = ['id','name','date_of_burial','details','photo','map_photo','euology_photo','created_at','updated_at'];
}
