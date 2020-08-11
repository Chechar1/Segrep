@extends('layouts.app')
@section('content')
<div class="container">
    <div class='card'>
        <div class="card-body">
            <h4 class="card-title">Asociar servicios</h4>
            <form action=" {{ url('registro') }} " method="POST">
                @csrf
                    <div class='form-group'>
                        <label for="name">{{ 'Administrador' }}</label>
                        <input class='form-control @error('name') is-invalid @enderror"' type="text" name="name" id="name" placeholder="Nombre">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class='form-group'>
                        <label for="name">{{ 'Servidor' }}</label>
                        <input class='form-control @error('name') is-invalid @enderror"' type="text" name="name" id="name" placeholder="Nombre">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
        </div>
    </div>
</div>
@endsection
