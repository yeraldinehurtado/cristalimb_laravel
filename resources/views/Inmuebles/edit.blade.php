@extends('layouts.app')

@section('body')
<div class="card">
<div class="card-header">
    <strong>Modificar inmueble</strong>
</div>
<div class="card-body">
    @include('flash::message')
    <form action="/Inmuebles/actualizar" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$inmuebles->id}}">
        <div class="row">
            <div class="col-4">
                <div class="form group">
                    <label for="codigo">Código</label>
                    <input value="{{ $inmuebles->codigo }}" type="text" 
                    class="form-control @error('codigo') is-invalid @enderror" name="codigo">
                    @error('codigo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <input value="{{ $inmuebles->descripcion }}" type="text" 
                    class="form-control @error('descripcion') is-invalid @enderror" name="descripcion">
                    @error('descripcion')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="tipo">Tipo</label>
                    <input value="{{ $inmuebles->tipo }}" type="text" 
                    class="form-control @error('tipo') is-invalid @enderror" name="tipo">
                    @error('tipo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="servicio">Servicio</label>
                    <input value="{{ $inmuebles->servicio }}" type="text" 
                    class="form-control @error('servicio') is-invalid @enderror" name="servicio">
                    @error('servicio')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="valor">Valor</label>
                    <input value="{{ $inmuebles->valor }}" type="text" 
                    class="form-control @error('valor') is-invalid @enderror" name="valor">
                    @error('valor')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="area">Área</label>
                    <input value="{{ $inmuebles->area }}" type="text" 
                    class="form-control @error('area') is-invalid @enderror" name="area">
                    @error('area')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="zona">Zona</label>
                    <input value="{{ $inmuebles->zona }}" type="text" 
                    class="form-control @error('zona') is-invalid @enderror" name="zona">
                    @error('zona')
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