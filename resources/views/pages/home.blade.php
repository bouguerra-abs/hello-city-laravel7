@extends('layouts.app')


@section('content')
	<img src="{{ asset('images/map.jpg') }}" alt="Tunis Flag" style="width:200px;height:200px;border-radius: 50%" class="mt-12rounded shadow-md h-32">

    <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from tunisia</h1>

    <p class="text-lg text-gray-800">It's currently {{ date('h:i A') }}.</p>

@endsection