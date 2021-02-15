@extends('welcome')
@section('contenido')
<h1>LISTADO DE CARRITO</h1>



<br>
<table class="table">
    <thead>
        <tr>
          
            <th scope="col">Items</th>
            <th scope="col">Categoria</th>
            <th scope="col">Catalogo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Cantidad de productos</th>
            <th scope="col">Foto</th>
            <th scope="col">Precio</th>
            <th scope="col" colspan=2> Descartar</th>
        </tr>
    </thead>
    <tbody>
    @foreach($carrito as $c)
            <tr>
           
            <td>{{ $c->id}} </td>
            <td>{{ $c->nombre}} </td>
            <td>{{ $c->id_cata}} </td>
            <td> {{ $c->Descripcion}} </td>
            <td> {{ $c->cant_prod}} </td>
            <td>{{ $c->foto}}</td>
            <td> {{ $c->Precio}} </td>
            
            <td> <a href="{{ route('eliminar_carrito',$c->id)}}" class="btn btn-dark">Eliminar</a></td>
            </tr>
        
    @endforeach

   
    </tbody>
    
</table>
<h1>_______________________________________________________________________________________________________________________________________</h1>
<br>

<td> <a href="{{ url('facturacion/factura')}}" class="btn btn-dark">Pagar</a></td>
@endsection