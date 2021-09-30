@extends ("layouts.app")

@section("body")
<div class="row">
    <div class="col">
        <h3 class="text-center">Propietarios<a href="/propietarios/inmuebles"></h3>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table">
            <thead>
                <tr>
                    <th>Identificación</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Télefono</th>
                    <th>Email</th>
                    <th>Dirección</th>
                    <th>Opciones</th>

            </thead>
            <tbody>
                @foreach($propietarios as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->identificacion}}</td>
                    <td>{{$value->nombres}}</td>
                    <td>{{$value->apellidos}}</td>
                    <td>{{$value->telefono}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->direccion}}</td>
                    <td>
                        <a class="btn btn-info" href="/PropInmuebles/listar2?id={{$value->id}}">Ver</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection