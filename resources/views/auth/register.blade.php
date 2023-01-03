@extends('layouts.app')

@section('title', 'Registro')

@section('content')
<div class="block mx-auto my-lg-5 bg-white">
    <h1 class="h1 text-center">Registro</h1>

    <form method="POST" action="">
        @csrf
        <div class="form-outline mb-4">
            <label for="" class="form-label" for="name">Nombre</label>
            <input type="text" class="form-control" id="name" placeholder="nombre">

            <label for="" class="form-label" for="nombre">Apellido paterno</label>
            <input type="text" class="form-control" id="appat" placeholder="apellido paterno">

            <label for="" class="form-label" for="nombre">Apellido materno</label>
            <input type="text" class="form-control" id="apmat" placeholder="apellido materno">

            <label for="" class="form-label" for="email">Correo</label>
            <input type="email" class="form-control" id="email" placeholder="correo">

            <label for="" class="form-label" for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" placeholder="contraseña">

            <label for="" class="form-label" for="password_confirmation">Confirmar contraseña</label>
            <input type="password" class="form-control" id="password_confirmation" placeholder="confirmar contraseña">

            <button type="submit" class="btn btn-primary text-center">Registrar</button>
        </div>
    </form>
</div>
@endsection