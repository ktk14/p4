@extends('layouts.master')


@section('head')
	<link href='/css/eo.css' rel='stylesheet'>
@endsection


@section('title')
	View all Order Status
@endsection

@section('content')
	<h1 id="user">Order Status for All of {{ Auth::user()->name }}'s Oils</h1>

	@foreach($orders as $order)
		<h2>{{ $order->title }}</h2>
	@endforeach

@endsection
