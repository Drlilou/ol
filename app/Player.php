<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected  $table='players';
    protected $fillable = ['id'
    ,'position'
    ,'first_name'
    ,'last_name',
    'img'
    ,'birth_date'
    ];}

