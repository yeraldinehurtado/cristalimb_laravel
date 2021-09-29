@extends ("layouts.app")
@section("body")
<div class="card">
    <div class="card-header">
        <strong>Registrar inmueble</strong>
    </div>
    <div class="card-body">
        @include('flash::message')
        <form action="/Inmuebles/guardar" method="POST">
        @csrf
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="codigo">Código</label>
                    <input type="text" class="form-control @error('codigo') id-invalid @enderror" name="codigo">
                    @error('codigo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <input type="text" class="form-control @error('descripcion') id-invalid @enderror" name="descripcion">
                    @error('descripcion')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="tipo">Tipo</label>
                    <input type="text" class="form-control @error('tipo') id-invalid @enderror" name="tipo">
                    @error('tipo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="servicio">Servicio</label>
                    <input type="text" class="form-control @error('servicio') id-invalid @enderror" name="servicio">
                    @error('servicio')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="valor">Valor</label>
                    <input type="text" class="form-control @error('valor') id-invalid @enderror" name="valor">
                    @error('valor')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="area">Área</label>
                    <input type="text" class="form-control @error('area') id-invalid @enderror" name="area">
                    @error('area')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="zona">Zona</label>
                    <input type="text" class="form-control @error('zona') id-invalid @enderror" name="zona">
                    @error('zona')
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