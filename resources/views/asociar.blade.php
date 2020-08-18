@extends('layouts.app')
@section('content')
<div class="container">
    <div class='card'>
        <div class="card-body">
            <h4 class="card-title">Asociar servicios</h4>
            <form action=" {{ url('asociar') }} " method="POST">
                @csrf
                    <div class='form-group'>
                        <label for="name">{{ 'Administrador' }}</label>
                        <input class='form-control @error('name') is-invalid @enderror"' type="number" name="user_id" id="user_id">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class='form-group'>
                        <label for="name">{{ 'Servidor' }}</label>
                        <input class='form-control @error('server') is-invalid @enderror"' type="number" name="server_id" id="server_id">
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
