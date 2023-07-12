@extends("layouts.main-layout")

@section("content")

<h1>Movies</h1>



@foreach ($movies as $movie)

<div class="card">
    <div>{{$movie -> title}}</div>
    <div>{{$movie -> original_title}}</div>
    <div>{{$movie -> nationality}}</div>
    <div>{{$movie -> date}}</div>
    <div>{{$movie -> vote}}</div>
</div>

@endforeach



@endsection
