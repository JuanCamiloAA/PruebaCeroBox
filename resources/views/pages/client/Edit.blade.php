@extends('layouts.app')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-12 text-center">
            <h2 style="font-weight: bold;">
                Editar clientes
            </h2>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-7 p-4" style="border: solid 2px; border-radius: 10px; background: rgba(64, 64, 64, .4)">
            <form action="{{route('client.update', $cliente->id)}}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$cliente->name}}" placeholder="Camilo">
                </div>
                <div class="mb-3">
                    <label for="Document" class="form-label">N° Documento</label>
                    <input type="text" class="form-control" name="Document" id="Document" value="{{$cliente->Document}}" placeholder="1000568741">
                </div>
                <div class="mb-3">
                    <label for="Email" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="email" id="Email" value="{{$cliente->email}}" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="Phone" class="form-label">Telefono</label>
                    <input type="number" class="form-control" name="Phone" id="Phone" value="{{$cliente->Phone}}" placeholder="3245763609">
                </div>
                
                <div class="mb-3">
                    <label for="Observation" class="form-label">Observaciones</label>
                    <textarea class="form-control" name="Observation" id="Observation" rows="3"></textarea>
                </div>

                
                <div class="mb-3 row justify-content-center">
                    <div class="col-8">
                        <div class="d-grid gap-2">
                            <button class="btn btn-secondary" type="submit">Editar</button>
                            <a href="{{route('client.index')}}" class="btn btn-danger" type="button">Volver</a>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection