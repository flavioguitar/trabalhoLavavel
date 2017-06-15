@extends('layouts.master')
@section('content');
<h1>Adicionar</h1>
<p class='lead'>Insira as informações da categoria</p>
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
{!! Form::open(['route' => 'categorias.store']) !!}
<div class="form-group">
    {!! Form::label('tipo', 'Tipo', ['class' => 'control-label']) !!}
    {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>
{!! Form::submit('Cadastrar Tarefa',['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@stop