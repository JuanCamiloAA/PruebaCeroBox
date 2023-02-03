@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row justify-content-center">
        <div class="col-8">

            <a class="btn btn-primary" href="{{route('client.create')}}">Crear Cliente</a>

        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-9">
            <table class="table">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Estado</th>
                        <th colspan="3">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $key => $val)
                        <tr class="text-center">
                            <td>{{$val->Document}}</td>
                            <td>{{$val->name}}</td>
                            <td>{{$val->Phone}}</td>
                            <td>{{$val->email}}</td>
                            <td>
                                @if($val->State == 1)    
                                    <b style="color: green;"> Activo</b>
                                @else 
                                    <b style="color: red;"> Inactivo</b>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-warning" href="{{route('client.edit', $val->id)}}">Editar</a> 
                            </td>
                            <td>
                                <a class="btn btn-info" href="{{route('client.show', $val->id)}}">Detalle</a> 
                            </td>
                            <td>
                                <a class="btn btn-danger" href="/changeStateClient/{{$val->id}}/{{$val->State}}">Cambio estado</a> 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection