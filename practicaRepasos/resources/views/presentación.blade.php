@extends('layouts.buscador')

@section('titulo', 'presentación- Practica Repasos')

@section('buscador')

<div class="container">

<div class="jumbotron text-center mt-5" style="background-color: #CDB5E1; color: #2C003E; padding: 60px; border-radius: 25px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);">
  <h1 class="display-2" style="font-family: 'Poppins', sans-serif; font-weight: bold;">Programación Web</h1>
  <p class="lead" style="font-family: 'Roboto', sans-serif; font-size: 1.5rem; margin-bottom: 30px;">Ami Román</p>
  <a class="btn btn-primary btn-lg" href="{{route('rutarepaso1')}}" style="background-color: #6A0DAD; border-color: #6A0DAD; font-family: 'Roboto', sans-serif; padding: 10px 30px;">¡Vamos!</a>
</div>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto:wght@400&display=swap" rel="stylesheet">


</div>        
@endsection        