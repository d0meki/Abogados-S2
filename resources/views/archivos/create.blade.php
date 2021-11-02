@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Subir Nuevo Archivo</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('archivos.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-2">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Id Expediente</span>
                    <input type="text" name="expediente_id" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-sm" value="{{ $expediente->id }}">
                </div>

                <div class="input-group">
                    <span class="input-group-text">Descripcion</span>
                    <textarea name="descripcion" class="form-control" aria-label="With textarea"></textarea>
                </div>

                <div class="input-group mt-2">
                    <input name="files[]" type="file" class="form-control" id="inputGroupFile04"
                        aria-describedby="inputGroupFileAddon04" aria-label="Upload" multiple>
                </div>

                <button type="submit" class="btn btn-dark mt-2">Guardar</button>

            </form>
        </div>
    </div>
@stop
