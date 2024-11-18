@extends('main')
@section('header')

@section('contenido')

<div class="row">
    <div class="col-2"></div>
    <div class="card col-8 m-4">
        <div class="card-body">
            @if(isset($evento))
            <h4 class="card-title">Edicion de evento</h4>
            <form action="/eventoAct/{{$evento->id}}" method="get">
                @csrf
                @method('get')
                @else
                <h4 class="card-title">Crear un nuevo evento</h4>
                <form action="/evento" method="post">
                    @csrf
                    @method('post')
                    @endif

                    <div class="mb-3">
                        <label for="titulo" class="form-label">Titulo</label>
                        @if(isset($evento))
                        <input type="text" class="form-control" id="titulo" aria-describedby="titulo" name="titulo" value="{{$evento->titulo}}" required>
                        @else
                        <input type="text" class="form-control" id="titulo" aria-describedby="titulo" name="titulo" required>
                        @endif

                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        @if(isset($evento))
                        <textarea class="form-control" id="descripcion" rows="3" name="descripcion" required>{{$evento->descripcion}}</textarea>
                        @else
                        <textarea class="form-control" id="descripcion" rows="3" name="descripcion" required></textarea>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="inicio" class="form-label">Inicio</label>
                            @if(isset($evento))
                            <input type="date" class="form-control" id="inicio" name="inicio" value="{{$inicio}}" required>
                            @else
                            <input type="date" class="form-control" id="inicio" name="inicio" required>
                            @endif
                        </div>
                        <div class="col-6 mb-3">
                            <label for="horaInicio" class="form-label">Hora Inicio</label>
                            @if(isset($evento))
                            <input type="time" class="form-control" id="horaInicio" name="horaInicio" value="{{$hInicio}}" required>
                            @else
                            <input type="time" class="form-control" id="horaInicio" name="horaInicio" required>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="fin" class="form-label">Fin</label>
                            @if(isset($evento))
                            <input type="date" class="form-control" id="fin" name="fin" value="{{$fin}}" required>
                            @else
                            <input type="date" class="form-control" id="fin" name="fin" required>
                            @endif
                        </div>
                        <div class="col-6 mb-3">
                            <label for="horaFin" class="form-label">Hora Fin</label>
                            @if(isset($evento))
                            <input type="time" class="form-control" id="horaFin" name="horaFin" value="{{$hFin}}" required>
                            @else
                            <input type="time" class="form-control" id="horaFin" name="horaFin" required>
                            @endif
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                    @if(isset($evento))
                    <a href="/eliminaEvento/{{$evento->id}}" class="btn btn-danger">Eliminar</a>
                    @endif
                </form>
        </div>
    </div>
</div>
@endsection