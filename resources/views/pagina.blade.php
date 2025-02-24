{{-- Este indica que esta página hereda la estructura de AdminLTE. --}}

@extends('adminlte::page')

{{-- 👉 Define el título de la pestaña en el navegador. --}}
@section('title', 'Dashboard')


{{-- 👉 Es la cabecera del contenido principal (encabezado de la página). --}}
@section('content_header')
    <h1>Nueva Pagina </h1>
<form>

    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
            <label for="min">Desde</label>
            <input type="date" value="<?php echo date ('y-m-d'); ?>" name=" desde " id="min">
        </div>
    </div>

        <div class="col-md-3">
            <div class="form-group">
            <label for="hasta">Hasta</label>
            <input type="date" value="<?php echo date ('y-m-d'); ?>" name=" hasta " id="hasta">
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
      <button type="submit" class="btn btn-danger">PDF O EXCEL XD?</button>
    </div>
    </div>
</div>

</form>

<div class="card my-2">
<div class="card">
<div class="card-header card-header-primary">
    ventas
</div>
</div>



<div class="card-body">

  <div class="table-responsive">

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand">Show</a>

          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
             Seleccione
            </button>
            <ul class="dropdown-menu">
              <li><button class="dropdown-item" type="button">1sasdsa</button></li>
              <li><button class="dropdown-item" type="button">2</button></li>
              <li><button class="dropdown-item" type="button">3</button></li>
            </ul>
          </div>

          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </nav>
      </div>


      <div class="scrollbar-container">


    <table class="table table-bordered table-hover table-striped" id="t_historial_v">
        {{-- <thead class="table-dark"> --}}
     <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Foto</th>
            <th scope="col">Clientes</th>
            <th scope="col">Fecha Venta</th>
            <th scope="col">Hora</th>
            <th scope="col">Total</th>
            <th scope="col">PDF</th>

          </tr>
        </thead>
        <tbody class="custom-border-top">
          <tr>
            <th scope="row">1</th>
            <td>Mardddddddddddddddddddddddddddddddddddddddddddddddddddk</td>
            <td>Ottdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddo</td>
            <td>@mdo</td>
            <td>Mardddddddddddddddddddddkdss</td>
            <td>Ottdddddddddddo</td>
            <td>@mdo</td>

          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            <td>@twitter</td>
            <td>@twitter</td>
            <td>@twitter</td>

          </tr>
        </tbody>
      </table>
    </div>

      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
          <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
        </ul>
      </nav>

  </div>

</div>
</div>







@stop


{{-- 👉 Aquí va el contenido principal de la página. --}}
@section('content')
    <p>Hola Bienvenido a Pagina xd.</p>
@stop

{{-- 👉  agregar archivos CSS personalizados. --}}
@section('css')


    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


{{-- 👉 Permite agregar JavaScript personalizado. --}}
@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
