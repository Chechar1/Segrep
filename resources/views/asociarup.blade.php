@extends('layouts.app')
@section('content')
<div class="container">
    <div class='card'>
        <div class="card-body">
            <h4 class="card-title">Actualizar asociar</h4>
            <form action=" {{ url('actualizarasociar', $server->id) }} " method="POST">
                @csrf
                    <div class='form-group'>
                        <label for="name">{{ 'Administrador' }}</label>
                        <input class='form-control @error('name') is-invalid @enderror"' type="select" name="name" id="name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    @foreach ($datos as $dato)
                        <option value="{{ $dato->id }}"> {{ $dato->id }}</option>
                    @endforeach
                    </div>
                    <div class='form-group'>
                        <label for="name">{{ 'Servidor' }}</label>
                        <input class='form-control @error('server') is-invalid @enderror"' type="select" name="server" id="server">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    @foreach ($datoservers as $datoserver)
                        <option value="{{ $datoserver->id }}"> {{ $datoserver->id }}</option>
                    @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
        </div>
    </div>
</div>
@endsection
