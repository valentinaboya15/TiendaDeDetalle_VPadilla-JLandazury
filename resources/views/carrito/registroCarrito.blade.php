@extends('welcome')
@section('contenido')

<div class="container">
<h1> Registro de compras </h1>
    <form action="{{ url('carrito/registrar') }}" method="POST">
        @csrf

      
<br>

        <label for="id_cli">items Cliente</label>
        <input type="text" id='id_cli' name='id_cli' class="form-control" required> <br> <br>
      
   
        <label for="id_pro">items Producto</label>
        <input type="text" id='id_pro' name='id_pro' class="form-control" required> <br> <br>
   
        <label for="id_det">items detalle</label>
        <input type="text" id='id_det' name='id_det' class="form-control" required> <br> <br>

        <label for="Descripcion">Descripcion</label>
        <input type="text" id='Descripcion' name='Descripcion' class="form-control" required> <br> <br>

        <label for="cant_prod">Cantidad de productos</label>
        <input type="text" id='cant_prod' name='cant_prod' class="form-control" required> <br> <br>

        <label for="foto">Foto</label>
        <input type="text" id='foto' name='foto' class="form-control" required> <br> <br>

      

      
            
        <button type="submit" class="btn btn-success">Registrar </button><br><br>

    </form>
    
    <td> <a href="" class="btn btn-success">Cancelar</a></td>
@endsection