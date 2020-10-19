@extends('layouts.layout')

@section('titulo','pagina 02 de web aplicacion')


@section('barralateral')
    
    @parent
    <p>esto es el contenido de la barra lateral</p>
@endsection

@section('contenido')
   <h3>esto esta en el body de la pagina</h3>
   <a href="{{url('/')}}" class="btn btn-xs btn-info pull-right">pagina uno</a>
@endsection