@extends('layouts.master')

@section('title')
    Edit {{ $oil->name }}
@stop

@section('content')

    <h1>Edit {{ $oil->name }} </h1>

    <form method='POST' action='/oils/{{ $oil->id }}'>

        {{ method_field('PUT') }}

        {{ csrf_field() }}

        <input name='id' value='{{$oil->id}}' type='hidden'>

        <div class='form-group'>
            <label>Oil Name:</label>
            <input
            type='text'
            id='name'
            name='name'
            value='{{ old('name', $oil->name) }}'
            >
            <div class='error'>{{ $errors->first('oil') }}</div>
        </div>

        <div class='form-group'>
            <label>Order Status:</label>
            <select name='order_id'>
                @foreach($orders_for_dropdown as $order_id => $order)
                    <option
                    {{ ($order_id == $order->order->id) ? 'SELECTED' : '' }}
                    value='{{ $order_id }}'
                    >{{ $order }}</option>
                @endforeach
            </select>
        </div>

        <div class='form-group'>
            <label>URL of bottle image:</label>
            <input
            type='text'
            id='bottle'
            name='bottle'
            value='{{ old('bottle', $oil->bottle) }}'
            >
            <div class='error'>{{ $errors->first('bottle') }}</div>
        </div>

        <div class='form-instructions'>
            All fields are required
        </div>

        <button type="submit" class="btn btn-primary">Save changes</button>


        <div class='error'>
            @if(count($errors) > 0)
                Please correct the errors above and try again.
            @endif
        </div>

    </form>


@stop
