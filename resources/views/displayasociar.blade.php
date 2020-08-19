@extends('layouts.app')
@section('content')
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Administrador</th>
                <th>Server</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servers as $server)
                <tr>
                    <td class="v-align-middle">{{$server->user_name}}</td>
                    <td class="v-align-middle">{{$server->server_name}}</td>

                    <td class="v-align-middle">

                        <form action="{{ route('/delasociar', $server->id) }}" method="POST" class="form-horizontal" role="form">

                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <a href="{{ route('/asociarup',$server->id) }}" class="btn btn-primary">Editar</a>

                            <button type="submit" class="btn btn-danger">Eliminar</button>

                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </table>
@endsection
