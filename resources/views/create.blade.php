@extends('layouts.app')
@section('content')
<div class="container">
    <div class='card'>
        <div class="card-body">
            <h4 class="card-title">Registrar usuarios</h4>
                <form action="" method="POST">
                    <div class='form-group'>
                        <label for="name">{{ 'Nombre' }}</label>
                        <input class='form-control' type="text" name="name" id="name" placeholder="Nombre">
                    </div>
                    <div class='form-group'>
                        <label for="password">{{ 'Contraseña' }}</label>
                        <input class='form-control' type="text" name="password" id="password" placeholder="Contraseña">
                    </div>
                    <div class='form-group'>
                        <label for="name">{{ 'Nombre' }}</label>
                        <input class='form-control' type="text" name="Nombre" id="name" placeholder="Nombre">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
        </div>
    </div>
</div>
@endsection
