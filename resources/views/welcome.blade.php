@extends('theme.base')

@section('content')

<div class="container py-5 text-center">
   <h1>Hola Món</h1>
   <a href="{{ route('productos.index')}}" class="btn btn-warning">Productos</a>
</div>

@stop