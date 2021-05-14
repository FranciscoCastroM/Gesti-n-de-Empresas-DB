@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{ url('/salida_almacen')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

@include( 'salida_almacen.form',['Modo' => 'crear'])



</form>
</div>

@endsection
