@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Demandante</h1>
@stop

@section('content')
<div class="card">
        <div class="card-body">
        {!! Form::model($demandado,['route' =>['demandados.update',$demandado], 'method'=>'put']) !!}
                <div class="form-group">
                    {!! Form::label('id_persona','Telefono') !!}
                    {!! Form::text('id_persona',null,['class' => 'form-control','placeholder' => 'Ingrese el id_persona']) !!}
                    
                    @error('id_persona')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                {!! Form::submit('Actualizar Demandado',['class' => 'btn btn-primary']) !!}    
            {!! Form::close() !!}
        </div>
</div>
@stop

