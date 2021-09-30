@extends ("layouts.app")
@section("body")
<div class="card">
    <div class="card-header">
        <strong>Reportes</strong>
    </div>
    <div class="card-body">
        <form>
        <div class="col-8">
            <div class="form-group">
                <div><img src="https://cdn.kastatic.org/ka-perseus-graphie/6fc87b09f1fd082b8939b6425bef6a1d5397e532.svg"></img></div>
            </div>
        </div>
        <div class="col-4">
                <div class="form-group">
                    <div>
                        <a href="/Reportes/listar1" class="btn btn-link">Historial propietarios</a>
                    </div>
                    <div>
                        <a href="/Reportes/listar2" class="btn btn-link">Historial Inmuebles</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

                
