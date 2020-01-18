@extends('layouts.app')

@section('content')
    <ol>
        @foreach($movies as $movie)
            <li>
                <ul>
                  <li><a href="{{ route("movies.show", $movie -> id)}}">{{ $movie->title }}</a></li>
                  <li>{{ $movie->year }}</li>
                  <li><a href="{{ route("movies.edit", $movie -> id)}}">EDIT</a></li>
                  <li><a href="{{ route("movies.destroy", $movie -> id)}}">DELETE/DESTROY</a></li>
                </ul>
            </li>
            <br>
        @endforeach
    </ol>
    <a href="{{route('movies.create')}}">CREATE</a>
@endsection
