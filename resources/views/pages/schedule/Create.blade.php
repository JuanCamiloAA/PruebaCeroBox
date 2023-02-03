@extends('layouts.app')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-12 text-center">
            <h2 style="font-weight: bold;">
                Asignar servicio
            </h2>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-7 p-4" style="border: solid 2px; border-radius: 10px; background: rgba(64, 64, 64, .4)">
            <form action="{{route('schedule.store')}}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="client" class="form-label">Clientes</label>
                    <select class="form-select" id="client" name="Client_id" aria-label="Default select example">
                        <option selected>Seleccionar</option>
                        @foreach($clientes as $key => $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="service" class="form-label">servicios</label>
                    <select class="form-select" id="service" name="Service_id" aria-label="Default select example">
                        <option selected>Seleccionar</option>
                        @foreach($servicios as $key => $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="type" class="form-label">tipo</label>
                    <select class="form-select" id="type" name="Type" aria-label="Default select example">
                        <option selected>Seleccionar</option>
                        <option value="Basico">Basico</option>
                        <option value="Avanzado">Avanzado</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="Date_start" class="form-label">fecha inicio</label>
                    <input type="datetime-local" class="form-control" name="Date_start" id="Date_start" placeholder="1000568741">
                </div>
                <div class="mb-3">
                    <label for="Date_end" class="form-label">fecha fin</label>
                    <input type="datetime-local" class="form-control" name="Date_end" id="Date_end" placeholder="1000568741">
                </div>
                <div class="mb-3">
                    <label for="Observations" class="form-label">Observaciones</label>
                    <textarea class="form-control" name="Observations" id="Observations" rows="3"></textarea>
                </div>

                
                <div class="mb-3 row justify-content-center">
                    <div class="col-8">
                        <div class="d-grid gap-2">
                            <button class="btn btn-secondary" type="submit">Crear</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection