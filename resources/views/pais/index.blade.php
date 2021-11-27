@extends('adminlte::page')

@section('title', 'Paises')

@section('content_header')
  
@stop

@section('content')
  <br>
  <div class="card">
    <div class="card-body">
      <div align="center">
        <form method="post" action="{{route('pais.store')}}"  novalidate >
            @csrf
            <h4><B>REGISTRAR PAIS</B></h4>

            <div class="cbp-mc-daniel">
              <input type="text" placeholder="Nombre del pais" name="nombre" class="focus border-primary  form-control" >
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
        <h4><B>PAISES</B></h4>
      </div>
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
