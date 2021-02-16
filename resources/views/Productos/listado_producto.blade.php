@extends('mainadmin')
@section('contenido')
<div align="center">
<h1>Listado De Producto</h1>
</div>
<br>

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
 
<td> <a href="{{ url('Productos/registro') }}" class="btn btn-dark">Registrar  producto</a></td>
</div>
<br>
<div align="right">
    <a href="{{route('exportar_Excel')}}" class="btn btn-primary">Exportar Reporte</a>
   
</div>
<br>
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
            <th scope="col" colspan=2></th>
            <th scope="col" colspan=2></th>
        </tr>
    </thead>
    <tbody>
    @foreach($producto as $c)
            <tr>
           
            <td>{{ $c->id}} </td>
            <td>{{ $c->nombre}} </td>
            <td>{{ $c->id_cata}} </td>
            <td> {{ $c->Descripcion}} </td>
            <td> {{ $c->cant_prod}}</td>
            <td>{{ $c->foto}}</td>
            <td> {{ $c->Precio}} </td>
            
            <td> <a href="{{route('form_actualizarPro',$c->id)}}" class="btn btn-dark">Actualizar</a></td>
            <td> <a href="{{ route('eliminar_producto',$c->id)}}" class="btn btn-danger">Eliminar</a></td>
            </tr>
        
    @endforeach
    </tbody>
    
</table>


@endsection