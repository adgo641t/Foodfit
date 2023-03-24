@extends('layouts.menu')
@section('content')
<h1 class="text-center styleTable">Lista de Facturas</h1>
<table class="table styleTable">
    <thead>
      <tr>
        <th scope="col">Nombre del Producto</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Precio</th>
        <th scope="col">Precio Final</th>
        <th scope="col">Fecha de compra</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($bill as $billItem)
      <tr>
        <td>{{$billItem->name}}</td>
        <td>{{$billItem->quantity}}</td>
        <td>{{$billItem->price}}</td>
        <td>{{$billItem->totalprice}}</td>
        <td>{{$billItem->created_at->format('d/m/y')}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection