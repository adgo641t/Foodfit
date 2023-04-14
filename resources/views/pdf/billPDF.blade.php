<!DOCTYPE html>
<html>
<head>
    <title>Generate PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>{{ $title }} de {{ $user->name }}</h1>

    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">Fecha</th>
                <th scope="col">Comida</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Estado del pedido</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bill as $billItem)
            <tr>
                <th scope="row">{{$billItem->created_at->format('d/m/y')}}</th>
                <td>{{$billItem->name}}</td>
                <td>{{$billItem->quantity}}</td>
                <td>{{($billItem->totalprice)}}€</td>
                <td>{{$billItem->status}}</td>
            </tr>
            @endforeach
        </tbody>
        <!--<tfoot class="table-dark">
            <tr>
                <th scope="row">Total</th>
                <td></td>
                <td></td>
                <td>30.96€</td>
            </tr>
        </tfoot>-->
    </table>

</body>
</html>
