<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket Types</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="container center-block">
            <h1>Ticket Types</h1>
        </div>
        <div class="container">
            <table class="table table-secondary table-hover text-center">
                <thead class="table table-dark">
                    <tr>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ticket_types as $type)
                        <tr>
                            <td>{{ $type->type }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>