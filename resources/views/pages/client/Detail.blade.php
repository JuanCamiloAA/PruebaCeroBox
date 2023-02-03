@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row justify-content-center">
        <div class="col-8 text-center">

        <h2 style="font-weight: bold;">Detalle Cliente</h2>

        </div>
    </div>
    <div class="row justify-content-center mx-3 mt-4">
        <div class="col-6 text-center">

            <div class="card p-3" style="width: 90%;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$cliente->name}}</h5>
                    <p class="card-text">{{$cliente->Observation}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Documento: </b>{{$cliente->Document}}</li>
                    <li class="list-group-item"><b>Teléfono: </b>{{$cliente->Phone}}</li>
                    <li class="list-group-item"><b>Correo: </b>{{$cliente->email}}</li>
                </ul>
            </div>
        </div>
        <div class="col-6">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>Servicio</th>
                        <th>Fecha inicio</th>
                        <th>Fecha fin</th>
                        <th>Observación</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($service_as as $key => $val)
                        <tr>
                            <td>{{$val->servicio->name}}</td>
                            <td>{{$val->Date_start}}</td>
                            <td>{{$val->Date_end}}</td>
                            <td>{{$val->Observations}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="row justify-content-end">
                <div class="col-3">
                    <div class="d-grid gap-2">
                        <a href="{{route('client.index')}}" class="btn btn-danger" type="button">Volver</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection