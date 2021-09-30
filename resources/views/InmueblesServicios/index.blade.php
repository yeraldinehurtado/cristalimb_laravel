@extends ("layouts.app")

@section("body")
<div class="row">
    <div class="col">
        <h3 class="text-center">Crear Inmueble <a href="/Inmuebles/listar"> Listar</a></h3>
    </div>
</div>
<form action="/Inmuebles/guardar2" method="post">
    @csrf
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-head">
                    <h4 class="text-center">1. Info inmueble</h4>
                </div>
                <div class="row card-body">
                    <div class="form-group col-6">
                        <label for="">Código</label>
                        <input type="text" class="form-control" name="codigo">
                    </div>
                    <div class="form-group col-6">
                        <label for="">Descripción</label>
                        <input type="text" class="form-control" name="descripcion">
                    </div>
                    <div class="form-group col-6">
                        <label for="">Tipo</label>
                        <input type="text" class="form-control" name="tipo">
                    </div>
                    <div class="form-group col-6">
                        <label for="">Servicio</label>
                        <input type="text" class="form-control" name="servicio">
                    </div>
                    <div class="form-group col-6">
                        <label for="">Valor</label>
                        <input type="text" class="form-control" name="valor">
                    </div>
                    <div class="form-group col-6">
                        <label for="">Área</label>
                        <input type="text" class="form-control" name="area">
                    </div>
                    <div class="form-group col-6">
                        <label for="">Zona</label>
                        <input type="text" class="form-control" name="zona">
                    </div>
                </div>
                <div class="col-12" style="margin-top: 3%;">
                    <button type="submit" class="btn btn-success btn-block">Guardar</button>
                </div>

            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-head">
                    <h4 class="text-center">2. Info Servicios</h4>
                </div>
                <div class="col-6">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <select name="servicios" id="servicios" class="form-control">
                                <option value="">Seleccione</option>
                                @foreach($servicios as $value)
                                <option value="{{ $value->id }}">
                                {{ $value->nombreServicio}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                <div class="col-12">
                    <button onclick="agregar_servicio()" type="button"
                        class="btn btn-success float-right">Agregar</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre servicio</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody id="tblServicios">

                </tbody>
            </table>
        </div>
    </div>

    </div>
</form>
@endsection


@section("scripts")
<script>

function agregar_servicio() {
    let servicio_id = $("#servicios option:selected").val();
    let servicio_text = $("#servicios option:selected").text();

    $("#tblServicios").append(`
        <tr id="tr-${servicio_id}">
            <td>
                <input type="hidden" name="servicio_id[]" value="${servicio_id}" />
                ${servicio_text}    
            </td>
            <td>
                <button type="button" class="btn btn-danger" onclick="eliminar_servicio(${servicio_id},  
            </td>
        </tr>
    `);
}


function eliminar_servicio(id) {
    $("#tr-" + id).remove();
}
</script>
@endsection