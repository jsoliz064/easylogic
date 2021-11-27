@extends('adminlte::page')

@section('title', 'Pais - Ciudad')

@section('content_header')
    <h1>Editar Ciudad</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form method="post" action="{{route('ciudads.update',$ciudad)}}" novalidate >

            @csrf
            @method('PATCH')
            
           

            <h5>Nombre Completo:</h5>
            <input type="text"  name="nombre" value="{{$ciudad->nombre}}" class="focus border-primary  form-control" >

            @error('nombre')
            <p>DEBE INGRESAR BIEN SU NOMBRE</p>
            @enderror

            <h5>Marca:</h5>
            <select name = "id_pais" id="id_pais" class="form-control" onchange="habilitar()" >
                <option value="{{$ciudad->id_pais}}">{{DB::table('pais')->where('id',$ciudad->id_pais)->value('nombre')}}</option>
                    @foreach ($pais as $pai)
                        <option value="{{$pai->id}}">
                            {{$pai->nombre}}
                        </option>
                    @endforeach
            </select>
           
            @error('id_pais')
                <p>DEBE INGRESAR BIEN EL CAMPO</p>
            @enderror
            <br>
            <br>

            <button  class="btn btn-danger btn-sm" type="submit">Guardar</button>
            <a href="{{route('ciudads.index')}}"class="btn btn-warning text-white btn-sm">Volver</a>
        </form>

    </div>
</div>
@stop