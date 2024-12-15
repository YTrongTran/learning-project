@extends('layouts.main') @section('title', 'Confirm Meeting') @section('content')

@if ($message = Session::get('success'))

<div class="alert alert-success alert-dismissible fade show" role="alert">

  <strong>{{ $message }}</strong>

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>

@endif 

    @if (session('meeting'))
        <div class="container mt-3">
            <div class="card-header">Meeting Details</div>
            <div class="card-body">
                <p><strong>Topic:</strong> {{ session('meeting')['topic'] }}</p>
                <p><strong>Start Time:</strong> {{ \Carbon\Carbon::parse(session('meeting')['start_time'])->format('d M Y, H:i') }}</p>
                <p><strong>Duration:</strong> {{ session('meeting')['duration'] }} minutes</p>
                <p><strong>Join URL:</strong> <a href="{{ session('meeting')['join_url'] }}" target="_blank">Click to join</a></p>
            </div>
        </div>
    @else
        <div class="alert alert-danger mt-3">
            Meeting details are not available.
        </div>
    @endif


@stop
