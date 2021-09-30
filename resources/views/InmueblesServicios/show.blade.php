@extends ("layouts.app")

@section("body")
<div class="row">
    <div class="col">
        <h3 class="text-center">Inmuebles<a href="/Inmuebles/Servicios"></h3>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Código</th>
                    <th>Descripción</th>
                    <th>Tipo</th>
                    <th>Servicio</th>
                    <th>Valor</th>
                    <th>Área</th>
                    <th>Zona</th>
                
            </thead>
            <tbody>
                @foreach($inmuebles as $value)
                <tr> 
                    <td>{{$value->id}}</td>
                    <td>{{$value->codigo}}</td>
                    <td>{{$value->descripcion}}</td>
                    <td>{{$value->tipo}}</td>
                    <td>{{$value->servicio}}</td>
                    <td>{{$value->valor}}</td>
                    <td>{{$value->area}}</td>
                    <td>{{$value->zona}}</td>
                    <td>
                        <a class="btn btn-info" href="/Inmuebles/listar2?id={{$value->id}}">Ver</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@if(count($servicios) > 0)
<div class="row">
    <div class="col">
        <table class="table">
            <thead>
                    <tr>
                        <th colspan="4" class="text-center">Servicios</th>
                    </tr>
                    <tr>
                        <th>Nombre servicio</th>
                    </tr>
            </thead>
            <tbody>
                @foreach($servicios as $value)
                <tr> 
                    <td>{{$value->nombreServicio}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection
