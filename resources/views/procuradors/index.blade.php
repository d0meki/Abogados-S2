@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Procuradores</h1>
@stop

@section('content')
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

<div class="card">
    <div class="card-header">
        <a href="{{route('procuradors.create')}}" class="btn btn-success">Crear nuevo procurador <i class="fas fa-user-plus"></i></a>
    </div> 
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Acreditacion</th>
                        <th>Correo</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($procuradors as $procurador)
                        <tr>
                            <th>{{$procurador->id}}</th>
                            <th>{{$procurador->acreditacion}}</th>
                            <th>{{$procurador->user->email}}</th>
                            <th>{{$procurador->user->name}}</th>
                            <th width = "10px"> <a href="{{route('procuradors.edit',$procurador)}}" class="btn btn-primary btn-sm">Editar</a> </th>
                            <th width = "10px">
                                <form action="{{route('procuradors.destroy',$procurador)}}" method="POST">
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
