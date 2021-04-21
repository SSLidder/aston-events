@extends('layouts.app')

@section('content')

    {{-- @foreach ($booking as $bookings)
        {{$bookings->booking->event_id}};   
    @endforeach --}}

    {{-- <h4>Name: {{Auth::user()->name}}</h4> --}}

    {{-- @foreach ($data as $datas)
        {{$datas->event_id}}
        
    @endforeach --}}

    {{-- @foreach ($bookings as $booking)
        <p>{{$booking->event_id}}</p>
    @endforeach --}}

    @foreach($bookings->bookings as $eb)
        <h1>{{$eb->name}}</h1>
    @endforeach

@endsection