@extends ("layouts.app")
@section("body")
<div class="card">
    <div class="card-header">
        <strong>Usuarios</strong>
        <a href="/Propietarios/crear" class="btn btn-link">Crear</a>
    </div>
    <div class="card-body">
        @include('flash::message')
        <table class="table table-border">
            <tr>
                <th>Identificación</th>
                <th>Nombre de usuario</th>
                <th>Correo</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
            <tr>
                <td>1233</td>
                <td>Estebangd</td>
                <td>esteban@gmail.com</td>
                <td>Administrador</td>
                <td><i class="fas fa-edit"></i><i class="fas fa-trash-alt"></i><i class="fas fa-toggle-on"></i></td>
            </tr>
        </table>
    </div>
</div>
@endsection

                
