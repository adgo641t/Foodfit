<!DOCTYPE html>
<html>
<head>
    <title>Gracias por hacer el pedido con Food&Fit</title>
</head>
<body>
    <h1>{{ $mailData['title'] }}</h1>
    
    <table>
        @foreach (\Cart::getContent() as $item)
        <tr>
            <th>Plato</th>
            <th>Cantidad</th>
            <th>Precio</th>
        </tr>
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->quantity }}</td>
            <td>{{ $item->price}}</td>
        </tr>
    </table>
    @endforeach
    <p>Iva 21%</p>
    <p>Total: ${{round(Cart::getTotal()*1.21 ,2, PHP_ROUND_HALF_EVEN)}}</p>
</body>
</html>