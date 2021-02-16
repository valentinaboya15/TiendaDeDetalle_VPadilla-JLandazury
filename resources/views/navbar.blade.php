<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/')}}">
      <img src="{{url('/assets/imagenes/logo1.jpeg')}}" alt="" width="150" height="60" class="d-inline-block align-top">
    </a>
  <h1 class="navbar-brand main-title fw-bold fst-italic" href="/home">Creaciones De Emily</h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/')}}" tabindex="-1" role="button" aria-disabled="true">Inicio</a>
      </li>
      
    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Catalogo </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('catalogo/desayunos')}}">Desayunos</a>
          <a class="dropdown-item" href="{{url('/catalogo/flores')}}">Flores</a>
          <a class="dropdown-item" href="{{url('/catalogo/frutales')}}">Frutales</a>
          <a class="dropdown-item" href="{{url('/catalogo/anchetas')}}">Anchetas</a>
        </div>
      </li>
      
      
  
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/PQR')}}" tabindex="-1" role="button" aria-disabled="true">PQR</a>
      </li>
    </ul>
   
     
      <nav class="navbar navbar-dark bg-dark">
     
    

        <a class="nav-link" href="{{ url('/carrito/carro')}}" tabindex="-1" role="button" aria-disabled="true">  <button class="btn btn-outline-light" type="submit" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg>Carro</i></button></a>
      
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

<li class="nav-item">

        <a class="nav-link" href="{{ url('/login')}}" tabindex="-1" role="button" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>login</a>
      </li>
      

            
</nav>
    

  




</nav>
</br>


