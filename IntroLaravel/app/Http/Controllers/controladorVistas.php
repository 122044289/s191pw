<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function procesarCliente(Request $peticion){
        //Respuesta a la peticion POST
        //return 'La info del cliente llego al controlador';
        

        // $peticion->header('X-Header-Name');
        //$value = $peticion->header('X-Header-Name');
        //echo($value);

        //return $peticion->ip(); //Funcion para mostrar la ip de la peticion
        //return $peticion->path(); //Funcion que muestra la ruta de la peticion.
        //return $peticion->url(); //Funcion que muestra la url de la peticion.   
       // return back; //Funcion que muestra todos los datos de la peticion.
    
      // $id= [['usuario'=>'1'],['usuario'=>'2']];
      // return view('formulario', compact('id'));

      //redireccion enviando mesaje en session
        $usuario= $peticion-> input('txtnombre');
        session()->flash('exito','se guardo el usuario: '.$usuario);

        return to_route('rutacacas');

    }

}