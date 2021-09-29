@extends ("layouts.app")

@section("body")
<div class="row">
    <div class="col">
        <h3 class="text-center"><a href="/Propietarios/listar"> Listar</a></h3>
    </div>
</div>
<form action="/PropInmuebles/guardar2" method="post">
    @csrf
    <div class="row">
        <div class="col-4">
            <div class="card">
            <div class="card-head">
                    <h4 class="text-center">2. Info propietarios</h4>
                </div>
                <div class="row card-body">
                    <div class="form-group col-4">
                        <label for="">Identificación</label>
                        <input type="text" class="form-control" name="identificacion">
                    </div>
                    <div class="form-group col-4">
                        <label for="">Nombres</label>
                        <input type="text" class="form-control" name="nombres">
                    </div>
                    <div class="form-group col-4">
                        <label for="">Apellidos</label>
                        <input type="text" class="form-control" name="Apellidos">
                    </div>
                    <div class="form-group col-4">
                        <label for="">Télefono</label>
                        <input type="text" class="form-control" name="telefono">
                    </div>
                    <div class="form-group col-4">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group col-4">
                        <label for="">Dirección</label>
                        <input type="text" class="form-control" name="direccion">
                    </div>
                </div>
                <div class="col-12" style="margin-top: 3%;">
                    <button type="submit" class="btn btn-success btn-block">Guardar</button>
                </div>

            </div>
        </div>
        <div class="col-4">
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
                <div class="col-6">
                    <button onclick="agregar_inmueble()" type="button"
                        class="btn btn-success float-right">Agregar</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Descripción</th>
                        <th>Tipo</th>
                        <th>Servicio</th>
                        <th>Valor</th>
                        <th>Área</th>
                        <th>Zona</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody id="tblInmuebles">

                </tbody>
            </table>
        </div>
    </div>

    </div>
</form>
@endsection


@section("scripts")
<script>
function agregar_inmueble() {
    let inmueble_id = $("#inmuebles option:selected").val();
    let codigo = $("#codigo").val();
    let descripcion = $("#descripcion").val();
    let tipo = $("#tipo").text();
    let servicio = $("#servicio").val();
    let valor = $("#valor").val();
    let area = $("#area").val();
    let zona = $("#zona").val();


    $("#tblInmuebles").append(`
                    <tr id="tr-${inmueble_id}">
                        <td>
                            <input type="hidden" name="inmueble_id[]" value="${inmueble_id}" />    
                        </td>
                        <td>${codigo}</td>
                        <td>${descripcion}</td>
                        <td>${tipo}</td>
                        <td>${servicio}</td>
                        <td>${valor}</td>
                        <td>${area}</td>
                        <td>${zona}</td>
                        <td>
                            <button type="button" class="btn btn-danger" onclick="eliminar_inmueble(${inmueble_id},     
                        </td>
                    </tr>
                `);


}


function eliminar_inmueble(inmueble_id) {
    $("#tr-" + inmueble_id).remove();
}
</script>
@endsection

