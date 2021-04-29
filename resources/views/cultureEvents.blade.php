@extends('layouts.app')

@section('content')

<div class = "Middle">



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

    @endforeach

</div>

@endsection
