@extends('welcome')
@section('contenido')

<div class="container">
<h2>FACTURACION</h2> <br> <br>
    <form action ="{{ url('facturacion/pagar') }}" method="POST" >
        @csrf
       
        <label for="id_car">Nº Carrito </label>
        <input type="text" id='id_car' name='id_car' class="form-control" required> <br> <br>
        <label for="id_pro">Producto </label>
        <select name="id_pro" class="form-select form-select-sm" aria-label=".form-select-sm example">
       <option selected>Seleccione opcion</option>
       <option value="1">Ancheta Sorpresa de Cervezas </option>
       <option value="2">Ancheta Sorpresa Dulces</option>
       <option value="3">Copa Sorpresa Dulces </option>
       <option value="4">Ancheta Sorpres amor</option>
       <option value="5">Ancheta Sorpresa-madera Amor </option>
       <option value="6">Ancheta sorpresa-pelcuhe </option>
       <option value="7">Desayuno sorpresa  Mediano:pechuga,1 lacteo, milo,cerveza, ensalada de fruts, dulces, frutas   </option>
       <option value="8">Desayuno sorpresa grande:pechuga,1 lacteo, milo,cerveza, ensalada de fruts, dulces, frutas </option>
       <option value="9">Desayuno sorpresa grande:pechuga,1 lacteo, milo,cerveza, ensalada de fruts, dulces, frutas  </option>
       <option value="10">Desayuno sorpresa Carton: Huevo/sandwich, jugo nectar, fruta, ensalada, dulces,lacteo </option>
       <option value="11">Desayuno sorpresa Carton: Huevo/sandwich, jugo nectar, fruta, ensalada, dulces,lacteo  </option>
       <option value="12">Desayuno sorpresa Carton: Huevo/sandwich, jugo nectar, fruta, ensalada, dulces,lacteo </option>
       <option value="13">Arreglo floral con chocolates internos  </option>
       <option value="14">Arreglo floral grande</option>
       <option value="15">Arreglo floral grande con vino  </option>
       <option value="16">Arreglo floral grande con peluche</option>
       <option value="17">Arreglo floral mediano </option>
       <option value="18">Ramo floral con peluche y dulces</option>
       <option value="19">Arreglo frutal grande con peluche </option>
       <option value="20">Arreglo frutal madera-mediano y globos en helio</option>
       <option value="21">Arreglo frutal caja de carton</option>
       <option value="22">Arreglo frutal con lacteos</option>
       <option value="23">Arreglo frutal caja de carton</option>
       </select> <br> <br>

       <label for="id_cli">Cliente </label>
       <select name="id_cli" class="form-select form-select-sm" aria-label=".form-select-sm example">
       <option selected>Seleccione opcion</option>
       <option value="1">Miguel </option>
       <option value="2">Salomon</option>
       <option value="3">Veronica </option>
       <option value="4">Maria</option>
       <option value="5">Emily </option>
       
   
       </select> <br> <br>
       <label for="formaPago">Forma Pago </label>
       <select name="formaPago" class="form-select form-select-sm" aria-label=".form-select-sm example">
       <option selected>Seleccione opcion</option>
       <option value="1">tarjeta </option>
       <option value="2">Efectivo</option>
       
       </select> <br> <br>

       <label for="Fecha">Fecha</label>
        <input type="date" id='Fecha' name='Fecha' class="form-control" required> <br> <br>

        <label for="Total">Total</label>
        <input type="Total" id='Total' name='Total' class="form-control" required> <br> <br>

       

        <button type="submit" class="btn btn-success">Pagar</button>
    </form>

</div>
@endsection