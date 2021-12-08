@extends('adminlte::page')

@section('title', 'Agentes')

@section('content_header')
    <h1>Registrar Agente</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form method="post" action="{{route('agentes.store')}}" enctype="multipart/form-data"  >

            @csrf

            <h5>Nombre Completo:</h5>
            <input type="text"  name="nombre" class="focus border-primary  form-control" >
            @error('nombre')
            <p>DEBE INGRESAR BIEN SU NOMBRE</p>
            @enderror


            <h5>Telefono:</h5>
            <input type="text" name="telefono"  class="focus border-primary  form-control" >
            @error('telefono')
                <p>DEBE INGRESAR BIEN SU TELEFONO</p>
            @enderror

            <h5>Email:</h5>
            <input type="text" name="email"  class="focus border-primary  form-control" >
            @error('email')
                <p>DEBE INGRESAR BIEN SU EMAIL</p>
            @enderror

            <h5>Ciudad:</h5>
            <select name="id_ciudad" id="id_ciudad" class="form-control" onchange="habilitar()" >
                <option value="nulo">Seleccione una Ciudad</option>
                    @foreach ($ciudads as $ciudad)
                        <option value="{{$ciudad->id}}">
                            {{$ciudad->nombre}}
                        </option>
                    @endforeach
            </select>
            @error('id_ciudad')
                <p>DEBE INGRESAR BIEN EL CAMPO</p>
            @enderror

            <h5>Imagen:</h5>
            <input type="file" name="url" id="url" accept="image/*"  >
            <br>
            @error('url')
                <small class="text-danger">{{$message}}</small>
            @enderror
            
            <br>
            <br>
            
            <button  class="btn btn-danger btn-sm" type="submit">Registrar</button>

            <a href="{{route('agentes.index')}}"class="btn btn-warning text-white btn-sm">Volver</a>
        </form>

    </div>
</div>
@stop

@section('css')

@stop

@section('js')

@stop
