@extends('layouts.master')

@section('head')
	<link href='/css/eo.css' rel='stylesheet'>
@endsection

@section('title')
	View all Essential Oils
@endsection

@section('content')

	<h1 id="user">All of {{ Auth::user()->name }}'s Essential Oils</h1>

	@if(sizeof($oils) == 0)
		You have not added any oils, you can <a href='/oils/create'>add an oil now to begin</a>.
	@else
		<div id='oils' class='cf'>
			@foreach($oils as $oil)

				<section class='oil'>
					
					<a href='/oils/{{ $oil->id }}'><h2 class='truncate'>{{ $oil->name }}</h2></a>
					<a href='/oils/{{ $oil->id }}'><img class='bottle' src='{{ $oil->bottle }}' alt='Bottle for {{ $oil->name }}'></a>

					<h3 class='truncate'>Order? {{ $oil->order->title }}</h3>

					<a class='button' href='/oils/{{ $oil->id }}/edit'><i class='fa fa-pencil'></i> Edit</a>
					<a class='button' href='/oils/{{ $oil->id }}'><i class='fa fa-eye'></i> View</a>
					<a class='button' href='/oils/{{ $oil->id }}/delete'><i class='fa fa-trash'></i> Delete</a>

				</section>
			@endforeach
		</div>
	@endif

@endsection
