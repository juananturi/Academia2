@extends('layouts.app')

@section('titulo', 'Detalle Docente')

@section('contenido')
    <div class="text">
        <div class="m-auto">
            <h3>Docente</h3>
            <p class="card-text">Nombres: {{$docentico->nombres}}</p>
            <p class="card-text">Apellidos: {{$docentico->apellidos}}</p>
            <p class="card-text">Titulo Universitario: {{$docentico->titulo}}</p>
            <p class="card-text">Edad: {{$docentico->edad}}</p>
            <p class="card-text">Fecha de contratación: {{$docentico->fecha}}</p>
            <img width="300" src="{{Storage::url($docentico->imagen)}}" alt="">
            <a href="/cursos/{{$docentico->id}}/edit" class="btn btn-success">Editar</a>
        </div>
        <br>
        <br>
        {{--Creacion de campo Eliminar en la vista. Por medio del metodo DELETE,
            ademas de la ruta que debe retornar--}}
        {{-- <form class="form-group" action="/docentes/{{$cursito->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form> --}}
    </div>

@endsection
