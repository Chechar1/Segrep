@extends('layouts.app')
@section('content')
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Telegram Id</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servers as $server)
                <tr>
                    <td class="v-align-middle">{{$server->name}}</td>
                    <td class="v-align-middle">{{$server->email}}</td>
                    <td class="v-align-middle">{{$server->telegramid}}</td>
                    <td class="v-align-middle">

                        <form action="{{ route('eliminar',$server->id) }}" method="POST" class="form-horizontal" role="form">

                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <a href="{{ route('actualizar', $server->id) }}" class="btn btn-primary">Editar</a>

                            <button type="submit" class="btn btn-danger">Eliminar</button>

                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </table>
@endsection
