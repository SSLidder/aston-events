@extends('layouts.app')

@section('content')

<div class="sports-events-container">

    <h3 class = "eventsHeaders">Upcoming Event!</h3>

    @foreach ($events as $event)

        <div class="card-container">
            <div class="card">
                <div class="card-content">
                    <div>
                        <img class="sports-img" src="{{ $event->img }}" />
                    </div>
                    <div class="event-details-text">
                        <p>{{ $event->name }}</p>
                        <p>{{ $event->description }}</p>
                        <p>{{ $event->organiser }}</p>
                        <p>{{ $event->email }}</p>
                        <p>{{ $event->venue }}</p>
                        <p>{{ $event->date }}</p>
                        <p>{{ $event->time }}</p>
                        <div class="card-buttons">
                            <form method="post" action="bookSport">
                                @csrf
                                <input type="hidden" name="event_id" value="{{ $event->id }}">
                                <button onClick="succesful()" class="black spacing" type="submit">Book</button>
                            </form>
                            <br>
                            <form method="post" action="likeSport">
                                @csrf
                                <input type="hidden" name="event_id" value="{{ $event->id }}">
                                <button onClick="likeSuccesful()" class="black spacing" type="submit">Like</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endforeach

<script type="text/javascript">
    function succesful() {
        alert("Booking Succesful!");
    }

    function likeSuccesful() {
        alert("Like Succesful!");
    }
</script>

@endsection
