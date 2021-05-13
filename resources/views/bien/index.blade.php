<table class="table table-light">

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

        <a href="{{ url('/bien/'.$bien->id.'/edit')}}">Editar</a>


         |

      <form action="{{ url('/bien/'.$bien->id) }}" method="post">
      {{csrf_field() }}
      {{ method_field('DELETE') }}
      <button type="submit" onclick="return confirm('¿Borrar?')">Borrar</button>

      </form>

      </td>
    </tr>
    @endforeach
  </tbody>

</table>