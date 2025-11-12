@extends('layout')

@section('titulo', $titulo)

@section('content')
<h1>Conheça nossos serviços !</h1>

<ul>

    @for($i = 0; $i < count($services); $i++)
    <li> {{ $services[$i]['name'] }} - {{ $services[$i]['description'] }} ----> Item {{$i}} /li>
        @endfor
    
    @while($repeticoes > 0)
    <li> Repetindo... x </li>
    {{ $repeticoes-- }}
    @endwhile

    <!--@foreach($services as $service)
    <li> {{ $service['name'] }} - {{ $service['description'] }} </li>
    @endforeach-->
</ul>
@endsection
