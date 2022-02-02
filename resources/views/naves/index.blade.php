@extends('app')

@section('content')
<div class="container w-25 border p-4 mt-4">
    <form action="{{ route('naves') }}" method="POST">
    @csrf
    @if (session('success'))
        <h6 class="alert alert-success">{{ session('success') }}</h6>
    @endif

    @error('name')
        <h6 class="alert alert-danger">{{ $message }}</h6>
    @enderror

    <div class="mb-3">
        
        <label for="name" class="form-label">Nave</label>
        <input type="text" name="name" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Añadir nave</button>

    </form>
    <div>
        @foreach ($naves as $nave )
            <div class="row py-1">
                <div class="col-md-9 d-flex align-items-center">
                    <a href="{{ route('naves-edit', ['id' => $nave->id]) }}">{{$nave->name}}</a>
                </div>
                <div class="col-md-3 d-flex justify-content-end">
                    <form action="{{ route('naves-destroy', [$nave->id])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm">Eliminar</button>
</form>
</div>
</div>
    

        @endforeach
</div>
</div>
@endsection