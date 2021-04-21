@extends('layouts.app')

@section('content')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<h3 class = "eventsHeaders">Upcoming Event!</h3>

@foreach ($events as $event)
<ul>
    <div class = "position">
        <div class = "display_image">
            <div class = "sportsEvents"><p><img src="{{ $event->img }}" alt="{{ $event->time }}"></p></div>
        </div>
        <div>
            <div class = "display_events">
                <p>Event:</p>
                <div class = "sportsEvents"><p>{{ $event->name }} || {{ $event->description }} </p></div>
            </div>
            <div class = "display_events">
                <p>Organiser:</p>
                <div class = "sportsEvents"><p>{{ $event->organiser }}</p></div>
            </div>
            <div class = "display_events">
                <p>Contact email:</p>
                <div class = "sportsEvents"><p>{{ $event->email }}</p></div>
            </div>
            <div class = "display_events">
                <p>Venue:</p>
                <div class = "sportsEvents"><p>{{ $event->venue }}</p></div>
            </div>
            <div class = "display_events">
                <p>Event Time:</p>
                <div class = "sportsEvents"><p>{{ $event->time }}</p></div>
            </div>
            <div class = "display_events">
                <p>Date:</p>
                <div class = "sportsEvents"><p>{{ $event->date }}</p></div>
            </div>
        </div>
    </div>


        {{-- <a href="{{ route('details', ['id' => $event->id])}}" }}>View Details</a> --}}


    {{-- <form method="post" action="{{ action('App\Http\Controllers\BookingsController@update') }}" > --}}
    <div class = "book_like_buttons">
        <form method="post" action="bookSport">
            @csrf
            <input type="hidden" name="event_id" value="{{$event->id}}">
            <button class="black" type="submit">Book</button>
        </form>
        <br>
        <form method="post" action="likeSport">
            @csrf
            <input type="hidden" name="event_id" value="{{$event->id}}">
            <button class="black" type="submit">Like</button>
        </form>
    </div>
<br>
</ul>

@endforeach

@endsection
