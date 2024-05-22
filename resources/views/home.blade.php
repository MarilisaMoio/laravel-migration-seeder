<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header class="p-3 bg-danger">
        <h1 class="text-white">WORLD TRAIN STATION</h1>
    </header>

    <main>
        <div class="trains-display position-absolute top-50 start-50 translate-middle">
            <table class="table table-dark text-danger">
                <thead>
                    <tr>
                        <th scope="col">Operatore</th>
                        <th scope="col">Da</th>
                        <th scope="col">A</th>
                        <th scope="col">Partenza</th>
                        <th scope="col">Arrivo</th>
                        <th scope="col">Treno</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train->operator }}</td>
                        <td>{{ $train->departure_station  }}</td>
                        <td>{{ $train->arrival_station  }}</td>
                        <td>{{ $train->departure_time  }}</td>
                        <td>{{ $train->arrival_time  }}</td>
                        <td>{{ $train->train_code }}</td>
                        @if ($train->cancelled === 1)
                        <td>cancellato</td>
                        @elseif ($train->in_time === 0)
                        <td>in ritardo</td>
                        @else
                        <td></td>
                        @endif

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

</body>

</html>
