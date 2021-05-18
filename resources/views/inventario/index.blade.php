@extends('layouts.app')

@section('content')

<div class="container">
    <a href="{{ 'inventario/create' }}" class="btn btn-success"> Registro Inventario</a>
    <table class="table table-light table-hover">
    
    <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Numero de Inventario</th>
            <th>Salida Almacen</th>
            <th>Acciones</th>
        </tr>
    </thead>
  
    <tbody>
        @foreach( $inventarios as $inventario )
        <tr>
            <td>{{ $inventario->id }}</td>
            <td>{{ $inventario->num_inventario }}</td>
            <td>{{ $inventario->salidaalmacen_id }}</td>
           
            <td><a class="btn btn-warning" href="{{ url('/inventario/'.$inventario->id.'/edit') }}"> Editar </a>
            <form action="{{ url('/inventario/'.$inventario->id) }}" class="d-inline" method="Post">
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

