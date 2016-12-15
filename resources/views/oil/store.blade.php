@extends('layouts.master')

@section('title')
    Success!
@stop

@section('content')
    Success! The essential oil {{ $name }} was added!

    <a href='/oils/create'>Add another oil</a>
@stop
