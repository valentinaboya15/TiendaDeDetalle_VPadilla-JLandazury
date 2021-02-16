@extends('mainAdmin')
@section('contenido')

<div align="center">
<h1>LISTADO DE CLIENTE</h1>
</div>
<br>

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
 
<td> <a href="{{ url('clientes/registroCli') }}" class="btn btn-dark">Registrar  producto</a></td>
</div>
<br>
<br>

<div class="container">
    <div class ="row">
    @foreach($cliente as $c)
        <div class="col-md-4">
            <div class="card" style="width: 15rem;">
                <img src='{{url("/img/$c->foto")}}' class="card-img-top" alt="...">
                <div class="card-body">
                
                  <h5 class="card-title"> {{ $c->nombre }} </h5>
                  <h5 class="card-title"> {{ $c->apellido }} </h5>
                 
                    <p class="card-text">Cedula :  {{ $c->cedula }} </p>
                    <p class="card-text"> Genero :  {{ $c->genero }} </p>
                    <p class="card-text"> Domicilio :  {{ $c->domicilio }} </p>
                    <p class="card-text"> Celular:  {{ $c->celular }} </p>
                    <p class="card-text"> Email:  {{ $c->email }} </p>
                    
                    
                
                    <a href="{{route('formulario_actualizar',$c->id_cli)}}" class="btn btn-success"> Actualizar </a>
                    <td> <a href="{{ route('eliminar_cliente',$c->id_cli)}}" class="btn btn-danger">Eliminar</a></td>
                </div>
            </div>
        </div>
    @endforeach

    @endsection