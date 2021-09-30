@extends ("layouts.app")
@section("body")
<div class="card">
    <div class="card-header">
        <strong>Informe de cita</strong>
    </div>
    <div class="card-body">
        @include('flash::message')
        <form action="/Citas/download" method="POST">
        @csrf
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="">Fecha inicial</label>
                    <input type="date" class="form-control" name="txtFechaInicial">
                </div>
            </div> 
            <div class="col-4">
                <div class="form-group">
                    <label for="">Fecha final</label>
                    <input type="date" class="form-control" name="txtFechaFinal">
                </div>

                <button type="submit" class="btn btn-success float-right">Generar PDF</button>
            </div>            
            
        </form>
    </div>
</div>
@endsection