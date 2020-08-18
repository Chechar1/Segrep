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
            @foreach ($users as $user)
                <tr>
                    <td class="v-align-middle">{{$user->name}}</td>
                    <td class="v-align-middle">{{$user->email}}</td>
                    <td class="v-align-middle">{{$user->telegramid}}</td>
                    <td class="v-align-middle">

                        <form action="{{ route('eliminar',$user->id) }}" method="POST" class="form-horizontal" role="form">

                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <a href="{{ route('actualizar',$user->id) }}" class="btn btn-primary">Editar</a>

                            <button type="submit" class="btn btn-danger">Eliminar</button>

                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </table>
@endsection
