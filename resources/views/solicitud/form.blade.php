<div class="form group">
<label for="Fecha" class="control-label">{{'Fecha'}}</label>
<input type="date" class="form-control" name="fecha" id="fecha" 
value="{{isset($solicitud->fecha)?$solicitud->fecha:''}}"</input>
</div>

<div class="form-group">
<label for="Responsable">{{'Responsable'}}</label>
<input type="text" name="responsable" id="responsable" 
value="{{isset($solicitud->responsable)?$solicitud->responsable:''}}"</input>
</div>

<div class="form-group">
<label for="Centro_Costo">{{'Centro_Costo'}}</label>
<input type="text" name="centrocosto" id="centrocosto" 
value="{{isset($solicitud->centrocosto)?$solicitud->centrocosto:''}}"</input>
</div>

<div class="form-group">
<label for="rubropresupuestal">{{'Rubro Presupuestal'}}</label>
<input type="number" name="rubropresupuestal" id="rubropresupuestal"
value="{{isset($solicitud->rubropresupuestal)?$solicitud->rubropresupuestal:''}}"</input>
</div>

<input type="submit" class="btn btn-success" name="" value="{{ $Modo == 'crear' ? 'Agregar Registro': 'Modificar Registro'}}">

<a class="btn btn-primary" href="{{ url('Solicitud')}}">Regresar</a>

