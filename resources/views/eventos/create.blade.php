@extends('layouts.master')
@section('content')

<h1>Adicionar</h1>
<p class='lead'>Insira as informações do evento</p>
<hr>

@if($errors->any())
<div class='alert alert-danger'>
    <ul>
        @foreach( $errors->all() as $error )
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul>
</div>


@endif
{!! Form::open(['route' => 'eventos.store', 'files'=> true]) !!}
<div class="form-group">
    {!! Form::label('evento_categoria', 'Categoria', ['class' => 'control-label']) !!}
    {!! Form::select('evento_categoria',$categorias, ['class' => 'form-control']) !!} 
</div>
<div class="form-group">
    {!! Form::label('descricao', 'Descrição', ['class' => 'control-label']) !!} 
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('cartaz', 'Cartaz', ['class' => 'control-label']) !!} 
    {!! Form::file('cartaz', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('data', 'Data', ['class' => 'control-label']) !!} 
    {!! Form::date('data', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('QtdAssentos', 'Quantidade de assentos', ['class' => 'control-label']) !!} 
    {!! Form::text('QtdAssentos', null, ['class' => 'form-control']) !!}
</div>
{!! Form::submit('Cadastrar Evento',['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@stop
