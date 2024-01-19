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
    <div class="container">
        <form class="mt-3" action="{{ route('trains.store') }}" method="post">
            @csrf
            <label class="mb-3" >Name</label>
            <input type="text" name="name"><br>
            <label class="mb-3" >Passengers</label>
            <input type="text" name="passengers"><br>
            <label class="mb-3" >Year</label>
            <input type="text" name="year"><br>
            <label class="mb-3" >Type</label>
            <select name="type">
                @foreach ($train_types as $type)
                    <option value="{{ $type->id }}">{{ $type->type }}
                    </option>
                @endforeach
            </select><br>
            <input class="btn btn-dark" type="submit" value="Crear">
        </form>
    </div>
</body>
</html>