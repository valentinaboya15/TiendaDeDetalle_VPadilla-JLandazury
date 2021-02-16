@extends('mainadmin')
@section('contenido')

<div class="container">
<h1> Registrar Datos de Cliente </h1>
    <form action="{{ url('clientes/registrarCli') }}" method="POST">
        @csrf

      
<br>

        <label for="id_usu">usuario autorizado</label>
        <input type="text" id='id_usu' name='id_usu' class="form-control" required> <br> <br>
      
   
        <label for="nombre">Nombre</label>
        <input type="text" id='nombre' name='nombre' class="form-control" required> <br> <br>
   
        <label for="apellido">Apellido</label>
        <input type="text" id='apellido' name='apellido' class="form-control" required> <br> <br>

        <label for="cedula">Cedula</label>
        <input type="text" id='cedula' name='cedula' class="form-control" required> <br> <br>

        <label for="domicilio">Domicilio</label>
        <input type="text" id='domicilio' name='domicilio' class="form-control" required> <br> <br>

        <label for="celular">Celular</label>
        <input type="text" id='celular' name='celular' class="form-control" required> <br> <br>

        <label for="email">Correo Electronico</label>
        <input type="text" id='email' name='email' class="form-control" required> <br> <br>

        <label for="genero">Genero </label>
        <select class="form-select" aria-label="Default select example" name="genero">
            <option value="F" > Femenino </option>
            <option value="M" > Masculino </option>
        </select>

        <label for="foto">Sube la foto:</label>
<input type="file" name="foto" id="foto"><br><br>
      

      
            
<button type="submit" class="btn btn-primary" > Registrar </button> 

<button type="reset" class="btn btn-danger">Borrar</button>

<td> <a href="{{ url('clientes/visualizar/cliente')}}" class="btn btn-success">Cancelar</a></td>
   

    </form>
    
   
@endsection
       
       
       
       
       
       
   
 