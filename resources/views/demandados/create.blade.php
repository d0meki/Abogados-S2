@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Demandado</h1>
@stop

@section('content')
<div class="card">
        <div class="card-body">
            {!! Form::open(['route' =>'demandados.store']) !!}      
                <div class="form-group">
                    {!! Form::label('persona_id','Persona_ID') !!}
                    {!! Form::text('persona_id',null,['class' => 'form-control','placeholder' => 'Ingrese el persona_id']) !!}
                    
                    @error('persona_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>  
                {!! Form::submit('Crear Demandado',['class' => 'btn btn-primary']) !!}    
            {!! Form::close() !!}
        </div>
</div>
@stop
