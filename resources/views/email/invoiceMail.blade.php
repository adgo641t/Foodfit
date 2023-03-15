<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <title>Gracias por hacer el pedido con Food&Fit</title>
</head>
<body>
    <div class="container">
        <h1>{{ $mailData['title'] }}</h1>
        
        <table class="table">
            @foreach (\Cart::getContent() as $item)
            <thead>
                <tr>
                    <th>Plato</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->price}}</td>
            </tr>
            @endforeach
        </table>
       
        <p>Iva 21%</p>
        <p>Total: ${{round(Cart::getTotal()*1.21 ,2, PHP_ROUND_HALF_EVEN)}}</p>
        </div>
    </body>
</html>