<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <form class="container-fluid justify-content-start">
            <a class="btn btn-dark me-2" href="{{ route('trains.index') }}">Trains</a>
            <a class="btn btn-dark me-2" href="{{ route('train_types.index') }}">Train Types</a>
            <a class="btn btn-dark me-2" href="{{ route('tickets.index') }}">Tickets</a>
            <a class="btn btn-dark me-2" href="{{ route('ticket_types.index') }}">Ticket Types</a>
        </form>
    </nav>
    <div class="container">
        <div class="container center-block">
            <h1>Trains</h1>
        </div>
        <div class="container mb-2">
            <a class="btn btn-dark" href="{{ route('trains.create') }}">Crear tren</a>
        </div>
        <table class="table table-secondary table-hover text-center">
            <thead class="table table-dark">
                <tr>
                    <th>Name</th>
                    <th>Passengers</th>
                    <th>Year</th>
                    <th>Type</th>
                    <th colspan="3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                <tr>
                    <td>{{ $train->name }}</td>
                    <td>{{ $train->passengers }}</td>
                    <td>{{ $train->year }}</td>
                    <td>{{ $train->train_type->type }}</td>
                    <td>
                        <form action="{{ route('trains.show', 
                        ['train' => $train->id]) }}">
                            <input class="btn btn-dark" type="submit" value="View">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('trains.edit', 
                        ['train' => $train->id]) }}" method="get">
                            <input class="btn btn-dark" type="submit" value="Edit">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('trains.destroy', 
                        ['train' => $train->id]) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input class="btn btn-dark" type="submit" value="Delete">
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>