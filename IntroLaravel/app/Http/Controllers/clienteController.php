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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = DB::table('clientes')->where('id', $id)->first();

        if (!$cliente) {
            return redirect()->route('clientes.consulta')->with('error', 'Cliente no encontrado.');
        }
 
        return view('clientes.editar', compact('cliente')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = DB::table('clientes')->where('id', $id)->first();

        if (!$cliente) {
            return redirect()->route('clientes.consulta')->with('error', 'Cliente no encontrado.');
        }

        DB::table('clientes')->where('id', $id)->update([
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'correo' => $request->input('correo'),
            'telefono' => $request->input('telefono'),
            'updated_at' => Carbon::now()
        ]);

        return redirect()->route('clientes.consulta')->with('exito', 'Cliente actualizado correctamente.'); 

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = DB::table('clientes')->where('id', $id)->first();

        if (!$cliente) {
            return redirect()->route('clientes.consulta')->with('error', 'Cliente no encontrado.');
        }

        DB::table('clientes')->where('id', $id)->delete();

        return redirect()->route('clientes.consulta')->with('success', 'Cliente eliminado correctamente.');
    }

}