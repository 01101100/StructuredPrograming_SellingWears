@extends('layouts.app')
@section('custom_css')
	<link href="{{ asset('css/product.css') }}" rel="stylesheet">
	<link href="{{ asset('css/proceedtocheckout.css') }}" rel="stylesheet">
@endsection
@section('content')
	@if(Auth::check())
		ok
	@else
		<div class="text-center"><a href="{{ route('login') }}"><div class="btn btn-warning btn-lg">Please Login !</div></a></div>
	@endif
@endsection