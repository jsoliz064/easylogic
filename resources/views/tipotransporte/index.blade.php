@extends('adminlte::page')

@section('title', 'Tipo - Transporte')

@section('content_header')
  
@stop

@section('content')
  <br>
  <div class="card">
    <div class="card-body">
      <div align="center">
        <form method="post" action="{{route('tipotransportes.store')}}"  novalidate >
            @csrf
            <h4><B>REGISTRAR TIPO DE TRANSPORTE</B></h4>

            <div class="cbp-mc-daniel">
              <input type="text" placeholder="Ingrese el tipo" name="nombre" class="focus border-primary  form-control" >
              @error('nombre')
                <p>DEBE INGRESAR BIEN EL DATO</p>
              @enderror
            </div>
            
            <button  class="btn btn-danger btn-sm" type="submit">Registrar</button>
        </form>
      </div>
    </div>
  </div>
<br>
  <div class="card">
    <div class="card-body">
      <div align="center">
        <h4><B>TIPOS DE TRANSPORTES</B></h4>
      </div>
      <table class="table table-striped" id="ciudads" >
        <thead>
          <tr>
            <th scope="col" width="10%">ID</th>
            <th scope="col">Tipo</th>
            <th scope="col" width="20%">Acciones</th>
            {{-- <th colspan=""></th> --}}
          </tr>
        </thead>
        
        <tbody>

          @foreach ($tipotransportes as $tipotransporte)
            <tr>
              <td>{{$tipotransporte->id}}</td>
              <td>{{$tipotransporte->nombre}}</td>
              <td >
                <form  action="{{route('tipotransportes.destroy',$tipotransporte)}}" method="post">
                  @csrf
                  @method('delete')
                   {{--   <a  class="btn btn-primary btn-sm" href="{{route('tipotransportess.show',$tipotransportes)}}">Ver</a>    --}}
                   
                    <a class="btn btn-info btn-sm" href="{{route('tipotransportes.edit',$tipotransporte)}}">Editar</a> 
                    
                                                     
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
<link rel="stylesheet" href="{{asset('css/cruds.css')}}">
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
