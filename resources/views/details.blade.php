@extends('layouts.app')

@section('content')


@foreach ($event as $events)
    <td>{{$events->id}}</td>
@endforeach

    

@endsection