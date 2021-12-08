@extends('adminlte::page')

@section('title', 'Agentes')

@section('content_header')
  <h1>LISTA DE AGENTES</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-header"> 
          <a class="btn btn-primary btb-sm" href="{{route('agentes.create')}}">Registrar Agente</a>    
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <table class="table table-striped" id="clientes" >
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre Completo</th>
            <th scope="col">Telefono</th>
            <th scope="col">Email</th>
            <th scope="col">Ciudad</th>
            <th scope="col" width="20%">Acciones</th>
            {{-- <th colspan=""></th> --}}
          </tr>
        </thead>
        
        <tbody>

          @foreach ($agentes as $agente)
            <tr>
              <td>{{$agente->id}}</td>
              <td>{{$agente->nombre}}</td>
              <td>{{$agente->telefono}}</td>
              <td>{{$agente->email}}</td>
              <td>{{DB::table('ciudads')->where('id',$agente->id_ciudad)->value('nombre')}}</td>
              <td >
                <form  action="{{route('agentes.destroy',$agente)}}" method="post">
                  @csrf
                  @method('delete')                   
                    <a class="btn btn-info btn-sm" href="{{route('agentes.edit',$agente)}}">Ver o Editar</a> 
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
     $('#clientes').DataTable();
    } );
</script>
@stop
