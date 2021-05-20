@extends('layouts.app')
@section('content')
<div class="container">
  <a href="{{ url('salida_almacen/create')}}" class="btn btn-success">Registrar Salida Almacen</a>
  <h1 align="center" > Salida Almacen</h1>

  <table class="table table-light table-hover">

    <thead class="thead-light">
      <tr>
        <th>#ID</th>
        <th>Número Salida</th>
        <th>Empleado Responsable</th>
        <th>Fecha Salida</th>
        <th>Fecha Entrega</th>
        <th>Nombre de Almacen</th>
        <th>Acciones</th>
        
      </tr>
    </thead>

    <tbody>
      @foreach($salidas as $salida)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $salida->NumSalida}}</td>
        <td>{{ $salida->EmpleadoResponsable}}</td>
        <td>{{ $salida->FechaSalida}}</td>
        <td>{{ $salida->FechaEntrega}}</td>
        <td>{{ $salida->almacen_id }}</td>
        <td>

          <a class="btn btn-warning" href="{{ url('/salida_almacen/'.$salida->id.'/edit')}}">Editar</a>


           |

        <form action="{{ url('/salida_almacen/'.$salida->id) }}" method="post" style="display:inline">
        {{csrf_field() }}
        {{ method_field('DELETE') }}
        <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?')">Borrar</button>


        </form>

        </td>
      </tr>
      @endforeach
    </tbody>

  </table>
</div>
@endsection
