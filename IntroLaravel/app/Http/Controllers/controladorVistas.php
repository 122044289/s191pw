<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

class controladorvistas extends Controller
{
    public function home(){
        return view('inicio');
    }

    public function insert(){
        return view('formulario');
    }

    public function select(){
        return view('clientes');
    }

    public function procesarCliente(validadorCliente $peticion){

       
        $usuario = $peticion->input('txtnombre'); //Redirección enviando msj en session
        session()->flash('exito', 'Se guardo el usuario: '.$usuario);

        return to_route('rutacacas');
    }
}