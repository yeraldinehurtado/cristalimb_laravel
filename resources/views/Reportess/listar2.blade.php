@extends ("layouts.app")
@section("body")
<div class="card">
    <div class="card-header">
        <strong>Historial inmuebles</strong>
    </div>
    <div class="card-body">
        @include('flash::message')
        <table class="table table-border">
            <tr>
                <th>Código</th>
                <th>Descripción</th>
                <th>Tipo</th>
                <th>Servicio</th>
                <th>Valor</th>
                <th>Área</th>
                <th>Zona</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
            <tr>
                <td>R33</td>
                <td>2 pisos, 4 habitaciones</td>
                <td>Casa</td>
                <td>Venta</td>
                <td>490.000.000</td>
                <td>125 m2</td>
                <td>Laureles</td>
                <td>Libre</td>
                <td><i class="fas fa-edit"></i><i class="fas fa-trash-alt"></i><i class="fas fa-toggle-on"></i></td>
            </tr>
        </table>
    </div>
</div>
@endsection

                
