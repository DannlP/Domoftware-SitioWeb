@include('plantillas.navinicio')

    <title>Registros</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="{{ asset('css/arduino.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
</head>
<body>
    
<div class="black-container">
    <div class="container mt-5">
        <div class="text-center mb-3">
            <h1>Sensores Historial</h1>
        </div>

<div class="d-flex justify-content-between mb-3">
    <button class="btn btn-success" onclick="alternarGrafica()">
        <i class="fas fa-eye"></i> Gráfica
    </button>
    <div>
        <button class="btn btn-danger" onclick="borrarSeleccionados()">
            <i class="fas fa-trash"></i> 
        </button>
        <button class="btn btn-primary" onclick="seleccionarTodo()">
            <i class="fas fa-check-square"></i> Todo
        </button>
    </div>
</div>



        <div id="graficaContainer" style="display: none;">
            <canvas id="myChart"></canvas>
        </div>

        <div class="d-flex justify-content-between mb-3">
    <div>
        <span id="checkmark" style="display: none;">&#10004;</span>
    </div>

</div>

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Humedad</th>
            <th>Temperatura</th>
            <th>Humedad Suelo</th>
            <th>Flujo de Agua</th>
            <th>Fecha y Hora</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($datos as $dato)
            <tr>
                <td>{{ $dato->humedad }}</td>
                <td>{{ $dato->temperatura }}</td>
                <td>{{ $dato->humedad_suelo }}</td>
                <td>{{ $dato->flujo_agua }}</td>
                <td>{{ $dato->fecha_hora }}</td>
                <td>
                    <input type="checkbox" class="registro-checkbox" data-id="{{ $dato->id }}">
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="pagination">
    <ul class="pagination">
        @for ($i = 1; $i <= $totalPaginas; $i++)
            <li class="page-item @if ($i == $paginaActual) active @endif">
                <a class="page-link" href="{{ route('arduino', ['pagina' => $i]) }}">{{ $i }}</a>
            </li>
        @endfor
    </ul>
</div>

</div>
</div>

<script>
        var labels = {!! $datos->pluck('fecha_hora') !!};
        var humedad = {!! $datos->pluck('humedad') !!};
        var temperatura = {!! $datos->pluck('temperatura') !!};
        var humedad_suelo = {!! $datos->pluck('humedad_suelo') !!};
        var flujo_agua = {!! $datos->pluck('flujo_agua') !!};

</script> 

<script src="{{ asset('js/RegistrosHistorial.js') }}"></script>


 <br>
 <br>
@include('plantillas.fooster')
@include('plantillas.Animacion')


