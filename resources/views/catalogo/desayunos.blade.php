@extends('welcome')
@section('contenido')

<div align="center">
<h1>DESAYUNOS SORPRESAS</h1>
</div>
<br>

<div class="container">

<div class="col">
        <form action="{{ route('searchP')}}" method="POST"> 
            @csrf
            <div class="row" id="divBuscar">  
                <form class="form-inline my-1">
                    <div class="md-form form-sm my-0">
                        <input id="txtBuscar" name="txtBuscar" class="form-control form-control-sm-2 mr-sm-3 mb-0" type="text" placeholder="Buscar"
                        aria-label="Buscar">
                    </div>
                    <button class="btn btn-dark" type="submit">Buscar</button>
                </form>
            </div> 
        </form> 
    </div><br>

    <div class ="row">
    @foreach($producto as $p)
        <div class="col-md-4">
            <div class="card" style="width: 15rem;">
                <img src='{{url("/img/desayunos/$p->foto")}}' class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> {{ $p->Tipo }} </h5>
                 
                    <p class="card-text"> Descripcion :  {{ $p->Descripcion }} </p>
                     <p class="card-text"> Cant. Stock :  {{ $p->cant_prod }} </p>
                     <p class="card-text"> Precio :  {{ $p->Precio }} </p>
                
                     <a href="{{ url('carrito/registroCarrito') }}" class="btn btn-dark"> Añadir a carrito </a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>

@endsection