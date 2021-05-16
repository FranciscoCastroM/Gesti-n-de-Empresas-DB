@extends('layouts.app')

@section('content')

<div class="container">
<form class="" action="{{url('/Solicitud', $solicitud->id)}}" method="post" enctype="multipart/form-data">
  {{ csrf_field()}}
  {{ method_field('PATCH')}}

@include( 'solicitud.form',['Modo' => 'editar'])

</form>
</div>

@endsection
