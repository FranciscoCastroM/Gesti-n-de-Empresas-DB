@extends('layouts.app')

@section('content')

<div class="container">

<form class="" action="{{url('/salida_almacen', $salida->id)}}" method="post" enctype="multipart/form-data">
  {{ csrf_field()}}
  {{ method_field('PATCH')}}

@include( 'salida_almacen.form',['Modo' => 'editar'])





</form>
</div>

@endsection
