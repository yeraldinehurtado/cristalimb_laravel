<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style> 
          .page-break {
              page-break-after: always;
          }
    </style> 
    <style> 
          @page{
              margin: 0cm 0cm;
              font-family: Arial;
          }
          body {
              margin: 3cm 2cm 2cm;
          }
          header {
              position: fixed;
              top: 0cm;
              left: 0cm;
              right: 0cm;
              height: 2cm;
              background-color: white;
              text-align: center;
              line-height: 30px;
          }
          footer {
            position: fixed;
              bottom: 0cm;
              left: 0cm;
              right: 0cm;
              height: 2cm;
              background-color: blue;
              text-align: center;
              line-height: 35px;
          }
    </style> 
</head>
<body>
    <p>De: {{$input[txtFechaInicial]}} hasta {{$input[txtFechaFinal]}}</p>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombres</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Tipo de Servicio</th>              
                    </tr>
                </thead>
                <tbody>
                    @foreach($cita as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->Nombres}}</td>
                        <td>{{$value->telefono}}</td>
                        <td>{{$value->Email}}</td>
                        <td>{{$value->tipoServicio}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>