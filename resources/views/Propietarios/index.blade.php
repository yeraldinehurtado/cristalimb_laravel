@extends ("layouts.app")
@section("body")
<div class="card">
    <div class="card-header">
        <strong>Propietarios</strong>
        <a href="/Propietarios/crear" class="btn btn-link">Crear</a>
    </div>
    <div class="card-body">
        @include('flash::message')
        <table id="Propietarios" class="table table-border">
            <thead>
                <tr>
                    <th>Identificación</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Dirección</th>
                    <th>Estado</th>
                    <th>Editar</th>
                    <th>Cambiar Estado</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection

@section("scripts")
<script>
    $('#Propietarios').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/Propietarios/listar',
        columns: [
            {data: 'identificacion', name: 'identificacion'},
            {data: 'nombres', name: 'nombres'},
            {data: 'apellidos', name: 'apellidos'},
            {data: 'telefono', name: 'telefono'},
            {data: 'email', name: 'email'},
            {data: 'direccion', name: 'direccion'},
            {data: 'estado', name: 'estado'},
            {data: 'editar', name: 'editar', orderable: false, searchable: false},
            {data: 'cambiar', name: 'cambiar', orderable: false, searchable: false}
        ]
    });
</script>
@endsection

