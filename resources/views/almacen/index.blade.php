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
 


<!--<a href = "{{url('almacen/create')}}" class="btn btn-success">Registrar nueva almacen</a>-->
<h1 align="center" > Almacen</h1>
<br/>
<br/>
<table class="table table-light">
    
    <thead class="thead-light">
        <tr>
            <!--<th>#</th>-->
            <th>Factura id</th>
            <th>Salida Almacen</th>
           

            <!--<th>Acciones</th>-->
            
    </thead>
    
    <tbody>
    @foreach($almacens as $almacen)
        <tr>
           <!---->
           <td><a href="{{url ('/factura/'.$almacen->id.'/edit')}}" class="">{{$almacen->id}}</td>
           @foreach($almacenSalida as $alma)
            <td><a href="{{url ('/salida_almacen/')}}" class="">{{ $alma->FechaSalida}}</td>
            @endforeach
         <!--
            <td><a href="{{url ('/almacen/'.$almacen->factura_id.'/edit') }}" class="btn btn-warning"> Editar </a>   
            
            <form  action="{{url('/almacen/'.$almacen->id  )}}" class="d-inline" method="post">
            @csrf
            {{method_field('DELETE')}}
                <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                
            </form>
            </td>-->

        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection