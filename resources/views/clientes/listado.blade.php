@extends('welcome')
@section('contenido')
<div align="center">
<h1> Listado de Clientes </h1>

</div>
<br>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Login </th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido </th>
            <th scope="col">Cedula </th>
            <th scope="col">Domicilio </th>
            <th scope="col">Celular </th>
            <th scope="col">Email </th>
            <th scope="col">Genero </th>
            <th scope="col">Foto </th>
            <th scope="col" colspan=2> Opciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($Usuario as $c)
            <tr>
                <td> {{ $c->login }} </td>
                <td> {{ $c->nombre }} </td>
                <td> {{ $c->apellido }} </td>
                <td> {{ $c->cedula }} </td>
                <td> {{ $c->domicilio }}</td>
                <td> {{ $c->celular }} </td>
                <td> {{ $c->email }} </td>
                <td> {{ $c->foto }} </td>

                @if($c->genero == 'F')
                    <td> Femenino </td>
                @else
                    <td> Masculino </td>
                @endif

                <td> <a href="{{route('form_actualizaCli',$c->id)}}" class="btn btn-success">Editar</a></td>
			    <td> <a href="{{route('elimina_Cliente', $c->id)}}" class="btn btn-danger">Eliminar</a> </td>
            </tr>
    @endforeach
    </tbody>
</table


@stop
