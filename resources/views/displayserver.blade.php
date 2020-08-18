@extends('layouts.app')
@section('content')
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Servidor</th>
                <th>Ip</th>
                <th>Host</th>
                <th>Puerto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servers as $server)
                <tr>
                    <td class="v-align-middle">{{$server->name}}</td>
                    <td class="v-align-middle">{{$server->ip}}</td>
                    <td class="v-align-middle">{{$server->host}}</td>
                    <td class="v-align-middle">{{$server->port}}</td>
                    <td class="v-align-middle">

                        <form action="{{ route('eliminarservidor',$server->id) }}" method="POST" class="form-horizontal" role="form">

                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <a href="{{ route('serverup',$server->id) }}" class="btn btn-primary">Editar</a>

                            <button type="submit" class="btn btn-danger">Eliminar</button>

                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
