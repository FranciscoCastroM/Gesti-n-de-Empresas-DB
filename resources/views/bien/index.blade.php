@extends('layouts.app')
@section('content')

<div class="container">

<a href="{{'bien/create'}}" class="btn btn-success">Registro Bienes</a>
<h1 align="center" > Bienes</h1>
<table class="table table-light table-hover">

  <thead class="thead-light">
    <tr>
      <th>#ID</th>
      <th>Nombre</th>
      <th>Cantidad</th>
      <th>Ubicación Área</th>
      <th>Acciones</th>
    </tr>
  </thead>

  <tbody>
    @foreach($biens as $bien)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{ $bien->Nombre}}</td>
      <td>{{ $bien->Cantidad}}</td>
      <td>{{ $bien->UbicacionArea}}</td>
      <td>

        <a class="btn btn-warning" href="{{ url('/bien/'.$bien->id.'/edit')}}">Editar</a>


         |

      <form action="{{ url('/bien/'.$bien->id) }}" method="post" style="display:inline">
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