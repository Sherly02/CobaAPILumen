<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coba extends Model 
{
    protected $table = 'coba';
    protected $fillable = ['id','fistname','lastname','gender','status','email','city','address','phone'];
}
