@extends('layouts.varacad')

@section('title', 'Egresados')

@section('contenidoacademico')
    <!--formulario para agregar egresados-->
    <div class="container py-5 text-center">
        <h1 class="h1 text-center -mb-2">Lista de egresados</h1>
        <a href="{{ route('egresado.create') }}" class="btn btn-primary justify-center">Agregar egresado</a>
        
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>No. control</th>
                    <th>Gestionar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection