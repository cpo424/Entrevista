@extends('app')

@section('content')
<div class="container w-25 border p-4 mt-4">
    <form action="{{ route('piloto.update' ,['piloto'=>$piloto->id]) }}" method="POST">
    @method('PATCH')
    @csrf
    @if (session('success'))
        <h6 class="alert alert-success">{{ session('success') }}</h6>
    @endif

    @error('name')
        <h6 class="alert alert-danger">{{ $message }}</h6>
    @enderror

    <div class="mb-3">
        
        <label for="name" class="form-label">Piloto</label>
        <input type="text" name="name" class="form-control" value="{{ $piloto->name}}">
    </div>
    <button type="submit" class="btn btn-primary">Actualizar piloto</button>

    </form>
    <div>
        @if($piloto->naves->count()>0)
            @foreach ($piloto->naves as $nave )
                
            
            <div class="row py-1">
                <div class="col-md-9 d-flex align-items-center">
                    <a href="{{ route('naves-edit',['id'=> $nave->id]) }}">{{$nave->name}}</a>
            </div>
            <div class="col-md-3 d-flex justify-content-end">
                <form action="{{ route('naves-destroy',[$nave->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
</form>
</div>
</div>
@endforeach
        @else
        No hay naves asociadas a este piloto.
        @endif

    </div>
</div>
@endsection


