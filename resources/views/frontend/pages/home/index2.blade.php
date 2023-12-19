@extends('frontend.layouts.default')
@section('content')

	@include('frontend.element.slide')

	@include('frontend.element.gioithieu')
	
	@include('frontend.element.service')
	
	@include('frontend.element.linhvuc')
	
	@include('frontend.element.visao')
	
	@include('frontend.element.tinnoibat')
	
	@yield('content')
@endsection
