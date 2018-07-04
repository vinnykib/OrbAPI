<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appreciation extends Model
{
    protected $table = 'appreciations';

    protected $fillable = ['id','name','details','photo','created_at','updated_at'];
}
