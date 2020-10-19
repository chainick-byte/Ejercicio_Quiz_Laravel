@extends('layouts.layout')

@section('titulo','pagina 01 de web aplicacion')


@section('barralateral')

    @parent
    <p>esto es el contenido de la barra lateral</p>
@endsection

@section('contenido')
    <p>Esto es el contenido del contenido</p>
    <a href="{{url('/pagina2')}}" class="btn btn-xs btn-info pull-right">pagina dos</a>
@endsection