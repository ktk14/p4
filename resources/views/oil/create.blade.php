@extends('layouts.master')

@section('title')
    Add a new oil
@stop

@section('content')

    <h1>Add a new essential oil</h1>

    <form method='POST' action='/oils'>

        {{ csrf_field() }}

        <div class='form-group'>
            <label>Name:</label>
            <input
            type='text'
            id='name'
            name='name'
            value='{{ old('name') }}'
            >
            <div class='error'>{{ $errors->first('name') }}</div>
        </div>

        <div class='form-group'>
            <label>Order Status:</label>
            <select name='order_id'>
                @foreach($orders_for_dropdown as $order_id => $order)
                    <option
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
            value='{{ old('bottle') }}'
            >
            <div class='error'>{{ $errors->first('bottle') }}</div>
        </div>

        <div class='form-instructions'>
            All fields are required
        </div>

        <button type="submit" class="btn btn-primary">Add Oil</button>

        {{--
        <ul class=''>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
--}}

<div class='error'>
    @if(count($errors) > 0)
        Please correct the errors above and try again.
    @endif
</div>

</form>

@stop
