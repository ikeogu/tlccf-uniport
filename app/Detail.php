<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    //
    protected $fillable = ['name','address','phone','dept','parent','p_phone'];
}
