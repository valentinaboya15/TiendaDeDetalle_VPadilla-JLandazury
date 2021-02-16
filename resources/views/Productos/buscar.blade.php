@extends('mainadmin')
@section('contenido')
<div class="container">
    <div class="row" id="divBuscar">
        <div class="col-sm-8" id="prod">
            <h3>RESULTADO</h3>
        </div>
        <div class="col">
            <form action="{{ route('searchP')}}" method="POST"> 
                @csrf
                <div class="row" id="divBuscar">  
                    <form class="form-inline my-1">
                        <div class="md-form form-sm my-0">
                            <input id="txtBuscar" name="txtBuscar" class="form-control form-control-sm-2 mr-sm-3 mb-0" type="text" placeholder="Buscar Producto"
                            aria-label="Buscar">
                        </div>
                        <button class="btn btn-dark" type="submit">Buscar</button>
                    </form>
                </div> 
            </form> 
        </div>
    </div>   
    <div class="row">
        @if(count($producto) == 0)
            <div class="container">
                <h3>
                    No se encontro resultados en su búsqueda..
                </h3>
            </div>
        @endif
        @foreach($producto as $prod)
        <div class="col-md-3">
                    <br>
                    <div class="card" style="width: 15rem; height: auto;">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src='{{url("/img/busqprod/$prod->foto")}}' class="img-fluid" id="img"/>
                            <a href="#!">
                                
                            </a>
                        </div> 
                        <div class="card-body">
                           <div>
                            <h5 class="card-title"> {{ $prod->Tipo }} </h5>
                             <p class="card-text"> Descripcion :  {{ $prod->Descripcion }} </p>
                        </div>
                            <p class="card-text"> Cant. Stock :  {{ $prod->cant_prod }} </p>
                            <p class="card-text"> Precio :  {{ $prod->Precio }} </p>
                            
                        
                             <a href="{{ url('carrito/registroCarrito') }}" class="btn btn-dark"> Añadir a carrito </a>
                        </div>
                    </div>
                    
                </div>
        @endforeach
    </div>
</div>
<br>
@endsection