@extends('layouts.master')

@section('title')
    Confirm Author deletion
@endsection

@section('content')

    <h1>Confirm deletion</h1>
    <form method='POST' action='/authors/{{ $author->id }}'>

        {{ method_field('DELETE') }}

        {{ csrf_field() }}

        <h2>Are you sure you want to delete <em>{{ $author->first_name.' '.$author->last_name }}</em>?</h2>

        <input type='submit' value='Yes'>

    </form>

@endsection
