@extends('app')

{{-- @section('title', 'Hello City') --}}


@section('content')
	<img src="{{ asset('images/map.jpg') }}" alt="Tunis Flag" style="width:200px;height:200px;border-radius: 50%">

    <h1>Hello from tunisia</h1>

    <p>It's currently {{ date('h:i A') }}.</p>

@endsection