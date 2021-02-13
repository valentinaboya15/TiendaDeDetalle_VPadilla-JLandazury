@extends('mainadmin')
@section('contenido')

<div class="container">
<h1> Registro de Productos </h1>
    <form action="{{ url('Productos/registrar') }}" method="POST">
        @csrf

      
<br>

       <label for="id_cate">Categoria </label>
       <select class="form-control" required name="id_cate" class="form-select form-select-sm" aria-label=".form-select-sm example">
       <option selected>Seleccione opcion</option>
       <option value="1">anchetas </option>
       <option value="2">Desayunos</option>
       <option value="3">Flores </option>
       <option value="4">Frutales</option>
       </select> <br> <br>
      
   
        <label for="id_cata">Catalogo</label>
        <input type="text" id='id_cata' name='id_cata' class="form-control" required> <br> <br>

        <label for="Descripcion">Descripcion </label>
        <select class="form-control" required name="Descripcion" class="form-select form-select-sm" aria-label=".form-select-sm example">
       <option selected>Seleccione opcion</option>
       <option value="Ancheta Sorpresa de Cervezas">Ancheta Sorpresa de Cervezas </option>
       <option value="Ancheta Sorpresa Dulces">Ancheta Sorpresa Dulces</option>
       <option value="Copa Sorpresa Dulces">Copa Sorpresa Dulces </option>
       <option value="Ancheta Sorpres amor">Ancheta Sorpres amor</option>
       <option value="Ancheta Sorpresa-madera Amor ">Ancheta Sorpresa-madera Amor </option>
       <option value="Ancheta sorpresa-pelcuhe">Ancheta sorpresa-pelcuhe </option>
       <option value="Desayuno sorpresa  Mediano:pechuga,1 lacteo, milo,cerveza, ensalada de fruts, dulces, frutas">Desayuno sorpresa  Mediano:pechuga,1 lacteo, milo,cerveza, ensalada de fruts, dulces, frutas   </option>
       <option value="Desayuno sorpresa grande:pechuga,1 lacteo, milo,cerveza, ensalada de fruts, dulces, frutas">Desayuno sorpresa grande:pechuga,1 lacteo, milo,cerveza, ensalada de fruts, dulces, frutas </option>
       <option value="Desayuno sorpresa grande:pechuga,1 lacteo, milo,cerveza, ensalada de fruts, dulces, frutas">Desayuno sorpresa grande:pechuga,1 lacteo, milo,cerveza, ensalada de fruts, dulces, frutas  </option>
       <option value="Desayuno sorpresa Carton: Huevo/sandwich, jugo nectar, fruta, ensalada, dulces,lacteo">Desayuno sorpresa Carton: Huevo/sandwich, jugo nectar, fruta, ensalada, dulces,lacteo </option>
       <option value="Desayuno sorpresa Carton: Huevo/sandwich, jugo nectar, fruta, ensalada, dulces,lacteo">Desayuno sorpresa Carton: Huevo/sandwich, jugo nectar, fruta, ensalada, dulces,lacteo  </option>
       <option value="Desayuno sorpresa Carton: Huevo/sandwich, jugo nectar, fruta, ensalada, dulces,lacteo">Desayuno sorpresa Carton: Huevo/sandwich, jugo nectar, fruta, ensalada, dulces,lacteo </option>
       <option value="Arreglo floral con chocolates internos">Arreglo floral con chocolates internos  </option>
       <option value="Arreglo floral grande">Arreglo floral grande</option>
       <option value="Arreglo floral grande con vino">Arreglo floral grande con vino  </option>
       <option value="Arreglo floral grande con peluche">Arreglo floral grande con peluche</option>
       <option value="Arreglo floral mediano">Arreglo floral mediano </option>
       <option value="Ramo floral con peluche y dulces">Ramo floral con peluche y dulces</option>
       <option value="Arreglo frutal grande con peluche">Arreglo frutal grande con peluche </option>
       <option value="Arreglo frutal madera-mediano y globos en helio">Arreglo frutal madera-mediano y globos en helio</option>
       <option value="Arreglo frutal caja de carton">Arreglo frutal caja de carton</option>
       <option value="Arreglo frutal con lacteos">Arreglo frutal con lacteos</option>
       <option value="Arreglo frutal caja de carton">Arreglo frutal caja de carton</option>
       </select> <br> <br>

        <label for="cant_prod">Cantidad de productos</label>
        <input type="text" id='cant_prod' name='cant_prod' class="form-control" required> <br> <br>


      

       
       <label for="id_det">Precio </label>
       <select class="form-control" required name="id_det" class="form-select form-select-sm" aria-label=".form-select-sm example" >
       <option selected>Seleccione opcion</option>
       <option value="1">75000 </option>
       <option value="2">35000</option>
       <option value="3">55000 </option>
       <option value="7">85000</option>
       <option value="8">130000 </option>
       <option value="9">95000</option>
       <option value="10">120000 </option>
       <option value="11">160000</option>
       <option value="14">65000 </option>
       <option value="17">45000</option>
       <option value="18">80000 </option>
       </select> <br> <br>

      
       <label for="foto">Sube la foto:</label>
<input type="file" name="foto" id="foto"><br><br>
            
        <button type="submit" class="btn btn-success">Registrar </button><br><br>

    </form>
    
    <td> <a href="" class="btn btn-success">Cancelar</a></td>
@endsection