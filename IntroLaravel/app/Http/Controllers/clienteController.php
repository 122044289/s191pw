<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorCliente;



class clienteController extends Controller
{

    public function home(){
        return view('inicio');
    }

    public function index()
    {
        $consultaClientes= DB::table('cliente')->get();
        return view('clientes', compact('consultaClientes'));
    }

    public function create()
    {
        return view('formulario'); // Redirección a la vista formulario
    }

    /*Aqui preparo el Insert*/
    public function store(validadorCliente $request)
    {
        DB::table('cliente')->insert([
            'nombre' => $request->input('txtnombre'),
            'apellido' => $request->input('txtapellido'),
            'correo' => $request->input('txtcorreo'),
            'telefono' => $request->input('txttelefono'),
            'created_at' => carbon::now(),
            'updated_at' => carbon::now()
        ]);

        $usuario = $request->input('txtnombre'); //Redirección enviando msj en session
        session()->flash('exito', 'Se guardo el usuario: '.$usuario);

        return to_route('rutacacas');
    }


    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $cliente = DB::table('cliente')->where('id', $id)->first();
        return view('actualizar', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'txtnombre' => 'required|string|max:255',
            'txtapellido' => 'required|string|max:255',
            'txtcorreo' => 'required|email',
            'txttelefono' => 'required|string|max:15',
        ]);
    
        DB::table('cliente')->where('id', $id)->update([
            'nombre' => $request->input('txtnombre'),
            'apellido' => $request->input('txtapellido'),
            'correo' => $request->input('txtcorreo'),
            'telefono' => $request->input('txttelefono'),
            'updated_at' => Carbon::now(),
        ]);
        
        return redirect()->route('rutaconsulta')->with('exito', 'Cliente actualizado correctamente.');
    }
    
    
    public function destroy($id)
    {
        DB::table('cliente')->where('id', $id)->delete();
    
        return redirect()->route('rutaconsulta')->with('exito', 'Cliente eliminado correctamente.');
    }
}