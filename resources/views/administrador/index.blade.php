@extends('adminlte::page')

@section('title', 'usuarios')

@section('content_header')
    <h1>Gestión de Usuarios</h1>
    <a href="{{route('administrador.users.create')}}" class="btn btn-secondary btn-sn float-right">Crear Usuario</a>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
