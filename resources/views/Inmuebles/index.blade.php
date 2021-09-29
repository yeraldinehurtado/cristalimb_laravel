@extends ("layouts.app")
@section("body")
<div class="card">
    <div class="card-header">
        <strong>Inmuebles</strong>
        <a href="/Inmuebles/crear" class="btn btn-link">Crear</a>
    </div>
    <div class="card-body">
        @include('flash::message')
        <table id="Inmuebles" class="table table-border">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Descripción</th>
                    <th>Tipo</th>
                    <th>Servicio</th>
                    <th>Valor</th>
                    <th>Área</th>
                    <th>Zona</th>
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
    $('#Inmuebles').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/Inmuebles/listar',
        columns: [
            {data: 'codigo', name: 'codigo'},
            {data: 'descripcion', name: 'descripcion'},
            {data: 'tipo', name: 'tipo'},
            {data: 'servicio', name: 'servicio'},
            {data: 'valor', name: 'valor'},
            {data: 'area', name: 'area'},
            {data: 'zona', name: 'zona'},
            {data: 'estado', name: 'estado'},
            {data: 'editar', name: 'editar', orderable: false, searchable: false},
            {data: 'cambiar', name: 'cambiar', orderable: false, searchable: false}
        ]
    });
</script>
@endsection

