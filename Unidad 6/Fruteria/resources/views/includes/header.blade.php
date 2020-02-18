<div class="row">
    <div class="col-md-4">
        <img src="{{ url('img/logotipo-select.png')}}" alt="Logotipo Frutería" style="width:100px;"/>
    </div>
    <div class="col-md-4 mt-1">
        <h1>Frutería DAW</h1>
    </div>
</div>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{action('FruteriaController@index')}}">Inicio</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="{{action('FruteriaController@createForm')}}">Insertar</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="{{action('FruteriaController@listarFrutas')}}">Listar</a>
      </li>
    </ul>
</nav>
