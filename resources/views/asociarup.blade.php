@extends('layouts.app')
@section('content')
<div class="container">
    <div class='card'>
        <div class="card-body">
            <h4 class="card-title">Actualizar asociar</h4>
            <form action=" {{ url('actualizarasociar', $jugos->id) }} " method="POST">
                @csrf
                    <div class='form-group'>
                        <label for="name">{{ 'Administrador' }}</label>
                    <input class='form-control @error('name') is-invalid @enderror"' type="text" name="user_id" id="user_id" placeholder="{{ $jugos->user_id }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class='form-group'>
                        <label for="name">{{ 'Servidor' }}</label>
                        <input class='form-control @error('email') is-invalid @enderror' type="text" name="server_id" id="server_id" placeholder="{{ $jugos->server_id }}">
                        @error('email')
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
