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
        <a class="nav-link" href="{{ url('/dashboard')}}" tabindex="-1" role="button" aria-disabled="true">Inicio</a>
      </li>
      
      
     
    
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/catalogo/listado_producto')}}" tabindex="-1" role="button" aria-disabled="true">Productos</a>
      </li>
      
  
      

     

      <li class="nav-item">
        <a class="nav-link" href="{{ url('/clientes/visualizar/cliente')}}" tabindex="-1" role="button" aria-disabled="true">Clientes</a>
      </li>
    </ul>
   
      <nav class="navbar navbar-dark bg-dark">
      <form class="form-inline">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button  class="btn btn-outline-light" type="submit">Buscar</button>
    </form>
</nav>
    
    
  
  </div>

</nav>