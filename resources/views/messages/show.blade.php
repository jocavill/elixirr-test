@extends('app')

@section('content')

    <a href="{{ route('messages.index') }}">All messages</a>

    {{ $message }}

@endsection
