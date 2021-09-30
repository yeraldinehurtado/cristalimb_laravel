@extends ("layouts.app")
@section("body")
<div class="card">
    <div class="card-header">
        <strong>Crear rol</strong>
    </div>
    <div class="card-body">
        <form>
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="nombrerol">Nombre del rol</label>
                    <input type="text" class="form-control @error('nombrerol') id-invalid @enderror" name="nombrerol">
                    @error('nombrerol')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-8">
                <div class="form-group">
                <table id="Roles" class="table table-border">
                    <tr>
                        <th>Módulo</th>
                        <th>Permisos</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>Clientes</td>
                        <td>Crear<br>Editar<br>VerDetalle</td>
                        <td><i class="fas fa-edit"></i><i class="fas fa-trash-alt"></i></td>
                    </tr>
                    <tr>
                        <td>Reportes</td>
                        <td>VerReportes</td>
                        <td><i class="fas fa-edit"></i><i class="fas fa-trash-alt"></i></td>
                    </tr>
                </table>
                </div>
            </div>
        </div>
            <button type="submit" class="btn btn-success float-right">Guardar</button>
        </form>
    </div>
</div>
@endsection