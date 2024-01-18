<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Train</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <form action="{{ route('trains.store') }}" method="post">
        @csrf
        <label>Name</label>
        <input type="text" name="name"><br>
        <label>Passengers</label>
        <input type="text" name="passengers"><br>
        <label>Year</label>
        <input type="text" name="year"><br>
        <label>Type</label>
        <select name="type">
            @foreach ($train_types as $type)
                <option value="{{ $type->id }}">{{ $type->type }}
                </option>
            @endforeach
        </select><br>
        <input type="submit" value="Crear">
    </form>
</body>
</html>