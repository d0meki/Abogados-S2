@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Buscar</h1>
@stop

@section('content')
{!! Form::open(['route' =>'expedientes.store']) !!}
                <div class="form-group">
                    {!! Form::label('Caso','Caso') !!}
                    {!! Form::text('Caso',null,['class' => 'form-control','placeholder' => 'Ingrese Caso']) !!}
{{--                     <label for="" class="form-label">Nombre del Juez</label>
                    <input type="text" class="form-control" id="search"> --}}

                    @error('Caso')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('juez_id','ID Juez') !!}
                    {!! Form::text('juez_id',null,['class' => 'form-control','placeholder' => 'Ingrese id del juez','id' => 'search']) !!}

                    @error('juez_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('abogado_id','ID Abogado') !!}
                    {!! Form::text('abogado_id',null,['class' => 'form-control','placeholder' => 'Ingrese id del Abogado','id' => 'search1']) !!}

                    @error('abogado_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>    
                <div class="form-group">
                    {!! Form::label('procurador_id','ID Procurador') !!}
                    {!! Form::text('procurador_id',null,['class' => 'form-control','placeholder' => 'Ingrese id del Procurador','id' => 'search2']) !!}

                    @error('procurador_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>    
                <div class="form-group">
                    {!! Form::label('demandado_id','ID Demandado') !!}
                    {!! Form::text('demandado_id',null,['class' => 'form-control','placeholder' => 'Ingrese id del Demandado','id' => 'search3']) !!}

                    @error('demandado_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>   
                <div class="form-group">
                    {!! Form::label('demandante_id','ID Demandante') !!}
                    {!! Form::text('demandante_id',null,['class' => 'form-control','placeholder' => 'Ingrese id del Demandante','id' => 'search4']) !!}

                    @error('demandante_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>  
                {!! Form::submit('Crear Expediente',['class' => 'btn btn-primary']) !!}    
            {!! Form::close() !!}
@stop
@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/jquery-ui/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="/css/admin_custom.css">
    
@stop
@section('js')
    <script src="{{ asset('vendor/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-ui/jquery-ui.min.js') }}"></script>
    <script>
/*      var cursos = ['html', 'php', 'angular', 'laravel','javaScript'];
        $('#search').autocomplete({
            source:cursos
        }); */
        
        $('#search').autocomplete({
            source: function(request, response){
                $.ajax({
                    url: "{{ route('search.juezs') }}",
                    dataType: 'json',
                    data: {
                        term: request.term
                    },
                    success: function(data){
                        response(data)
                    }
                });
            }
        });
        $('#search1').autocomplete({
            source: function(request, response){
                $.ajax({
                    url: "{{ route('search.abogados') }}",
                    dataType: 'json',
                    data: {
                        term: request.term
                    },
                    success: function(data){
                        response(data)
                    }
                });
            }
        });
        $('#search2').autocomplete({
            source: function(request, response){
                $.ajax({
                    url: "{{ route('search.procuradors') }}",
                    dataType: 'json',
                    data: {
                        term: request.term
                    },
                    success: function(data){
                        response(data)
                    }
                });
            }
        });
        $('#search3').autocomplete({
            source: function(request, response){
                $.ajax({
                    url: "{{ route('search.demandados') }}",
                    dataType: 'json',
                    data: {
                        term: request.term
                    },
                    success: function(data){
                        response(data)
                    }
                });
            }
        });
        $('#search4').autocomplete({
            source: function(request, response){
                $.ajax({
                    url: "{{ route('search.demandantes') }}",
                    dataType: 'json',
                    data: {
                        term: request.term
                    },
                    success: function(data){
                        response(data)
                    }
                });
            }
        });
    </script>
@stop
