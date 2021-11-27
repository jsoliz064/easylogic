@extends('adminlte::page')

@section('title', 'Paises')

@section('content_header')
    <h1>Editar Pais</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form method="post" action="{{route('pais.update',$pai)}}" novalidate >

            @csrf
            @method('PATCH')
            
           

            <h5>Nombre del Pais:</h5>
            <input type="text"  name="nombre" value="{{$pai->nombre}}" class="focus border-primary  form-control" >

            @error('nombre')
            <p>DEBE INGRESAR BIEN LOS DATOS</p>
            @enderror
            <br>
            <br>

            <button  class="btn btn-danger btn-sm" type="submit">Guardar</button>
            <a href="{{route('pais.index')}}"class="btn btn-warning text-white btn-sm">Volver</a>
        </form>

    </div>
</div>
@stop