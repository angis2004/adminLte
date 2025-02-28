{{-- Este indica que esta página hereda la estructura de AdminLTE. --}}

@extends('adminlte::page')

{{-- 👉 Define el título de la pestaña en el navegador. --}}
@section('title', 'PAPI')


{{-- 👉 Es la cabecera del contenido principal (encabezado de la página). --}}
@section('content_header')

    <h1>PAPI EN QUE ESTÁS ? </h1>


@stop


{{-- 👉 Aquí va el contenido principal de la página. --}}
@section('content')

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
