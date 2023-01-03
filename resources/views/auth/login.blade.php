@extends('layouts.app')

@section('title', 'Inicio de sesión')

@section('content')
    <div class="block mx-auto my-lg-5 bg-white">
        <h1 class="h1 text-center">Inicio de sesi&oacute;n</h1>

        <form method="POST" action="">
            @csrf
            <div class="form-outline mb-4">
                <label for="" class="form-label" for="correo">Correo</label>
                <input type="email" class="form-control" id="correo">

                <label for="" class="form-label" for="pass">Contraseña</label>
                <input type="password" class="form-control" id="pass">

                <button type="submit" class="btn btn-primary text-center">Iniciar</button>
            </div>
        </form>
    </div>
@endsection