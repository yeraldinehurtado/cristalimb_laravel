@extends('layouts.landing')
@section('contenido')

<header class="masthead">
            <div class="container">
                
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="card-header">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Agendar una cita.</h2>
                </div>
                <div class="card-body">
                @include('flash::message')
                <form action="/Citas/guardar" method="POST">
                @csrf
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="identificacion">Identificación</label>
                            <input type="text" class="form-control @error('identificacion') id-invalid @enderror" name="identificacion">
                            @error('identificacion')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="nombres">Nombres</label>
                            <input type="text" class="form-control @error('nombres') id-invalid @enderror" name="nombres">
                            @error('nombres')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control @error('apellidos') id-invalid @enderror" name="apellidos">
                            @error('apellidos')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="text" class="form-control @error('telefono') id-invalid @enderror" name="telefono">
                            @error('telefono')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control @error('email') id-invalid @enderror" name="email">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="tipoServicio">Tipo de Servicio</label>
                            <input type="text" class="form-control @error('tipoServicio') id-invalid @enderror" name="tipoServicio">
                            @error('tipoServicio')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="fechaCita">Fecha cita</label>
                            <input type="date" class="form-control @error('fechaCita') id-invalid @enderror" name="fechaCita">
                            @error('fechaCita')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                    <button type="submit" class="btn btn-success float-right">Guardar</button>
            </form>
        </div>
        </div>
    </div>
</section>
@endsection