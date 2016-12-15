@extends('layouts.master')

@section('head')
    <link href='/css/eo.css' rel='stylesheet'>
@endsection

@section('title')
    View all Essential Oils
@endsection

@section('content')

    <h1>All the Essential Oils</h1>

    @if(sizeof($oils) == 0)
        You have not added any oils, you can <a href='/oils/create'>add an oil now to begin</a>.
    @else
        <div id='oils' class='cf'>
            @foreach($oils as $oil)

                <section class='book'>
                    <a href='/oils/{{ $oil->id }}'><h2 class='truncate'>{{ $oil->title }}</h2></a>

                    <h3 class='truncate'>{{ $book->author->first_name }} {{ $book->author->last_name }}</h3>

                    <a href='/books/{{ $book->id }}'><img class='cover' src='{{ $book->cover }}' alt='Cover for {{ $book->title }}'></a>

                    <div class='tags'>
                        @foreach($book->tags as $tag)
                            <div class='tag'>{{ $tag->name }}</div>
                        @endforeach
                    </div>

                    <a class='button' href='/books/{{ $book->id }}/edit'><i class='fa fa-pencil'></i> Edit</a>
                    <a class='button' href='/books/{{ $book->id }}'><i class='fa fa-eye'></i> View</a>
                    <a class='button' href='/books/{{ $book->id }}/delete'><i class='fa fa-trash'></i> Delete</a>
                </section>
            @endforeach
        </div>
    @endif

@endsection
