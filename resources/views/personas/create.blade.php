@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Persona</h1>
@stop

@section('content')
<div class="card">
        <div class="card-body">
            {!! Form::open(['route' =>'personas.store']) !!}
                <div class="form-group">
                    {!! Form::label('nombre','Nombre') !!}
                    {!! Form::text('nombre',null,['class' => 'form-control','placeholder' => 'Ingrese Nombre']) !!}
                
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('CI','CI') !!}
                    {!! Form::text('CI',null,['class' => 'form-control','placeholder' => 'Ingrese Cedula de Identificacion']) !!}

                    @error('CI')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('telefono','Telefono') !!}
                    {!! Form::text('telefono',null,['class' => 'form-control','placeholder' => 'Ingrese su Telefono']) !!}
                    
                    @error('telefono')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>       
                {!! Form::submit('Crear Persona',['class' => 'btn btn-primary']) !!}    
            {!! Form::close() !!}
        </div>
</div>
@stop

