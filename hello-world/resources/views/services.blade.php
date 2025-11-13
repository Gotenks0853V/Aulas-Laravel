@extends('layout')

@section('titulo', $titulo)

@section('content')
<h1>Conheça nossos serviços !</h1>

<ul>
    
    @foreach($services as $service)
    <li> {{ $service['name'] }} - {{ $service['description'] }} </li>
    @endforeach

</ul>
@endsection
