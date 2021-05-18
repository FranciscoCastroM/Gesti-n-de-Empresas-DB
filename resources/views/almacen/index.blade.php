<!-- AQUI VA INDEX DE ALMACEN-->
@extends('layouts.app')

@section('content')
<div class="container">


@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" rolo="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  
{{Session::get('mensaje')}}
</div>
 @endif
 


<a href = "{{url('almacen/create')}}" class="btn btn-success">Registrar nueva almacen</a>
<h1 align="center" > Almacen</h1>
<br/>
<br/>
<table class="table table-light">
    
    <thead class="thead-light">
        <tr>
            <th>Numero Almacen</th>
            <th>Nombre Almacén</th>
            <th>Dirección Almacén</th>
           

            <th>Acciones</th>
            
    </thead>
    
    <tbody>
    @foreach($almacens as $almacen)
        <tr>
           <!---->
           
           <td>{{ $almacen->id }}</td>
            <td>{{ $almacen->nombreAlmacen }}</td>
            <td>{{ $almacen->direccionAlmacen}}</td>
        
            <td><a href="{{url ('/almacen/'.$almacen->id.'/edit') }}" class="btn btn-warning"> Editar </a>   
            
            <form  action="{{url('/almacen/'.$almacen->id  )}}" class="d-inline" method="post">
            @csrf
            {{method_field('DELETE')}}
                <input class="btn btn-danger" type="submit" onclick="return confirm('¿Desea borrar los datos de almacen ?')" value="Borrar">
                
            </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection