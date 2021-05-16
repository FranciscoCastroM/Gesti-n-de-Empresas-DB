<!-- AQUI SE CREA DATO ALMACEN-->
@extends('layouts.app')<!--llamamos una vista-->

@section('content')
<div class="container">

<form action="{{url('/almacen')}}" method="post" enctype="multipart/form-data">
@csrf
@include('almacen.form',['modo'=>'Crear'])

</form>
</div>
@endsection