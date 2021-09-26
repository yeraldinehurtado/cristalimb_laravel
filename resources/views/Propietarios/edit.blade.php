@extends('layouts.app')

@section('body')
<div class="card">
<div class="card-header">
    <strong>Modificar propietario</strong>
</div>
<div class="card-body">
    @include('flash::message')
    <form action="/Propietarios/actualizar" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$propietarios->id}}">
        <div class="row">
            <div class="col-4">
                <div class="form group">
                    <label for="identificacion">Identificación</label>
                    <input value="{{ $propietarios->identificacion }}" type="text" 
                    class="form-control @error('identificacion') is-invalid @enderror" name="identificacion">
                    @error('identificacion')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="nombres">Nombres</label>
                    <input value="{{ $propietarios->nombres }}" type="text" 
                    class="form-control @error('nombres') is-invalid @enderror" name="nombres">
                    @error('nombres')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input value="{{ $propietarios->apellidos }}" type="text" 
                    class="form-control @error('apellidos') is-invalid @enderror" name="apellidos">
                    @error('apellidos')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input value="{{ $propietarios->telefono }}" type="text" 
                    class="form-control @error('telefono') is-invalid @enderror" name="telefono">
                    @error('telefono')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input value="{{ $propietarios->email }}" type="text" 
                    class="form-control @error('email') is-invalid @enderror" name="email">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input value="{{ $propietarios->direccion }}" type="text" 
                    class="form-control @error('direccion') is-invalid @enderror" name="direccion">
                    @error('direccion')
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