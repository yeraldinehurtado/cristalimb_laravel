@extends ("layouts.app")
@section("body")
<div class="card">
    <div class="card-header">
        <strong>Propietarios</strong>
        <a href="/Empleados/crear" class="btn btn-link">Crear</a>
    </div>
    <div class="card-body">
        @include('flash::message')
        <table class="table table-border">
            <tr>
                <th>Identificación</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Dirección</th>
                <th>Cargo</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Alfredo</td>
                <td>Alvares</td>
                <td>24543</td>
                <td>alv1@gmail.com</td>
                <td>calle b23</td>
                <td>Analista</td>
                <td>Activo</td>
                <td><i class="fas fa-edit"></i><i class="fas fa-trash-alt"></i><i class="fas fa-toggle-on"></i></td>
            </tr>
        </table>
    </div>
</div>
@endsection