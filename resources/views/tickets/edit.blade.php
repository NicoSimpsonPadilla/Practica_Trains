<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <form action="{{ route('tickets.update', ['ticket' => $ticket->id]) }}" method="post">
        @csrf
        {{ method_field('PUT') }}
        <label>Date</label>
        <input type="text" name="date" value="{{ $ticket->date }}"><br>
        <label>Price</label>
        <input type="text" name="price" value="{{ $ticket->price }}"><br>
        <label>Trains Name</label>
        <select name="train">
            <option selected hidden value="{{ $ticket->train_id }}"></option>
        </select><br>
        <label>Type</label>
        <select name="type">
            <option selected hidden value="{{ $ticket->ticket_type_id }}">{{ $ticket->ticket_type->type }}</option>
            @foreach ($ticket_types as $type)
                <option value="{{ $type->id }}">{{ $type->type }}
                </option>
            @endforeach
        </select><br>
        <input type="submit" value="Editar">
    </form>
</body>
</html>