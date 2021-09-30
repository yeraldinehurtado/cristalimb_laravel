@extends('layouts.app')

@section('body')
<div class="card">
<div class="card-header">
    <strong>Modificar usuarios</strong>
</div>
<div class="card-body">
    @include('flash::message')
    <form action="/Usuarios/actualizar" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$usuarios->id}}">
        <div class="row">
            <div class="col-4">
                <div class="form group">
                    <label for="identificacion">Identificación</label>
                    <input value="{{ $usuarios->identificacion }}" type="text" 
                    class="form-control @error('identificacion') is-invalid @enderror" name="identificacion">
                    @error('identificacion')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="nombreUsuario">Nombre de usuario</label>
                    <input value="{{ $usuarios->nombreUsuario }}" type="text" 
                    class="form-control @error('nombreUsuario') is-invalid @enderror" name="nombreUsuario">
                    @error('nombreUsuario')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="correo">Correo</label>
                    <input value="{{ $usuarios->correo }}" type="text" 
                    class="form-control @error('correo') is-invalid @enderror" name="correo">
                    @error('correo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="rol">Rol</label>
                    <input value="{{ $usuarios->rol }}" type="text" 
                    class="form-control @error('rol') is-invalid @enderror" name="rol">
                    @error('rol')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="contraseña">Contraseña</label>
                    <input value="{{ $usuarios->contraseña }}" type="text" 
                    class="form-control @error('contraseña') is-invalid @enderror" name="contraseña">
                    @error('contraseña')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="confContraseña">Confirmación de contraseña</label>
                    <input value="{{ $usuarios->confContraseña }}" type="text" 
                    class="form-control @error('confContraseña') is-invalid @enderror" name="confContraseña">
                    @error('confContraseña')
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