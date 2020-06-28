@extends('layouts.token')
@section('content')
<div class="container">
    <div class='card'>
        <div class="card-body">
            <h4 class="card-title">Doble autenticación</h4>
            <form action=" {{ url('/valida') }} " method="POST">
                @csrf
                    <div class='card-text form-group'>
                        <label for="name">{{ 'Token' }}</label>
                        <input class='form-control @error('multitoken') is-invalid @enderror' type="multitoken" name="multitoken" id="multitoken" placeholder="Ingresa el token enviado">
                        @error('multitoken')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Validar</button>
                </form>
        </div>
    </div>
</div>
@endsection
