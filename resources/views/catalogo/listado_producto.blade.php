@extends('mainadmin')
@section('contenido')
<h1>Listado De Producto</h1>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
 
<td> <a href="#" class="btn btn-success">Registrar  producto</a></td>
</div>

<br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Categorias</th>
            <th scope="col">Catalogo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Cantidad de productos</th>
            <th scope="col">Foto</th>
            <th scope="col">Precio</th>
            <th scope="col" colspan=2> Opciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($producto as $c)
            <tr>
           
            <td>{{ $c->id_pro}} </td>
            <td>{{ $c->nombre}} </td>
            <td>{{ $c->id_cata}} </td>
            <td> {{ $c->Descripcion}} </td>
            <td> {{ $c->cant_prod}}</td>
            <td>{{ $c->foto}}</td>
            <td> {{ $c->Precio}} </td>
            
            <td> <a href="#" class="btn btn-success">Actualizar</a></td>
            </tr>
        
    @endforeach
    </tbody>
    
</table>


@endsection