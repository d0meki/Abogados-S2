@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar procurador</h1>
@stop

@section('content')
<div class="card">
        <div class="card-body">
        {!! Form::model($procurador,['route' =>['procuradors.update',$procurador], 'method'=>'put']) !!}
                <div class="form-group">
                    {!! Form::label('acreditacion','Acreditacion') !!}
                    {!! Form::text('acreditacion',null,['class' => 'form-control','placeholder' => 'Ingrese acreditacion']) !!}
                
                    @error('acreditacion')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('user_id','ID usuario') !!}
                    {!! Form::text('user_id',null,['class' => 'form-control','placeholder' => 'Ingrese id de usuario']) !!}

                    @error('user_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>    
                {!! Form::submit('Editar Procurador',['class' => 'btn btn-primary']) !!}    
            {!! Form::close() !!}
        </div>
</div>
@stop
