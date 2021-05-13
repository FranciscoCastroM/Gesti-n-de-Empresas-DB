<form action="{{ url('/salida_almacen')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<label for="NumSalida">{{'Número salida'}}</label>
<input type="number" name="NumSalida" id="NumSalida" value=""</input>
</br>

<label for="EmpleadoResponsable">{{'Empleado Responsable'}}</label>
<input type="text" name="EmpleadoResponsable" id="EmpleadoResponsable" value=""</input>
</br>

<label for="FechaSalida">{{'Fecha salida'}}</label>
<input type="date" name="FechaSalida" id="FechaSalida" value=""</input>
</br>

<label for="FechaEntrega">{{'Fecha Entrega'}}</label>
<input type="date" name="FechaEntrega" id="FechaEntrega" value=""</input>
</br>

<input type="submit" value="Agregar">



</form>