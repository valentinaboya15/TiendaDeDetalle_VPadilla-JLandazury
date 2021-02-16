@extends('welcome')
@section('contenido')

<div align="center">
<h1>LISTADO DE CATEGORIA</h1>
</div>
<br>

<div class="container">
    <div class ="row">
    @foreach($categoria as $a)
        <div class="col-md-4">
            <div class="card" style="width: 15rem;">
                <img src='{{url("/img/categoria/$a->Foto")}}' class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"> {{ $a->nombre }} </h5>
                  
                
                    
                    
                
                    <a href="#" class="btn btn-success"> Ver Detalles </a>
                </div>
            </div>
        </div>
    @endforeach

    </div>
</div>
@endsection