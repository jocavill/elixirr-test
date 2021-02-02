@extends('app')

@section('content')

    <a href="{{ route('messages.create') }}" class="btn">Send new message</a>

    <style>
        .pointer { cursor: pointer; }
        .not-read { font-weight: bold; }
    </style>

    <table class="table">
        <thead>
        <tr>
            <th>Subject</th>
            <th>Sent at</th>
        </tr>
        </thead>
        <tbody>
        @foreach($messages as $message)
            <tr class="pointer @if(! $message->isRead) not-read @endif" onclick="window.location.href='{{ route('messages.show', $message) }}'">

                <td>{{ $message->subject }}</td>
                <td>{{ $message->sent_at->diffForHumans() }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
