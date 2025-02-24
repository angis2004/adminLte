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

</div>
</div>




<table class="table table-bordered  table-striped">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>


@stop


{{-- 👉 Aquí va el contenido principal de la página. --}}
@section('content')
    <p>Hola Bienvenido a Pagina xd.</p>
@stop

{{-- 👉  agregar archivos CSS personalizados. --}}
@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop


{{-- 👉 Permite agregar JavaScript personalizado. --}}
@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
