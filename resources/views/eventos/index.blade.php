@extends('layouts.master')
@section('content')

<h1>Eventos Disponiveis</h1> 
@foreach($eventos as $evento)
<h3> data {{$evento->data}}</h3>
<img src="/images/{{$evento->cartaz}}" height="200" width="200"> 
<p>{{$evento->descricao}}</p>
<p>  
<a href="{{route('eventos.show', $evento)}}" class="btn btn-info">Ver eventos</a>
</p>
@endforeach

@stop

