@extends('layouts.master')

@section('title')
    {{ $oil->name }}
@endsection

@section('head')
    <link href='/css/eo.css' rel='stylesheet'>
@endsection

@section('content')

    <h1 class='truncate'>{{ $oil->name }}</h1>

	<img class='bottle' src='{{ $oil->bottle }}' alt='Bottle for {{$oil->name}}'>

    <h3 class='truncate'>Order? {{ $oil->order->title }}</h3>

    <a class='button' href='/oils/{{ $oil->id }}/edit'><i class='fa fa-pencil'></i> Edit</a>
    <a class='button' href='/oils/{{ $oil->id }}/delete'><i class='fa fa-trash'></i> Delete</a>

    <br><br>
    <a class='return' href='/oils'>&larr; Return to all essential oils</a>

@endsection
