@extends('theme.base')

@section('content')
<div class="container py-5 text-center">

    @if (isset($empleat))
        <h1>Editar Empleat</h1>
    @else
        <h1>Crear Empleat</h1>
    @endif

    @if (isset($empleat))
    <form action="{{ route('empleats.update', '$empleat')}}" method="post">
    @csrf
   <div class="mb-3">
   <label for="nom" class="form-label">Nom</label>
       <input type="text" name="nom" class="form-control" placeholder="Nom de l'empleat" step="0,01">
       @error('name')
           <p class="form-text text-danger">{{$message}}</p>
       @enderror

    </div>
   <div class="mb-3">
       <label for="salary" class="form-label">Salari</label>
       <input type="number" name="salary" class="form-control" placeholder="Salari de l'empleat" step="0,01">
       @error('salari')
           <p class="form-text text-danger">{{$message}}</p>
       @enderror

    </div>
   <div class="mb-3">
        <label for="comentaris" class="form-label">Comentaris</label>
        <br>
        <textarea name="comentaris" id="comentaris" cols="70" rows="10" placeholder="Observacions de l'empleat"></textarea>
        @error('comentaris')
           <p class="form-text text-danger">{{$message}}</p>
       @enderror

   </div>
    </form>
        @method('PUT')
    @else
    <form action="{{ route('empleats.store')}}" method="post">
    @csrf
   <div class="mb-3">
   <label for="nom" class="form-label">Nom</label>
       <input type="text" name="nom" class="form-control" placeholder="Nom de l'empleat" step="0,01">
       @error('name')
           <p class="form-text text-danger">{{$message}}</p>
       @enderror

    </div>
   <div class="mb-3">
       <label for="salary" class="form-label">Salari</label>
       <input type="number" name="salary" class="form-control" placeholder="Salari de l'empleat" step="0,01">
       @error('salari')
           <p class="form-text text-danger">{{$message}}</p>
       @enderror

    </div>
   <div class="mb-3">
        <label for="comentaris" class="form-label">Comentaris</label>
        <br>
        <textarea name="comentaris" id="comentaris" cols="70" rows="10" placeholder="Observacions de l'empleat"></textarea>
        @error('comentaris')
           <p class="form-text text-danger">{{$message}}</p>
       @enderror

   </div>
    </form>
        @endif

    @if (isset($empleat))
        <button type="submit" class="btn btn-info">Editar Empleat</button>
    @else
        <button type="submit" class="btn btn-info">Desar Empleat</button>
    @endif
</form>
</div>
  
@endsection
