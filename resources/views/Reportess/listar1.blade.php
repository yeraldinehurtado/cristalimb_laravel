@extends ("layouts.app")
@section("body")
<div class="card">
    <div class="card-header">
        <strong>Historial propietarios</strong>
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
                <th>Acciones</th>
            </tr>
            <tr>
                <td>1233</td>
                <td>Esteban</td>
                <td>Ruiz</td>
                <td>434556</td>
                <td>esteban@gmail.com</td>
                <td>calle 61-56</td>
                <td><i class="fas fa-edit"></i><i class="fas fa-trash-alt"></i><i class="fas fa-toggle-on"></i></td>
            </tr>
        </table>
    </div>
</div>
@endsection

                
