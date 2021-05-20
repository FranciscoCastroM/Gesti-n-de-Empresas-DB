@extends('layouts.app')

@section('content')

<div class="container">
    <a href="{{ 'items/create' }}" class="btn btn-success"> Registro Item</a>
    <h1 align="center" > Item</h1>
    <table class="table table-light table-hover">
    
    <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Nombre Bien</th>
            <th>Cantidad Solicitada</th>
            <th>Cantidad Despachada</th>
            <th>Unidad de Medida Bien</th>
            <th>Valor Initario</th>
            <th>Valor Total</th>
            <th>Acciones</th>
        </tr>
    </thead>
  
    <tbody>
        @foreach( $items as $item )
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nombre_bien }}</td>
            <td>{{ $item->cantidad_solicitada }}</td>
            <td>{{ $item->cantidad_despachada }}</td>
            <td>{{ $item->unidad_de_medida_bien }}</td>
            <td>{{ $item->valor_initario }}</td>
            <td>{{ $item->valor_total }}</td>
           
            <td><a class="btn btn-warning" href="{{ url('/items/'.$item->id.'/edit') }}"> Editar </a>
            <form action="{{ url('/items/'.$item->id) }}" class="d-inline" method="Post">
            @csrf
            {{ method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" onclick="return confirm('Quieres Borrar?')" value="Borrar">
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection