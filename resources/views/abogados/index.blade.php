@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Abogados</h1>
@stop

@section('content')
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

<div class="card">
    <div class="card-header">
        <a href="{{route('abogados.create')}}" class="btn btn-success">Crear nuevo Abogado <i class="fas fa-user-plus"></i></a>
    </div> 
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Licencia</th>
                        <th>Correo</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($abogados as $abogado)
                        <tr>
                            <th>{{$abogado->id}}</th>
                            <th>{{$abogado->licencia}}</th>
                            <th>{{$abogado->user->email}}</th>
                            <th>{{$abogado->user->name}}</th>
                            <th width = "10px"> <a href="{{route('abogados.edit',$abogado)}}" class="btn btn-primary btn-sm">Editar</a> </th>
                            <th width = "10px">
                                <form action="{{route('abogados.destroy',$abogado)}}" method="POST">
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

