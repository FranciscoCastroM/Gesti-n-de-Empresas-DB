<div class="form-group">
<label for="NumSalida" class="control-label">{{'Número salida'}}</label>
<input type="number" class="form-control" name="NumSalida" id="NumSalida"
value="{{isset($salida->NumSalida)?$salida->NumSalida:''}}"</input>
</div>



<div class="form-group">
<label for="EmpleadoResponsable" class="control-label">{{'Empleado Responsable'}}</label>
<input type="text" class="form-control" name="EmpleadoResponsable" id="EmpleadoResponsable"
value="{{isset($salida->EmpleadoResponsable)?$salida->EmpleadoResponsable:''}}"</input>
</input>
</div>

<div class="form-group">
<label for="FechaSalida" class="control-label">{{'Fecha salida'}}</label>
<input type="date" class="form-control" name="FechaSalida" id="FechaSalida"
value="{{isset($salida->FechaSalida)?$salida->FechaSalida:''}}"</input>
</input>
</div>

<div class="form-group">
<label for="FechaEntrega" class="control-label">{{'Fecha Entrega'}}</label>
<input type="date" class="form-control" name="FechaEntrega" id="FechaEntrega"
value="{{isset($salida->FechaEntrega)?$salida->FechaEntrega:''}}"</input>
</input>
</div>

<input type="submit" class="btn btn-success" name="" value="{{ $Modo == 'crear' ? 'Agregar Registro': 'Modificar Registro'}}">

<a class="btn btn-primary" href="{{ url('salida_almacen')}}">Regresar</a>
