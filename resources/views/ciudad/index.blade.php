@extends('adminlte::page')

@section('title', 'Pais - Ciudad')

@section('content_header')

@stop

@section('content')
<br>
  <div class="card">
    <div class="card-body">
      <form method="post" action="{{route('ciudads.store')}}"  novalidate >
          @csrf

          <div align="center">
            <h4><B>REGISTRAR CIUDAD</B></h4>
          </div>
          <div class="cbp-mc-column">
            <input type="text" placeholder="Nombre de la ciudad" name="nombre" class="focus border-primary  form-control" >
            @error('nombre')
              <p>DEBE INGRESAR BIEN EL DATO</p>
            @enderror
          </div>
          
          <div class="cbp-mc-column">
            <select name="id_pais" id="id_pais" class="form-control" onchange="habilitar()" >
                <option value="nulo">Seleccione un pais</option>
                    @foreach ($pais as $pais)
                        <option value="{{$pais->id}}">
                            {{$pais->nombre}}
                        </option>
                    @endforeach
            </select>
            @error('id_pais')
                <p>DEBE INGRESAR BIEN EL CAMPO</p>
            @enderror
          </div>
          <div class="cbp-mc-column">
            <button  class="btn btn-danger btn-sm" type="submit">Registrar</button>
          </div>
          
      </form>
  </div>
  </div>
  <br>
  <div class="card">
    <div class="card-body">
      <div align="center">
        <h4><B>CIUDADES</B></h4>
      </div>
      <table class="table table-striped" id="marcas" >
        <thead>
          <tr>
            <th scope="col" width="10%">ID</th>
            <th scope="col">Pais</th>
            <th scope="col">Ciudad</th>
            <th scope="col" width="20%">Acciones</th>
            {{-- <th colspan=""></th> --}}
          </tr>
        </thead>
        
        <tbody>

          @foreach ($ciudads as $ciudad)
            <tr>
              <td>{{$ciudad->id}}</td>
              <td>{{DB::table('pais')->where('id',$ciudad->id_pais)->value('nombre')}}</td>
              <td>{{$ciudad->nombre}}</td>
              <td>
                <form  action="{{route('ciudads.destroy',$ciudad)}}" method="post">
                  @csrf
                  @method('delete')
                   {{--   <a  class="btn btn-primary btn-sm" href="{{route('tipos.show',$tipo)}}">Ver</a>    --}}
                   
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
<link rel="stylesheet" href="{{asset('css/cruds.css')}}">

@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
     $('#marcas').DataTable();
    } );
</script>
@stop
