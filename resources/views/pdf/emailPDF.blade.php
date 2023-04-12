<!DOCTYPE html>
<html>
<head>
    <title>Generate PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>{{ $title }} de {{ $user->name }}</h1>
    <p>{{ $date }}</p>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Comida</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cart as $item)
            <tr>
                <th scope="row">{{ $item->name }}</th>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->price }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot class="table-dark">
            <tr>
                <th scope="row">Total</th>
                <td></td>
                <td>{{round($total*1.21 ,2, PHP_ROUND_HALF_EVEN)}}€</td>
            </tr>
        </tfoot>
    </table>

</body>
</html>