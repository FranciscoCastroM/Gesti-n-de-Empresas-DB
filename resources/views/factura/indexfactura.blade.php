@extends('layouts.app')

@section('content')
<div class="container">


@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" rolo="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  
{{Session::get('mensaje')}}
</div>
 @endif
 


<a href = "{{url('factura/create')}}" class="btn btn-success">Registrar nueva Factura</a>
<br/>
<br/>
<table class="table table-light">
    
    <thead class="thead-light">
        <tr>
            <!--<th>#</th>-->
            <th>Numero de Entrada</th>
            <th>Numero de Factura</th>
            <th>Proveedor</th>
            <th>Total Bienes</th>
            <th>Valor Total </th>
            <th>Fecha</th>

            <th>Almacen</th>
            <th>Aacciones</th>
        </tr>
    </thead>
    
    <tbody>
    @foreach($facturas as $factura)
        <tr>
           <!--<td>{{ $factura->id }}</td>-->
            <td>{{ $factura->NumeroEntrada}}</td>
            <td>{{ $factura->NumFactura}}</td>
            <td>{{ $factura->Proveedor}}</td>
            <td>{{ $factura->TotalBienes}}</td>
            
            <td>{{ $factura->ValorTotal}}</td>
            <td>{{ $factura->Fecha}}</td>
            <td>{{ $factura->almacen_id}}</td>
            <td><a href="{{url ('/factura/'.$factura->id.'/edit') }}" class="btn btn-warning"> Editar </a>   
            
            <form  action="{{url('/factura/'.$factura->id  )}}" class="d-inline" method="post">
            @csrf
            {{method_field('DELETE')}}
                <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                
            </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
{!!$facturas->Links()!!}
</div>
@endsection