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
            <button type="button" class="btn btn-primary btn-sm">PDF</button>
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

    <nav class="navbar">
    <div class="filterEntries">
        <div class="entries">
            Show
                <select name="" id="table_size">
                <option >1</option>
                <option >2</option>
                <option >3</option>
                <option >...</option>
            </select> entries
        </div>
    </div>

        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </nav>
      </div>


      <div class="scrollbar-container">


    <table class="table table-bordered table-hover table-striped" id="t_historial_v">
        {{-- <thead class="table-dark"> --}}
     <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Foto</th>
            <th scope="col">Producto</th>
            {{-- 🔹 💰 P → Es el precio al que se vende el producto al cliente. --}}
            <th scope="col">Precio</th>
            <th scope="col">Stock Disponible</th>
            <th scope="col">Categoria</th>
            <th scope="col">Estado</th>
            {{-- 🔹 💲cc → Es el precio que la tienda paga al proveedor por cada unidad del producto. --}}
            <th scope="col">Costo de Compra</th>
            <th scope="col">Fecha de Ingreso</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody class="custom-border-top">
          <tr class="datos-table">
            <th scope="row">1</th>
            <td>
                <img src="{{ asset("http://localhost/adminLte/public/img/embutido.png") }}"  class="img">
            </td>
            <td>Pack Jamón Pizza BRAEDT Queso Edam Paquete 370g</td>
            <td> S/10.00</td>
            <td>25 unidades</td>
            <td>
                <div class="table-dropdown">
                    <select name="" id="table_size">
                        <option >Embutidos </option>
                        <option >Lacteos</option>
                        <option >Conservas</option>
                        <option >Dulces</option>
                    </select>
                </div>
            </td>
            <td>
                <div class="table-dropdown">
                    <select name="" id="table_size">
                        <option value="10">Disponible </option>
                        <option value="20">Agotado</option>
                    </select>
                </div>
            </td>
            <td>S/7.50</td>
            <td>
                <div class="table-time">
                    <input type="date" value="<?php echo date ('y-m-d'); ?>" name=" desde " id="min">
                </div>
            </td>
            <td class="icon-table">
                <i class="fas fa-pencil-alt"></i>
                <i class="fas fa-trash-alt"></i>
            </td>
          </tr>
          <tr class="datos-table">
            <th scope="row">2</th>
            <td>
                <img src="{{ asset("http://localhost/adminLte/public/img/lacteo.png") }}"  class="img">
            </td>
            <td>Yogurt VAKIMU +Pro Sabor Arándanos Pote 500g</td>
            <td>S/12.50</td>
            <td>40 unidades</td>
            <td>Lácteos</td>
            <td>Disponible</td>
            <td>S/9.00</td>
            <td>25/02/2025</td>
            <td class="icon-table">
                <i class="fas fa-pencil-alt"></i>
                <i class="fas fa-trash-alt"></i>
            </td>
          </tr>
          <tr class="datos-table">
            <th scope="row">3</th>
            {{-- <td colspan="2">Larry the Bird</td> --}}
            <td>
                <img src="{{ asset("http://localhost/adminLte/public/img/conservas.png") }}"  class="img">
            </td>
            <td>Filete de Atún FLORIDA en Agua 110kcal Lata 140g</td>
            <td>S/12.50 </td>
            <td>30 unidades</td>
            <td>Conservas</td>
            <td>Disponible</td>
            <td>S/5.50 </td>
            <td>25/02/2025</td>
            <td class="icon-table">
                <i class="fas fa-pencil-alt"></i>
                <i class="fas fa-trash-alt"></i>
            </td>
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

@stop

{{-- 👉  agregar archivos CSS personalizados. --}}
@section('css')


    {{-- Add here extra stylesheets --}}
    
@stop


{{-- 👉 Permite agregar JavaScript personalizado. --}}
@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
