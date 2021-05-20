@extends('layouts.app')

@section('content')

<div class="container">

<a href="{{'Orden/create'}}" class="btn btn-success">Registro Ordenes</a>
<h1 align="center" > Ordenes</h1>

<table class="table table-light table-hover">

  <thead class="thead-light">
    <tr>
      <th>#ID</th>
      <th>nit</th>
      <th>proveedor</th>
      <th>Fecha Orden</th>
      <th>Monto Total</th>
      <th>Fecha Entrega</th>
      <th>Aprobada</th>
    </tr>
  </thead>

  <tbody>
    @foreach($ordens as $orden)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{ $orden->nit}}</td>
      <td>{{ $orden->proveedor}}</td>
      <td>{{ $orden->fecha_orden}}</td>
      <td>{{ $orden->monto_total}}</td>
      <td>{{ $orden->fecha_entrega}}</td>
      <td>{{ $orden->aprobada}}</td>

      <td>

        <a class="btn btn-warning" href="{{ url('/Orden/'.$orden->id.'/edit')}}">Editar</a>


         |

      <form action="{{ url('/Orden/'.$orden->id) }}" method="post" style="display:inline">
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