<form action="{{ url('/Solicitud')}}" method="post" entype="multipart/form-data">
{{ csrf_field() }}
<label for="Fecha">{{'Fecha'}}</label>
<input type="date" name="Fecha" id="Fecha" value=""</input>
</br>

<label for="Responsable">{{'Responsable'}}</label>
<input type="text" name="Responsable" id="Responsable" value=""</input>
</br>

<label for="Centro_Costo">{{'Centro_Costo'}}</label>
<input type="text" name="centrocosto" id="centrocosto" value=""</input>
</br>

<label for="rubropresupuestal">{{'Rubro Presupuestal'}}</label>
<input type="number" name="rubropresupuestal" id="rubropresupuestal" value=""</input>
</br>

<input type="submit" value="Agregar">

</form>