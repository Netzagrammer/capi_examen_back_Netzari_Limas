<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Users;

class UserController extends Controller
{
    //
    public function ObtenerInfoUsuarios(){
        $usuarios = Users::all();

        for($i=0;$i<count($usuarios);$i++){
            $date = new \DateTime($usuarios[$i]['fecha_nacimiento']);
            $now = new \DateTime();

            $usuarios[$i]['edad'] = $date->diff($now)->y;
        }

        return $usuarios;
    }
}
