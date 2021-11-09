@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Archivos</h1>
@stop

@section('content')
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

<div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Id Expediente</th>
                        <th>Descripcion</th>
                        <th>Archivo</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($archivos as $archivo)
                        <tr>
                            <th>{{$archivo->id}}</th>
                            <th>{{$archivo->expediente_id}}</th>
                            <th>{{$archivo->descripcion}}</th>
                            <th>{{$archivo->archivo}}</th>
                            <th>
                                <a href="/storage/{{ $archivo->expediente_id }}/{{ $archivo->archivo }}" class="btn btn-info">Ver</a>
                                    {{--  <a href="/storage/1/hotelBase.txt"  class="btn btn-info">Ver</a>    --}}
                            </th>
                            <th>
                                <form action="{{ route('archivos.destroy', $archivo)}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                               
                            </th>
                            
                        </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
@stop

