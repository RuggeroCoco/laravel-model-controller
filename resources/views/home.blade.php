@extends('layouts.app')

@section('content')
    <h1>Home page</h1>
    <ul>
        @foreach ($movies as $movie)
         <li>{{$movie->title}}</li>
        @endforeach
    </ul>
@endsection
