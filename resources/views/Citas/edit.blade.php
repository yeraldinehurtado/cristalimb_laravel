@extends('layouts.app')

@section('body')
<div class="card">
<div class="card-header">
    <strong>Modificar cita</strong>
</div>
<div class="card-body">
    @include('flash::message')
    <form action="/Citas/actualizar" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$citas->id}}">
        <div class="row">
            <div class="col-4">
                <div class="form group">
                    <label for="identificacion">Identificación</label>
                    <input value="{{ $citas->identificacion }}" type="text" 
                    class="form-control @error('identificacion') is-invalid @enderror" name="identificacion">
                    @error('identificacion')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="nombres">Nombres</label>
                    <input value="{{ $citas->nombres }}" type="text" 
                    class="form-control @error('nombres') is-invalid @enderror" name="nombres">
                    @error('nombres')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input value="{{ $citas->apellidos }}" type="text" 
                    class="form-control @error('apellidos') is-invalid @enderror" name="apellidos">
                    @error('apellidos')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input value="{{ $citas->telefono }}" type="text" 
                    class="form-control @error('telefono') is-invalid @enderror" name="telefono">
                    @error('telefono')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input value="{{ $citas->email }}" type="text" 
                    class="form-control @error('email') is-invalid @enderror" name="email">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="tipoServicio">Tipo de Servicio</label>
                    <input value="{{ $citas->tipoServicio }}" type="text" 
                    class="form-control @error('tipoServicio') is-invalid @enderror" name="tipoServicio">
                    @error('tipoServicio')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="fechahoraCita">Fecha y hora de la cita</label>
                    <input value="{{ $citas->fechahoraCita }}" type="datetime" 
                    class="form-control @error('fechahoraCita') is-invalid @enderror" name="fechahoraCita">
                    @error('fechahoraCita')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

        </div>
            <button type="submit" class="btn btn-warning float-right">Modificar</button>       
    </form>
    </div>
</div>
@endsection