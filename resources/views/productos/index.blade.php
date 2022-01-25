@extends('theme.base')

@section('content')

<div class="container py-5 text-center">
   <h1>Llistat de productes</h1>
   <a href="{{ route('productos.create')}}" class="btn btn-warning">Crear Producte</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Stoc</th>
      <th scope="col">Preu</th>
      <th scope="col">Accions</th>
    </tr>
  </thead>
  <tbody>
      @forelse ($productos as $item)
        <tr>
            <td>{{$item->nom}}</td>
            <td>{{$item->stoc}}</td>
            <td>{{$item->preu}}</td>
            <td><a class="btn btn-warning" href="{{route('productos.edit', $item)}}">Editar</a>
                <form action="{{ route('productos.destroy', $item)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Eliminar</button>
            </td>
        </tr>
        @empty
            <td colspan="4">Actualment no hi ha registres</td>
        @endforelse
        
  </tbody>
  </table>
  {{$productos->links()}}
@stop