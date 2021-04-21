@extends('layouts.app')

@section('content')

    {{-- @foreach ($booking as $bookings)
        {{$bookings->booking->event_id}};
    @endforeach --}}

    {{-- <h4>Name: {{Auth::user()->name}}</h4> --}}

    {{-- @foreach ($data as $datas)
        {{$datas->event_id}}

    @endforeach --}}

    <div class="bookings-content">
        @foreach ($bookings as $booking)
            @if($booking->user_id == Auth::user()->id)
                <div class="card-container">
                    <div class="card">
                        <div class="top-line">
                            <h1 class="event-name">{{ $booking->event->name }}</h1>
                            <span>{{ $booking->event->date }}</span>
                        </div>
                        <p>{{ $booking->event->description }}</p> <br>
                        <p>Venue: {{ $booking->event->venue }}</p>
                        <p>Contact Email: {{ $booking->event->email }}</p>
                        <p>Organiser: {{ $booking->event->organiser }}</p>
                        <p>Event Time: {{ $booking->event->time }}</p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    {{-- @foreach($bookings->bookings as $eb)
        <h1>{{$eb->name}}</h1>
    @endforeach --}}



@endsection
