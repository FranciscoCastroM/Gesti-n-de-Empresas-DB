<table class="table table-light">

  <thead class="thead-light">
    <tr>
      <th>#ID</th>
      <th>Número Salida</th>
      <th>Empleado Responsable</th>
      <th>Fecha Salida</th>
      <th>Fecha Entrega</th>
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
      <td>

        <a href="{{ url('/salida_almacen/'.$salida->id.'/edit')}}">Editar</a>


         |

      <form action="{{ url('/salida_almacen/'.$salida->id) }}" method="post">
      {{csrf_field() }}
      {{ method_field('DELETE') }}
      <button type="submit" onclick="return confirm('¿Borrar?')">Borrar</button>

      </form>

      </td>
    </tr>
    @endforeach
  </tbody>

</table>
