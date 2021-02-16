@extends('welcome')
@section('contenido')
<div align="center">
<h1>LISTADO DE CARRITO</h1>
</div>
<br>


<br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Codigo Factura</th>
            <th scope="col">Items</th>
            <th scope="col">Producto</th>
            <th scope="col">Cliente</th>
            <th scope="col">Forma de pago</th>
            <th scope="col">Fecha</th>
            <th scope="col">Total</th>
         
           
        </tr>
    </thead>
    <tbody>
    @foreach($carrito as $c)
            <tr>
            <td>{{ $c->codigoF}} </td>
            <td>{{ $c->id_car}} </td>
            <td>{{ $c->Descripcion}} </td>
            <td>{{ $c->nombre}} </td>
            <td> {{ $c->Descripcion}} </td>
            <td> {{ $c->formaPago}} </td>
            <td>{{ $c->Fecha}}</td>
            <td> {{ $c->Total}} </td>
            
     
            </tr>
        
    @endforeach

   
    </tbody>
    
</table>
>


@endsection