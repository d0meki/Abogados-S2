@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Jueces</h1>
@stop

@section('content')
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

<div class="card">
    <div class="card-header">
        <a href="{{route('juezs.create')}}" class="btn btn-success">Crear Juez <i class="fas fa-user-plus"></i></a>
    </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Persona_id</th>
                        <th>Identificacion</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($juezs as $juez)
                        <tr>
                            <th>{{$juez->id}}</th>
                            <th>{{$juez->persona_id}}</th>
                            <th>{{$juez->identificacion}}</th>
                            <th>{{$juez->persona->nombre}}</th>
                            <th width = "10px"> <a href="{{route('juezs.edit',$juez)}}" class="btn btn-primary btn-sm">Editar</a> </th>
                            <th width = "10px">
                                <form action="{{route('juezs.destroy',$juez)}}" method="POST">
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


