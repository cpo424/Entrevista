@extends('app')

@section('content')
<div class="container w-25 border p-4 mt-4">
    <form action="{{ route('piloto.update',['id'=>$piloto->id]) }}" method="POST">
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
    

    </div>
</div>
@endsection


