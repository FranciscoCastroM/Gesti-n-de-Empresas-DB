@extends('layouts.app')

@section('content')

<div class="container">

<form class="" action="{{url('/Orden', $orden->id)}}" method="post" enctype="multipart/form-data">
  {{ csrf_field()}}
  {{ method_field('PATCH')}}

@include( 'orden.form',['Modo' => 'editar'])





</form>
</div>

@endsection
