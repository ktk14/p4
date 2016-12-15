@extends('layouts.master')

@section('title')
    Confirm delete: {{ $oil->name }}
@endsection

@section('content')

    <h1>Confirm Deletion of Essential Oil</h1>
    <form method='POST' action='/oils/{{ $oil->id }}'>

        {{ method_field('DELETE') }}

        {{ csrf_field() }}

        <h2>Are you sure you want to delete <b>{{ $oil->name }}</b>?</h2>

        <button type="submit" class="btn btn-primary" value='Yes'>Yes</button>

    </form>

@endsection
