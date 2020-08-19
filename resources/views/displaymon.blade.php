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
            @foreach ($datost as $server)
                <tr>
                    <td class="v-align-middle">{{$server->name}}</td>
                    <td class="v-align-middle">{{$server->ip}}</td>
                    <td class="v-align-middle">{{$server->host}}</td>
                    <td class="v-align-middle">{{$server->port}}</td>
                    <td class="v-align-middle">
                            <a href="{{ route('serverup',$server->id) }}" class="btn btn-primary">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
