@extends ("layouts.app")
@section("body")
<div class="card">
    <div class="card-header">
        <strong>Registrar usuario</strong>
    </div>
    <div class="card-body">
        @include('flash::message')
        <form action="/Usuarios/guardar" method="POST">
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
                    <label for="nombreUsuario">Nombre de usuario</label>
                    <input type="text" class="form-control @error('nombreUsuario') id-invalid @enderror" name="nombreUsuario">
                    @error('nombreUsuario')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="correo">Correo</label>
                    <input type="text" class="form-control @error('correo') id-invalid @enderror" name="correo">
                    @error('correo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="rol">Rol</label>
                    <input type="text" class="form-control @error('rol') id-invalid @enderror" name="rol">
                    @error('rol')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="contraseña">Contraseña</label>
                    <input type="text" class="form-control @error('contraseña') id-invalid @enderror" name="contraseña">
                    @error('contraseña')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="confContraseña">Confirmación de contraseña</label>
                    <input type="text" class="form-control @error('confContraseña') id-invalid @enderror" name="confContraseña">
                    @error('confContraseña')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>        
        </div>
            <button type="submit" class="btn btn-success float-right">Guardar</button>
        </form>
    </div>
</div>
@endsection