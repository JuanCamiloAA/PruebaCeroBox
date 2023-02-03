@extends('layouts.app')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-12 text-center">
            <h2 style="font-weight: bold;">
                Crear servicios
            </h2>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-7 p-4" style="border: solid 2px; border-radius: 10px; background: rgba(64, 64, 64, .4)">
            <form action="{{route('service.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Motilar">
                </div>
                
                <div class="mb-3 row justify-content-center">
                    <div class="col-8">
                        <div class="d-grid gap-2">
                            <button class="btn btn-secondary" type="submit">Crear</button>
                            <a href="{{route('service.index')}}" class="btn btn-danger" type="button">Volver</a>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection