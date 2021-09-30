@extends ("layouts.app")
@section("body")
<div class="card">
    <div class="card-header">
        <strong>Roles</strong>
        <a href="/Roles/crear" class="btn btn-link">Crear</a>
    </div>
    <div class="card-body">
        @include('flash::message')
        <table id="Roles" class="table table-border">
            <tr>
                <th>Nombre rol</th>
                <th>Módulo</th>
                <th>Permisos</th>
                <th>Estado</th>
                <th></th>
            </tr>
            <tr>
                <td>Administrador</td>
                <td>Roles</td>
                <td>Crear<br>Editar<br>Activar/des<br>Eliminar</td>
                <td>Activo</td>
                <td><i class="fas fa-edit"></i><i class="fas fa-trash-alt"></i><i class="fas fa-toggle-on"></i></td>
            </tr>
            <tr>
                <td>Administrador</td>
                <td>Empleados</td>
                <td>Crear<br>Editar<br>Activar/des<br>VerDetalle</td>
                <td>Activo</td>
                <td><i class="fas fa-edit"></i><i class="fas fa-trash-alt"></i><i class="fas fa-toggle-on"></i></td>
            </tr>
            <tr>
                <td>Empleado</td>
                <td>Empleados</td>
                <td>VerDetalle</td>
                <td>Desactivo</td>
                <td><i class="fas fa-edit"></i><i class="fas fa-trash-alt"></i><i class="fas fa-toggle-on"></i></td>
            </tr>
        </table>
    </div>
</div>
@endsection



