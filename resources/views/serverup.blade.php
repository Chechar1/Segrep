@extends('layouts.app')
@section('content')
<div class="container">
    <div class='card'>
        <div class="card-body">
            <h4 class="card-title">Actualizar Servidor</h4>
            <form action=" {{ route('actualizarserver', $jugos->id) }} " method="POST">
                @csrf
                    <div class='form-group'>
                        <label for="name">{{ 'Nombre' }}</label>
                    <input class='form-control @error('name') is-invalid @enderror"' type="text" name="name" id="name" placeholder="{{ $jugos->name }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class='form-group'>
                        <label for="ip">{{ 'Ip' }}</label>
                        <input class='form-control @error('ip') is-invalid @enderror"' type="text" name="ip" id="ip" placeholder="{{ $jugos->ip }}">
                    @error('ip')
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
                        <label for="host">{{ 'Host' }}</label>
                        <input class='form-control @error('host') is-invalid @enderror"' type="text" name="host" id="host" placeholder="{{ $jugos->host }}">
                    @error('host')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class='form-group'>
                        <label for="port">{{ 'Puerto' }}</label>
                        <input class='form-control @error('port') is-invalid @enderror' type="number" name="port" id="port" placeholder="{{ $jugos->port }}">
                        @error('port')
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
