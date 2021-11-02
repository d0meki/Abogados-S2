@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Demandantes</h1>
@stop

@section('content')
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

<div class="card">
    <div class="card-header">
        <a href="{{route('demandantes.create')}}" class="btn btn-success">Crear Demandante <i class="fas fa-user-plus"></i></a>
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
                    @foreach($demandantes as $demandante)
                        <tr>
                            <th>{{$demandante->id}}</th>
                            <th>{{$demandante->persona_id}}</th>
                            <th>{{$demandante->persona->nombre}}</th>
                            <th width = "10px"> <a href="{{route('demandantes.edit',$demandante)}}" class="btn btn-primary btn-sm">Editar</a> </th>
                            <th width = "10px">
                                <form action="{{route('demandantes.destroy',$demandante)}}" method="POST">
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

