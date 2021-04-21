@extends('layouts.app')

@section('content')

<div class = "Middle">
    <div class="events-title-container">
        <h1>We have many upcoming events so feel free to have a look!</h1>
        <p>To find an event, click on one of the buttons below to view any particular events! If you find one you like, you can like it or book it!</p>
    </div>
</div>

<div class="events-buttons-container">
    <div class = "events_buttons">
        <div class = "events_button"><a class = "btn black" href="{{route('sportsEvents')}}">Upcoming Sports</a></div>

        <div class = "events_button"><a class = "btn black" href="{{route('cultureEvents')}}">Upcoming Culture Events</a></div>

        <div class = "events_button"><a class = "btn black" href="{{route('otherEvents')}}">Upcoming Other Events</a></div>
    </div>
</div>

@if(Auth::check())
    <span class="events-msg">Go on, check them out, {{Auth::user()->name}}!</span>
@endif


@endsection
