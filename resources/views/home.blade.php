@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="welcome-container">
        <div class="welcome-content">
            <h1>Welcome to Aston Events, {{Auth::user()->name}}!</h1>
            <p>We will be hosting many events in the future so sign up now to book onto events or show your interest!</p>
        </div>
    </div>
</div>
@endsection
