<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'user_domicilio';
    protected $fillable = ['domicilio, numero_exterior, colonia, cp, ciudad, fecha_nacimiento'];
}
