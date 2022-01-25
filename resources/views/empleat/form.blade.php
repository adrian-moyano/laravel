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
    @method('PUT')
    @csrf
   <div class="mb-3">
   <label for="name" class="form-label">Nom
       <input type="text" name="name" id="name" class="form-control" placeholder="Nom de l'empleat" step="0,01" value="{{old('name') ?? @$empleats->name}}">
       @error('name')
           <p class="form-text text-danger">{{$message}}</p>
       @enderror
    </label>
    </div>
   <div class="mb-3">
       <label for="due" class="form-label">Salari
       <input type="number" name="due" id="due" class="form-control" placeholder="Salari de l'empleat" step="0,01" value="{{old('due') ??@$empleat->due}}">
       @error('due')
           <p class="form-text text-danger">{{$message}}</p>
       @enderror
        </label>
    </div>
   <div class="mb-3">
        <label for="comments" class="form-label">Comentaris
        <br>
        <textarea name="comments" id="comments" cols="70" rows="10" placeholder="Observacions de l'empleat" value="{{old('comments') ??@$empleat->comments}}"></textarea>
        @error('comments')
           <p class="form-text text-danger">{{$message}}</p>
       @enderror
        </label>
   </div>
   @if (isset($empleat))
        <button type="submit" class="btn btn-info">Editar Empleat</button>
    @else
        <button type="submit" class="btn btn-info">Desar Empleat</button>
    @endif
    </form>
        
    @else
    <form action="{{ route('empleats.update')}}" method="post">
    @csrf
   <div class="mb-3">
   <label for="name" class="form-label">Nom
       <input type="text" name="name" id="name" class="form-control" placeholder="Nom de l'empleat" step="0,01">
       @error('name')
           <p class="form-text text-danger">{{$message}}</p>
       @enderror
    </label>
    </div>
   <div class="mb-3">
       <label for="due" class="form-label">Salari
       <input type="number" name="due" id="due" class="form-control" placeholder="Salari de l'empleat" step="0,01">
       @error('due')
           <p class="form-text text-danger">{{$message}}</p>
       @enderror
        </label>
    </div>
   <div class="mb-3">
        <label for="comments" class="form-label">Comentaris
        <br>
        <textarea name="comments" id="comments" cols="70" rows="10" placeholder="Observacions de l'empleat"></textarea>
        @error('comments')
           <p class="form-text text-danger">{{$message}}</p>
       @enderror
        </label>
   </div>
    
        @endif

    @if (isset($empleat))
        <button type="submit" class="btn btn-info">Editar Empleat</button>
    @else
        <button type="submit" class="btn btn-info">Desar Empleat</button>
    @endif
    </form>
</div>
  
@endsection
