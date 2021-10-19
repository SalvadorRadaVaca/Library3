<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css">

</head>
<body>
    <h1>Books list</h1>

    <table class="table table-striped table-hover">
        <thead class="thead">
            <tr>
                <th>Categoty</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->category->name }}</td>
                    <td>{{ $book->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>