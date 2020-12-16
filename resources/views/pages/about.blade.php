@extends('app')

@section('title', 'About Us | ' .config('app.name'))


@section('content')

<img src="{{ asset('images/Rasmus-lerdorf.jpg') }}" alt="STOURIDGE Logo" style="width:200px;height:200px;border-radius: 50%">

    <p>Built with &hearts; by STOURIDGE.</p>

    <p><a href="{{ route('home') }}">Revenir à la page d'accueil</a></p>

@endsection
    