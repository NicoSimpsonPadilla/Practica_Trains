<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tickets</title>
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
            <h1>Tickets</h1>
        </div>
        <div class="container mb-2">
            <a class="btn btn-dark" href="{{ route('tickets.create') }}">Crear ticket</a>
        </div>
        <table class="table table-secondary table-hover text-center">
            <thead class="table table-dark">
                <tr>
                    <th>Date</th>
                    <th>Price</th>
                    <th>Trains name</th>
                    <th>Type</th>
                    <th colspan="3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tickets as $ticket)
                    <tr>
                        <td>{{ $ticket->date }}</td>
                        <td>{{ $ticket->price }}</td>
                        <td>{{ $ticket->train->name }}</td>
                        <td>{{ $ticket->ticket_type->type }}</td>
                        <td>
                            <form action="{{ route('tickets.show', 
                            ['ticket' => $ticket->id]) }}">
                                <input class="btn btn-dark" type="submit" value="View">
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('tickets.edit', 
                            ['ticket' => $ticket->id]) }}" method="get">
                                <input class="btn btn-dark" type="submit" value="Edit">
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('tickets.destroy', 
                            ['ticket' => $ticket->id]) }}" method="post">
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