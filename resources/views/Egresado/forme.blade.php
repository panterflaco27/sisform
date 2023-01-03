@extends('layouts.varacad')

@section('title', 'Egresados')

@section('contenidoacademico')
    <!--formulario para agregar egresados-->
    <div class="container py-5 text-center">
        <h1 class="h1 text-center -mb-2">Agregar egresados</h1>
        
        <form action="" method="POST">
            @csrf

            <div class="container text-center">
                <div class="mb-3 row align-items-lg-center">
                    <div class="mb-3 col-3">
                        <label for="nombre" class="form-label h5">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="mb-3 col-3">
                        <label for="appat" class="form-label h5">Apellido paterno</label>
                        <input type="text" name="appat" class="form-control" placeholder="Apellido paterno">
                    </div>
                    <div class="mb-3 col-3">
                        <label for="apmat" class="form-label h5">Apellido materno</label>
                        <input type="text" name="apmat" class="form-control" placeholder="Apellido materno">
                    </div>
                    <div class="mb-3 col-3">
                        <label for="nocontrol" class="form-label h5">Número de control</label>
                        <input type="text" name="nocontrol" class="form-control" placeholder="Número de control">
                    </div>
                </div>
                
                <div class="mb-3 row justify-content-evenly">
                    <div class="mb-3 col-4">
                        <label for="fechnac" class="form-label h5">Fecha de nacimiento</label>
                        <input type="date" name="fechnac" class="form-control">
                    </div>
                    <div class="mb-3 col-5">
                        <label for="curp" class="form-label h5">CURP</label>
                        <input type="text" name="curp" class="form-control" placeholder="CURP">
                    </div>
                </div>
                
                <div class="mb-3 row justify-content-between">
                    <div class="mb-3 col-6">
                        <label class="form-label h5 col-2">Sexo:</label>
                        <label class="col-2" for="hombre">Hombre</label>
                        <input type="radio" value="H">
                        <label class="col-2" for="mujer">Mujer</label>
                        <input type="radio" value="M">
                    </div>
                    <div class="mb-3 col-6">
                        <label class="form-label h5 col-3">Estado civil:</label>
                        <label class="col-2" for="solteroa">Soltero(a)</label>
                        <input type="radio" value="oltero(a)">
                        <label class="col-2" for="casadoa">Casado(a)</label>
                        <input type="radio" value="casado(a)">
                        <label class="col-1" for="otro">Otro</label>
                        <input type="radio" value="otro">
                    </div>
                </div>
                
                <div class="mb-3 row justify-content-center">
                    <div class="mb-3 align-content-around">
                        <label class="form-label col-1 h5">Domicilio:</label>
                        <div class="col-3">
                            <input class="form-control" type="text" name="calle" placeholder="calle">
                        </div>
                        <div class="col-3">
                            <input class="form-control" type="number" name="numero" placeholder="numero">
                        </div>
                        <input class="col-3 form-control" type="text" name="colonia" placeholder="colonia">
                        <input class="col-1.5 form-control" type="number" name="codigopostal" placeholder="código postal">
                    </div>
                </div>

                <div class="mb-3 row justify-content-between">
                    <div class="mb-3">
                        <label class="form-label h5 col-1" for="ciudad">Ciudad:</label>
                        <input class="col-3 form-control" type="text" name="ciudad" placeholder="ciudad">
                        <label class="form-label h5 col-1.5" for="municipio">Municipio:</label>
                        <input class="col-3 form-control" type="text" name="municipio" placeholder="municipio">
                        <label class="form-label h5 col-1.5" for="estado">Estado:</label>
                        <input class="col-3 form-control" type="text" name="estado" placeholder="estado">
                    </div>
                </div>
                <div class="mb-3 row align-content-evenly">
                    <div class="mb-3">
                        <label class="form-label h5 col-1" for="telefono">Teléfono:</label>
                        <input class="col-2 form-control" type="number" name="telefono">
                        <label class="form-label h5 col-2" for="telcasa">Teléfono de casa paterna:</label>
                        <input class="col-2 form-control" type="number" name="telcasa">
                        <label class="form-label h5 col-1" for="correo">Correo:</label>
                        <input class="col-3 form-control" type="email" name="correo" placeholder="nombre@ejemplo.com">
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="mb-3">
                        <label class="form-label h5 col-1" for="carrera">Carrera:</label>
                        <input class="col-2 form-control" type="text" name="carrera" placeholder="carrea">
                        <label class="form-label h5 col-2" for="especialidad">Especialidad:</label>
                        <input class="col-2 form-control" type="text" name="especialidad" placeholder="especialidad">
                        <label class="form-label h5 col-2" for="mesanioegreso">Mes y año de egreso</label>
                        <input class="col-2 form-control" type="date">
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="mb-3">
                        <label class="form-label h5 col-1">Titulado(a)</label>
                        <label class="form-label col-1" for="si">Sí</label>
                        <input type="radio" name="si" value="si">
                        <label class="form-label col-1" for="no">No</label>
                        <input type="radio" name="no" value="no">
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="mb-3">
                        <label class="form-label h5 col-4">Dominio de idioma extranjero: inglés</label>
                        <input class="col-2 form-control" type="number">
                        <label class="form-label h5 col-1">Otro:</label>
                        <input class="col-3 form-control" type="text" placeholder="otro">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="mb-3">
                        <label class="form-label h5 col-4">Manejo de paquetes computacionales (especificar):</label>
                        <textarea class="form-control col-5" cols="30" rows="5"></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection