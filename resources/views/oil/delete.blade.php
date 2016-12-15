@extends('layouts.master')

@section('title')
    Confirm delete: {{ $oil->name }}
@endsection

@section('content')

    <h1>Confirm Deletion of Oil</h1>
    <form method='POST' action='/oils/{{ $oil->id }}'>

        {{ method_field('DELETE') }}

        {{ csrf_field() }}

        <h2>Are you sure you want to delete <em>{{ $oil->name }}</em>?</h2>

        <input type='submit' value='Yes'>

    </form>

@endsection
