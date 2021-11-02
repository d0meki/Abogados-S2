@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Expedientes</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <a href="{{ route('expedientes.create') }}" class="btn btn-success">Crear nuevo expediente <i
                    class="fas fa-user-plus"></i></a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Caso</th>
                        <th>Juez</th>
                        <th>Abogado</th>
                        <th>Procurador</th>
                        <th>Demandado</th>
                        <th>Demandante</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($expedientes as $expediente)
                        <tr>
                            <th>{{ $expediente->id }}</th>
                            <th>{{ $expediente->Caso }}</th>
                            <th>{{ $expediente->juez->persona->nombre }}</th>
                            <th>{{ $expediente->abogado->user->name }}</th>
                            <th>{{ $expediente->procurador->user->name }}</th>
                            <th>{{ $expediente->demandado->persona->nombre }}</th>
                            <th>{{ $expediente->demandante->persona->nombre }}</th>
                            <th>
                                <form action="{{ route('files.mostrar', $expediente->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-info btn-sm">Ver Archivo</button>
                                </form>
                            </th>
                            <th>
                                <form action="{{ route('archivos.crear', $expediente->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-info btn-sm">Agregar Archivo</button>
                                </form>
                            </th>
                            <th>
                                <form action="{{ route('expedientes.destroy', $expediente) }}" method="POST">
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
