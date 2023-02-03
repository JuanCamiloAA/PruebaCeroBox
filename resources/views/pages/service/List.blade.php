@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row justify-content-center">
        <div class="col-8">

            <a class="btn btn-primary" href="{{route('service.create')}}">Crear servicio</a>

        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-9">
            <table class="table">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th>Nombre</th>
                        <th>Estado</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($servicios as $key => $val)
                        <tr class="text-center">
                            <td>{{$val->name}}</td>
                            <td>
                                @if($val->State == 1)    
                                    <b style="color: green;"> Activo</b>
                                @else 
                                    <b style="color: red;"> Inactivo</b>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-warning" href="{{route('service.edit', $val->id)}}">Editar</a> 
                            </td>
                            <td>
                                <a class="btn btn-danger" href="/changeStateService/{{$val->id}}/{{$val->State}}">Cambiar estado</a> 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection