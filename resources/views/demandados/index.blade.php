@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Demandados</h1>
@stop

@section('content')
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

<div class="card">
    <div class="card-header">
        <a href="{{route('demandados.create')}}" class="btn btn-success">Crear Demandado <i class="fas fa-user-plus"></i></a>
    </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Persona_id</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($demandados as $demandado)
                        <tr>
                            <th>{{$demandado->id}}</th>
                            <th>{{$demandado->persona_id}}</th>
                            <th>{{$demandado->persona->nombre}}</th>
                            <th width = "10px"> <a href="{{route('demandados.edit',$demandado)}}" class="btn btn-primary btn-sm">Editar</a> </th>
                            <th width = "10px">
                                <form action="{{route('demandados.destroy',$demandado)}}" method="POST">
                                @csrf    
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

