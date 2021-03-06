@extends ("layouts.app")
@section("body")
<div class="card">
    <div class="card-header">
        <strong>Citas</strong>
        <a href="/Citas/crear" class="btn btn-link">Crear</a> <a href="/Citas/informe" class="btn btn-link">Informe</a>
    </div>
    <div class="card-body">
        @include('flash::message')
        <table id="Citas" class="table table-border">
            <thead>
                <tr>
                    <th>Identificación</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Tipo de Servicio</th>
                    <th>Fecha cita</th>
                    <th>Editar</th>                   
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection

@section("scripts")
<script>
    $('#Citas').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/Citas/listar',
        columns: [
            {data: 'identificacion', name: 'identificacion'},
            {data: 'nombres', name: 'nombres'},
            {data: 'apellidos', name: 'apellidos'},
            {data: 'telefono', name: 'telefono'},
            {data: 'email', name: 'email'},
            {data: 'tipoServicio', name: 'tipoServicio'},
            {data: 'fechaCita', name: 'fechaCita'},
            {data: 'editar', name: 'editar', orderable: false, searchable: false},          
        ]
    });
</script>
@endsection

