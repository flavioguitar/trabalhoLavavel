@extends('layouts.master')
@section('content')

<h1>{{ $evento->descricao }}</h1>

<!--<p class="lead">{{ $task->description }} </p>
<hr>
<a href="{{ route('eventos.index') }}" class="btn btn-info">Todas as Tarefas</a>
<a href="{{ route('eventos.edit', $evento) }}" class="btn btn-primary">Editar as Tarefas</a>

<div class="pull-right">
    {!! Form::open(['method' => 'DELETE','route' => ['tasks.destroy',$task]]) !!}
    {!! Form::submit('Deletar', ['class' => 'btn btn-alert']) !!}
    {!! Form::close() !!}
</div>-->

@stop