@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Abogado</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'abogados.store']) !!}
            <div class="form-group">
                {!! Form::label('licencia', 'Licencia') !!}
                {!! Form::text('licencia', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Licencia']) !!}
              
                @error('licencia')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('user_id', 'ID usuario') !!}
                {!! Form::text('user_id', null, ['class' => 'form-control', 'placeholder' => 'Ingrese id de usuario']) !!}

                @error('user_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            {!! Form::submit('Crear Abogado', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop
