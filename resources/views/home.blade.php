@extends('layouts.main')

@section('main-content')

<section class="main-home background-main-home">

    <div class="container">

        @foreach ($comics as $comic)

        <div class="container-card">

            <div class="card">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                <h3>{{ $comic['title'] }}</h3>
            </div>

        </div>

        @endforeach

        <div class="button-more">

            <button>Load more</button>
        </div>
    </div>

</section>
@endsection