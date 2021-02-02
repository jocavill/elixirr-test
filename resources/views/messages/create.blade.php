@extends('app')

@section('content')

    <form action="{{ route('messages.store') }}" method="POST">

        {{ csrf_field() }}

        <input type="text" value="" name="subject">

        <textarea name="body" id="body" cols="30" rows="10"></textarea>

        <button>Send</button>

    </form>

@endsection
