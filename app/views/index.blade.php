@extends('layout.default')

@section('home')
@include('home')
@stop

@section('cotiza')
@include('cotiza')
@stop

@section('promesa-aseguro')
@include('promesa-aseguro')
@stop

@section('aseguros')
@include('aseguros')
@stop

@section('contacto')
@include('contacto')
@stop

@section('banner')
<div id="banner-background" style="background-image: url({{ asset('images/banner.png') }}); text-align: center; padding: 7.5em 0 7.5em 0;">
	<p class="gidole" style="font-size: 2.5vw; color: #FFFFFF; margin: 0; ">COTIZAMOS EL MEJOR SEGURO PARA TI...</p>
</div>
@stop

@section('modals')
@include('modals')
@stop