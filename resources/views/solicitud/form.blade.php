<form action="{url('/Solicitud/' .$solicitud->id)" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH')}}

<label for="Fecha">{{'Fecha'}}</label>
<input type="date" name="Fecha" id="Fecha" value="{{$solicitud->Fecha}}">
</br>

<label for="Responsable">{{'Responsable'}}</label>
<input type="text" name="Responsable" id="Responsable" value="{{$solicitud->Responsable}}">
</br>

<label for="Centro_Costo">{{'Centro_Costo'}}</label>
<input type="text" name="centrocosto" id="centrocosto" value="{{$solicitud->centrocosto}}">
</br>

<label for="rubropresupuestal">{{'Responsable'}}</label>
<input type="number" name="rubropresupuestal" id="rubropresupuestal" value="{{$solicitud->rubropresupuestal}}">
</br>
<input type="submit" value="Editar">

</form>