@extends('layouts.main')

@section('main-content')
    @foreach ($comics as $comic)

        <div class="container-card">

            <div class="card">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                <h3>{{ $comic['title'] }}</h3>
            </div>

        </div>

    @endforeach
@endsection