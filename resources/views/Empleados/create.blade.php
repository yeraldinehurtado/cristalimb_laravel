@extends ("layouts.app")
@section("body")
<div class="card">
    <div class="card-header">
        <strong>Registrar Empleados</strong>
    </div>
    <div class="card-body">
        @include('flash::message')
        <form>
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
                    <label for="direccion">Dirección</label>
                    <input type="text" class="form-control @error('direccion') id-invalid @enderror" name="direccion">
                    @error('direccion')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="cargo">Cargo</label>
                    <input type="text" class="form-control @error('direccion') id-invalid @enderror" name="cargo">
                    @error('cargo')
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