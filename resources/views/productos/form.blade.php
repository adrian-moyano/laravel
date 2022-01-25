@extends('theme.base')

@section('content')
<div class="container py-5 text-center">
    
    @if (isset($productos))
        <h1>Editar Producte</h1>
        <h2>{{$productos}}</h2>
    @else
        <h1>Crear producte</h1>
    @endif


    @if (isset($productos))
        <form action="{{ route('productos.update', '$productos')}}" method="post">
            @method('PUT')
    @else
        <form action="{{ route('productos.store')}}" method="post">
    @endif
   @csrf
   <div class="mb-3">
   <label for="nom" class="form-label">Nom</label>
       <input type="text" name="nom" class="form-control" placeholder="Nom de producte" value="{{old('nom') ?? @$productos->nom}}">   </div>
   <div class="mb-3">
       <label for="stoc" class="form-label">Stoc</label>
       <input type="number" name="stoc" class="form-control" placeholder="Stoc del producte" value="{{old('stoc') ?? @$productos->stoc}}">
   </div>
   <div class="mb-3">
   <label for="preu" class="form-label">Preu</label>
       <input type="number" name="preu" class="form-control" placeholder="Preu del producte" value="{{old('preu') ?? @$productos->preu}}">  
   </div>

    @if (isset($productos))
        <button type="submit" class="btn btn-info">Editar producte</button>
    @else
        <button type="submit" class="btn btn-info">Desar producte</button>
    @endif


</form>
</div>
  
@endsection
