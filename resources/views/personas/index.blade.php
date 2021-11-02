@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Personas</h1>
@stop

@section('content')
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

<div class="card">
    <div class="card-header">
        <a href="{{route('personas.create')}}" class="btn btn-success">Crear Persona <i class="fas fa-user-plus"></i></a>
    </div> 
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>CI</th>
                        <th>Telefono</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($personas as $persona)
                        <tr>
                            <th>{{$persona->id}}</th>
                            <th>{{$persona->nombre}}</th>
                            <th>{{$persona->CI}}</th>
                            <th>{{$persona->telefono}}</th>
                            <th width = "10px"> <a href="{{route('personas.edit',$persona)}}" class="btn btn-primary btn-sm">Editar</a> </th>
                            <th width = "10px">
                                <form action="{{route('personas.destroy',$persona)}}" method="POST">
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

