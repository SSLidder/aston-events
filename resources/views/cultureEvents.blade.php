@extends('layouts.app')

@section('content')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<h3 class = "eventsHeaders">Upcoming Culture Events!</h3>

@foreach ($events as $event)
{{-- <div class = "display_events">
    <a class = "event_tags">Event:</a>
    <div class = "sportsEvents"><a>{{ $event->name }} || {{ $event->description }} - </a></div>
    <div class = event_view><a href = "{{ route('cultureEvent1') }}">Click here to view more details!</a></div>
</div> --}}
<div class = "table">
    <table>
        <tr>
            <td class = "space_between">Event</td>
            <td class = "space_between">Description</td>
            <td class = 'space_between'>Date</td>
            <td class = "space_between">Details</td>
        </tr>
        <tr>
            <td class = "space_between1">{{ $event->name }}</td>
            <td class = "space_between1">{{ $event->description }}</td>
            <td class = "space_between1">{{ $event->date }}</td>
            <td class = "details"> <a href = "{{ route('cultureEvent1') }}">Click here to view details on the event!</a></td>
        </tr>
    </table>
</div>
@endforeach

@endsection