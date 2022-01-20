@extends('theme.base')

@section('content')

<div class="container py-5 text-center">
   <h1>Hola Món</h1>
   <a href="{{ route('empleats.index')}}" class="btn btn-primary">Empleats</a>
</div>

@stop