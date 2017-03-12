@extends('layouts.master')

@section('title')
    <title>Test Page</title>
@endsection

@section('content')

    <h1>This is My Test Page</h1>

    {{-- Example of sending a flash message through from test controller  --}}
    {{-- @if(session()->has('status')) 
        <div class="alert">{{ session('status') }}</div>
    @endif --}}

@if(count($beatles) > 0)

    @foreach($beatles as $beatle)

          {{ $beatle }} <br>

    @endforeach
    
@else

    <h1> Sorry, nothing to show...</h1>

@endif

    @endsection