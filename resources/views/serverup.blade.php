@extends('layouts.app')
@section('content')
<div class="container">
    <div class='card'>
        <div class="card-body">
            <h4 class="card-title">Actualizar Servidor</h4>
            <form action=" {{ url('actualizarserver', $server->id) }} " method="POST">
                @csrf
                    <div class='form-group'>
                        <label for="name">{{ 'Nombre' }}</label>
                        <input class='form-control @error('name') is-invalid @enderror"' type="text" name="name" id="name" placeholder="Nombre">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class='form-group'>
                        <label for="name">{{ 'Ip' }}</label>
                        <input class='form-control @error('ip') is-invalid @enderror"' type="text" name="ip" id="ip" placeholder="Ip">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class='form-group'>
                        <label for="password">{{ 'Contraseña conexión' }}</label>
                        <input class='form-control @error('password') is-invalid @enderror' type="password" name="password" id="password" placeholder="Contraseña">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class='form-group'>
                        <label for="name">{{ 'Host' }}</label>
                        <input class='form-control @error('name') is-invalid @enderror"' type="text" name="host" id="host" placeholder="Host">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class='form-group'>
                        <label for="telegramId">{{ 'Puerto' }}</label>
                        <input class='form-control @error('name') is-invalid @enderror' type="number" name="port" id="port" placeholder="port">
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
