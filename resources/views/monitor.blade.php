@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">CPU</div>
                @foreach ($datos as $dato)
                    <div class="card-body">
                    <div>{{ $dato }}</div>
                    </div>
                @endforeach
                <div class="card-header">Memoria total</div>
                @foreach ($datost as $datot)
                    <div class="card-body">
                    <div>{{ $datot }}</div>
                    </div>
                @endforeach
                <div class="card-header">Memoria libre</div>
                @foreach ($datosf as $datof)
                    <div class="card-body">
                    <div>{{ $datof }}</div>
                    </div>
                @endforeach
                <div class="card-header">Memoria disponible</div>
                @foreach ($datosa as $datoa)
                    <div class="card-body">
                    <div>{{ $datoa }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
