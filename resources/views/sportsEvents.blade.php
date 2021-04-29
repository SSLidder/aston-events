@extends('layouts.app')

@section('content')

<div class = "Middle">

    {{-- @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif --}}
    
    <div class="sort_by" wire:model="sorting">
        <p>Sort by:</p> 
        <a value='date'>Date</a> |
        <a value='default'>Reset</a> 
    </div>

    <h3 class = "eventsHeaders">Upcoming Sports Events!</h3>

    @foreach ($events as $event)

    <div class="card-container">
        <div class="card">
            <div class="top-line">
                <h1>{{ $event->name }}</h1>
                <span>{{ $event->date }}</span>
            </div>
            <p>{{ $event->description }}</p>
            <div class="right">
                <a href = "{{ route('sportEvent1') }}">View Details</a>
            </div>
        </div>
    </div>



    @endforeach
</div>

@endsection
