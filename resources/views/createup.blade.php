@extends('layouts.app')
@section('content')
<div class="container">
    <div class='card'>
        <div class="card-body">
            <h4 class="card-title">Actualizar usuarios</h4>
            <form action=" {{ route('actualizaruser', $jugos->id) }} " method="POST">
                @csrf
                    <div class='form-group'>
                        <label for="name">{{ 'Nombre' }}</label>
                        <input class='form-control @error('name') is-invalid @enderror"' type="text" name="name" id="name" placeholder="{{$jugos->name}}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class='form-group'>
                        <label for="email">{{ 'Correo elctronico' }}</label>
                        <input class='form-control @error('email') is-invalid @enderror' type="email" name="email" id="email" placeholder="{{$jugos->email}}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class='form-group'>
                        <label for="password">{{ 'Contraseña' }}</label>
                        <input class='form-control @error('password') is-invalid @enderror' type="password" name="password" id="password" placeholder="Contraseña">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class='form-group'>
                        <label for="telegramId">{{ 'Id del chat de telegram' }}</label>
                        <input class='form-control @error('telegramId') is-invalid @enderror' type="number" name="telegramId" id="telegramId" placeholder="{{$jugos->telegramId}}">
                        @error('telegramId')
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
