@extends ("layouts.app")
@section("body")
<div class="card">
    <div class="card-header">
        <strong>Registrar cita</strong>
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
                    <label for="fechahoraCita">Fecha y hora de la cita</label>
                    <input type="datetime" class="form-control @error('fechahoraCita') id-invalid @enderror" name="fechahoraCita">
                    @error('fechahoraCita')
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