@extends('welcome')
@section('contenido')
<h1>DESAYUNOS SORPRESAS</h1>

<div class="container">
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