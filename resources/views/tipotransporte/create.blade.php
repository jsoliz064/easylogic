@extends('adminlte::page')

@section('title', 'Paises')

@section('content_header')
    <h1>Registrar Pais</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form method="post" action="{{route('pais.store')}}" novalidate >

            @csrf
            
            <h5>Nombre del Pais:</h5>
            <input type="text"  name="nombre" class="focus border-primary  form-control" >
            @error('nombre')
            <p>DEBE INGRESAR BIEN EL DATO</p>
            @enderror
 
            <br>
            <br>
            
            <button  class="btn btn-danger btn-sm" type="submit">Registrar</button>
            <a href="{{route('pais.index')}}"class="btn btn-warning text-white btn-sm">Volver</a>
        </form>

    </div>
</div>
@stop

@section('css')

@stop

@section('js')

@stop
