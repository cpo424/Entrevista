@extends('app')
@section('content')
    <div class="container w-25 border p-4 my-4">
        <div class="row mx-auto">
            <form action="{{ route('piloto.store') }}" method="POST">
                @csrf
                @if(session('success'))
                    <h6 class="alert alert-success">{{ session('success')}}</h6>
                @endif

                @error('name')
                    <h6 class="alert alert-danger">{{ $message}}</h6>
                @enderror

                <div class="mb-3">
                    <label for="name" class="form-label"> Nombre del piloto</label>
                    <input type="text" name="name" class="form-control">
                </div>
  <button type="submit" class="btn btn-primary">Crear nuevo piloto</button>
</form>
<div>
    @foreach ($pilotos as $piloto )
        <div class="row py-1">
            <div class="col-md-9 d-flex align-itmes-center">
                <a class="d-flex align-items-center gap-2" href="{{ route('piloto.show', ['piloto'=>$piloto->id])}}">{{$piloto->name}}</a>
            </div>
            <div class="col-md-3 d-flex justify-content-end">
                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-{{$piloto->id}}">Eliminar</button>
</div>
</div>
 <!-- Modal -->
<div class="modal fade" id="modal-{{$piloto->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      ¿Está seguro de que desea eliminar <strong>{{$piloto->name}}</strong> y todas sus relaciones?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <form action="{{route('piloto.destroy',['piloto'=>$piloto->id])}}">
            @method('DELETE')
            @csrf
        <button type="button" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
    </div>
  </div>
</div>
    @endforeach
</div>
</div>
</div>


@endsection