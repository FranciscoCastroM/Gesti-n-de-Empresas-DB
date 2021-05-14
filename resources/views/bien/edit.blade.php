@extends('layouts.app')

@section('content')

<div class="container">

<form class="" action="{{url('/bien', $bien->id)}}" method="post" enctype="multipart/form-data">
  {{ csrf_field()}}
  {{ method_field('PATCH')}}

  @include( 'bien.form',['Modo' => 'editar'])




</form>
</div>

@endsection
