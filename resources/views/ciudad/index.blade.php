@extends('adminlte::page')

@section('title', 'Ciudades')

@section('content_header')
  <h1>LISTA DE CIUDADES</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-header"> 
        {{-- solo los que tienen permiso a esas rutas.metodo podran ver el button --}}
         
          <a class="btn btn-primary btb-sm" href="{{url('/ciudads/create')}}">Registrar Ciudad</a>    
       
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <table class="table table-striped" id="ciudads" >
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col" width="20%">Acciones</th>
            {{-- <th colspan=""></th> --}}
          </tr>
        </thead>
        
        <tbody>

          @foreach ($ciudads as $ciudad)
            <tr>
              <td>{{$ciudad->id}}</td>
              <td>{{$ciudad->nombre}}</td>
              <td >
                <form  action="{{route('ciudads.destroy',$ciudad)}}" method="post">
                  @csrf
                  @method('delete')
                   {{--   <a  class="btn btn-primary btn-sm" href="{{route('ciudads.show',$ciudad)}}">Ver</a>    --}}
                   
                    <a class="btn btn-info btn-sm" href="{{route('ciudads.edit',$ciudad)}}">Editar</a> 
                    
                                                     
                    <button class="btn btn-danger btn-sm" onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" 
                    value="Borrar">Eliminar</button>
                    

                </form>
              </td>    
            </tr>
          @endforeach
        </tbody> 

      </table>
    </div>
  </div>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
     $('#ciudads').DataTable();
    } );
</script>
@stop
