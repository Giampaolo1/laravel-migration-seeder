@extends('layouts.app')

@section('content')
    <ol>
        @foreach($movies as $movie)
            <li>
                <ul>
                  <li><a href="{{ route("movies.show", $movie -> id)}}">{{ $movie->title }}</a></li>
                  <li>{{ $movie->year }}</li>
                </ul>
            </li>
            <br>
        @endforeach
    </ol>
    <a href="{{route('movies.create')}}">CREATE</a>
@endsection
