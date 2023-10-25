@include('plantillas.navinicio')

    <title>Estadísticas de Arduino</title>
    <link href="{{ asset('css/estadisticas.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">


    <div class="row bg-black-translucent">
        <div class="container">
            <div class="text-center">
                <h1>Estadisticas en tiempo real</h1>
            </div>

            <table class="table table-bordered table-striped table-custom">
    <thead class="thead-dark">
        <tr>
            <th>Humedad</th>
            <th>Temperatura</th>
            <th>Humedad del Suelo</th>
            <th>Flujo de Agua</th>
        </tr>
    </thead>
    <tbody>
        @if ($ultimoSensor)
            <tr>
                <td>{{ $ultimoSensor->humedad }}</td>
                <td>{{ $ultimoSensor->temperatura }}</td>
                <td>{{ $ultimoSensor->humedad_suelo }}</td>
                <td>{{ $ultimoSensor->flujo_agua }}</td>
            </tr>
        @else
            <tr>
                <td colspan="6">No se encontraron registros.</td>
            </tr>
        @endif
    </tbody>
</table>



            @if ($datos && count($datos) > 1)
                <div class="row">
                    <div class="col-md-6">
                        <canvas id="humedadChart"></canvas>
                    </div>
                    <div class="col-md-6">
                        <canvas id="temperaturaChart"></canvas>
                    </div>
                    <div class="col-md-6">
                        <canvas id="humedadSueloChart"></canvas>
                    </div>
                    <div class="col-md-6">
                        <canvas id="flujoAguaChart"></canvas>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        var datos = {!! json_encode($datos) !!};
    </script>


@include('plantillas.fooster')
@include('plantillas.Animacion')


<script src="{{ asset('js/Arduino_sensores.js') }}"></script>

</body>
</html>
