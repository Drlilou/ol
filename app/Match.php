<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
 //
 protected  $table='matchs';
 protected $fillable = ['id'
 ,'cup'
 ,'stadium'
 ,'rival_team',
 'logo_rival_team'
 ,'game_place'
 ,'time'
 ];
}
