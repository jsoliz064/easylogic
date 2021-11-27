@extends('adminlte::page')

@section('title', 'Marca - Tipos')

@section('content_header')
    <h1>Registrar tipo de marca</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form method="post" action="{{route('tipos.store')}}" novalidate >

            @csrf
            
            <h5>Nombre Completo:</h5>
            <input type="text"  name="nombre" class="focus border-primary  form-control" >
            @error('nombre')
            <p>DEBE INGRESAR BIEN SU NOMBRE</p>
            @enderror

        
            <h5>Producto:</h5>
            <select name="marca_id" id="marca_id" class="form-control" onchange="habilitar()" >
                <option value="nulo">Seleccione una marca</option>
                    @foreach ($marcas as $marca)
                        <option value="{{$marca->id}}">
                            {{$marca->nombre}}
                        </option>
                    @endforeach
            </select>
            @error('marca_id')
                <p>DEBE INGRESAR BIEN EL CAMPO</p>
            @enderror
         
 
            <br>
            <br>
            
            <button  class="btn btn-danger btn-sm" type="submit">Registrar</button>
            <a href="{{route('tipos.index')}}"class="btn btn-warning text-white btn-sm">Volver</a>
        </form>

    </div>
</div>
@stop

@section('css')

@stop

@section('js')

@stop
