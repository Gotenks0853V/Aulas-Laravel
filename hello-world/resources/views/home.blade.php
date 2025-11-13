@extends('layout')

@section('titulo', 'Meu site - Seja Bem Vindo')

@section('content')
<h1>Seja bem-vindo(a)

    @if($userType == 'admin')
    <span style="color:red"> admin </span>
    @elseif($userType == 'editor')
    <span style="color: blue"> editor </span>
    @else
    <span style="color:green"> user </span>
    @endif

</h1>

<h1> Numero sem formatar: 1000 </h1>
<h2> Numero formatado: @moeda(1000) </h2>
@endsection