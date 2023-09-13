@extends('layouts.main')

@section('title', 'Home')


@section('main')
    <div class="title text-center">
        <h1>The Best Movies</h1>
    </div>
    <div class="row row-cols-2 my-2">
        @forelse ($movies as $movie)
            <div class="col">
                <div class="card my-2">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">Nationality: {{ $movie->nationality }}</p>
                        <p class="card-text">Vote: {{ $movie->vote }}</p>
                    </div>
                </div>
            </div>
        @empty
        @endforelse
    </div>
@endsection
