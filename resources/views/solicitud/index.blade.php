<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#ID</th>
            <th>Fecha</th>
            <th>Responsable</th>
            <th>Centrocosto</th>
            <th>Rubropresupuestal</th>
            <th>Acciones</th>
    </thead>

    <tbody>
         @foreach($solicitudes as $solicitud)
    <tr>
      <td>{ {$loop->iteration}}</td>
      <td>{{ $solicitud->Fecha}}</td>
      <td>{{ $solicitud->Responsable}}</td>
      <td>{{ $solicitud->Centrocosto}}</td>
      <td>{{ $solicitud->Rubropresupuestal}}</td>
      <td>

            <a href="{{ url('/solicitud/'.$solicitud->id.'/edit') }}"> Editar</a> 
            
            <form action="{{ url('/solicitud'.$solicitud->id) }}" method="post">
            {{csrf_field() }}
            {{ method_field('DELETE')}}
            <button type="submit" onclick="return confirm('¿Borrar?')">Borrar</button>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>