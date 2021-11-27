@extends('adminlte::page')

@section('title', 'Tipo - Transporte')

@section('content_header')
    <h1>Editar Tipo</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form method="post" action="{{route('tipotransportes.update',$tipotransporte)}}" novalidate >

            @csrf
            @method('PATCH')
            
           

            <h5>Nombre del Tipo:</h5>
            <input type="text"  name="nombre" value="{{$tipotransporte->nombre}}" class="focus border-primary  form-control" >

            @error('nombre')
            <p>DEBE INGRESAR BIEN LOS DATOS</p>
            @enderror
            <br>
            <br>

            <button  class="btn btn-danger btn-sm" type="submit">Guardar</button>
            <a href="{{route('tipotransportes.index')}}"class="btn btn-warning text-white btn-sm">Volver</a>
        </form>

    </div>
</div>
@stop