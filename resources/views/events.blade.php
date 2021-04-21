@extends('layouts.app')

@section('content')

<div class = "Middle">
    <h1 class = "welcome" style = "color:lightgrey">We have many upcoming events so feel free to have a look!</h1>
    <p class = "welcome" style = "color:lightgrey">To find an event, click on one of the buttons below to view any particular events! If you find one you like, you can like it or book it!</p>
</div>

<div class = "events_buttons">
    <div class = "events_button"><a class = "btn" href="{{route('sportsEvents')}}">Upcoming Sports</a><li></div>

    <div class = "events_button"><a class = "btn" href="{{route('cultureEvents')}}">Upcoming Culture Events</a><li></div>

    <div class = "events_button"><a class = "btn" href="{{route('otherEvents')}}">Upcoming Other Events</a><li></div>
</div>


@endsection
