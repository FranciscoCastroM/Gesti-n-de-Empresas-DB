<form class="" action="{{url('/salida_almacen', $salida->id)}}" method="post" enctype="multipart/form-data">
  {{ csrf_field()}}
  {{ method_field('PATCH')}}

  <label for="NumSalida">{{'Número salida'}}</label>
  <input type="number" name="NumSalida" id="NumSalida" value="{{$salida->NumSalida}}">
  </br>

  <label for="EmpleadoResponsable">{{'Empleado Responsable'}}</label>
  <input type="text" name="EmpleadoResponsable" id="EmpleadoResponsable" value="{{$salida->EmpleadoResponsable}}">
  </br>

  <label for="FechaSalida">{{'Fecha salida'}}</label>
  <input type="date" name="FechaSalida" id="FechaSalida" value="{{$salida->FechaSalida}}">
  </br>

  <label for="FechaEntrega">{{'Fecha Entrega'}}</label>
  <input type="date" name="FechaEntrega" id="FechaEntrega" value="{{$salida->FechaEntrega}}">
  </br>

  <input type="submit" name="" value="Editar">

</form>
