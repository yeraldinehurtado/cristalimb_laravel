@extends ("layouts.app")
@section("body")
<div class="card">
    <div class="card-header">
        <strong>Citas</strong>
        <a href="/Citas/crear" class="btn btn-link">Crear</a>
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
                    <th>Fecha y hora de la cita</th>
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
        ajax: '/Propietarios/listar',
        columns: [
            {data: 'identificacion', name: 'identificacion'},
            {data: 'nombres', name: 'nombres'},
            {data: 'apellidos', name: 'apellidos'},
            {data: 'telefono', name: 'telefono'},
            {data: 'email', name: 'email'},
            {data: 'tipoServicio', name: 'tipoServicio'},
            {data: 'fechahoraCita', name: 'fechahoraCita'},
            {data: 'editar', name: 'editar', orderable: false, searchable: false},          
        ]
    });
</script>
@endsection

