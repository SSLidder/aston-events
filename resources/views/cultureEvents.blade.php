@extends('layouts.app')

@section('content')

<div class = "Middle">

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <h3 class = "eventsHeaders">Upcoming Culture Events!</h3>

    @foreach ($events as $event)

    <div class="card-container">
        <div class="card">
            <div class="top-line">
                <h1>{{ $event->name }}</h1>
                <span>{{ $event->date }}</span>
            </div>
            <p>{{ $event->description }}</p>
            <div class="right">
                <a href = "{{ route('cultureEvent1') }}">View Details</a>
            </div>
        </div>
    </div>


    {{-- <div class = "table">
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
                <td class = "details"> <a href = "{{ route('sportEvent1') }}">Click here to view details on the event!</a></td>
            </tr>
        </table>
    </div> --}}

    {{-- <div class = "display_events">
        <a class = "event_tags">Event:</a>
        <div class = "sportsEvents"><a>{{ $event->name }} || {{ $event->description }} - </a></div>
        <div class = event_view><a href = "{{ route('sportEvent1') }}">Click here to view more details!</a></div>
    </div> --}}


    @endforeach

    {{-- @foreach ($events as $event)
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
            </div>
        </div> --}}


            {{-- <a href="{{ route('details', ['id' => $event->id])}}" }}>View Details</a> --}}


        {{-- <form method="post" action="{{ action('App\Http\Controllers\BookingsController@update') }}" > --}}
        {{-- <div class = "book_like_buttons">
            <form method="post" action="bookSport">
                @csrf
                <input type="hidden" name="event_id" value="{{$event->id}}">
                <button type="submit">Book</button>
            </form>
            <br>
            <form method="post" action="likeSport">
                @csrf
                <input type="hidden" name="event_id" value="{{$event->id}}">
                <button type="submit">Like</button>
            </form>
        </div>
    <br>
    </ul> --}}

    {{-- @endforeach --}}
</div>

@endsection
