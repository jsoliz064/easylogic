@extends('adminlte::page')

@section('title', 'Paises')

@section('content_header')
  <h1>LISTA DE PAISES</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-header"> 
        {{-- solo los que tienen permiso a esas rutas.metodo podran ver el button --}}
         
          <a class="btn btn-primary btb-sm" href="{{url('/pais/create')}}">Registrar Pais</a>    
       
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <table class="table table-striped" id="ciudads" >
        <thead>
          <tr>
            <th scope="col" width="10%">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col" width="20%">Acciones</th>
            {{-- <th colspan=""></th> --}}
          </tr>
        </thead>
        
        <tbody>

          @foreach ($pais as $pai)
            <tr>
              <td>{{$pai->id}}</td>
              <td>{{$pai->nombre}}</td>
              <td >
                <form  action="{{route('pais.destroy',$pai)}}" method="post">
                  @csrf
                  @method('delete')
                   {{--   <a  class="btn btn-primary btn-sm" href="{{route('paiss.show',$pais)}}">Ver</a>    --}}
                   
                    <a class="btn btn-info btn-sm" href="{{route('pais.edit',$pai)}}">Editar</a> 
                    
                                                     
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
