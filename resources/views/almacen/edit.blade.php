<!-- AQUI VA EL EDIT DE ALMACEN-->
@extends('layouts.app')<!--llamamos una vista-->

@section('content')
<div class="container">

<form action="{{url('/almacen/'.$almacen->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}
@include('almacen.form',['modo'=>'Editar'])

</form>
</div>
@endsection