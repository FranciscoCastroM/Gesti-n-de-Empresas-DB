<form action="{url('/Solicitud' .$solicitud->id)" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH')}}

<label for="fecha">{{'Fecha'}}</label>
<input type="date" name="fecha" id="fecha" value="{{$solicitud->fecha}}">
</br>

<label for="responsable">{{'Responsable'}}</label>
<input type="text" name="responsable" id="responsable" value="{{$solicitud->responsable}}">
</br>

<label for="centrocosto">{{'Centro_Costpo'}}</label>
<input type="text" name="centrocosto" id="centrocosto" value="{{$solicitud->centrocosto}}">
</br>

<label for="rubropresupuestal">{{'Responsable'}}</label>
<input type="number" name="rubropresupuestal" id="rubropresupuestal" value="{{$solicitud->rubropresupuestal}}">
</br>
<input type="submit" value="Editar">

</form>