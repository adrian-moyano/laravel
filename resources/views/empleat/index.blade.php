@extends('theme.base')

@section('content')

<div class="container py-5 text-center">
   <h1>Llistat d'empleats</h1>
   <a href="{{ route('empleats.create')}}" class="btn btn-primary">Crear Empleats</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Salari</th>
      <th scope="col">Accions</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($empleat as $item)
    <tr>
      <td>{{$item->name}}</td>
      <td>{{$item->due}}</td>
      <td>
        <a href="{{route('empleats.edit', $item)}}" class="btn btn-warning">Editar</a>
        <form action="{{ route('empleats.destroy', $item) }}" method="post" class="d-inline">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>

      </td>
    </tr>
    @empty
      <td colspan="3">Actualment no hi ha registres</td>
    @endforelse
  </tbody>
</table>
{{$empleat->links()}}
@stop