<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memorial extends Model
{
    protected $table = 'memorials';

    protected $fillable = ['id','name','date_of_death','details','photo','created_at','updated_at'];
}
