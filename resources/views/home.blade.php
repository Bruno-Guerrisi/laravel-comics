@extends('layouts.main')

@section('main-content')

<section class="main-home background-main-home">

    <div class="container">

        @foreach ($comics as $id => $comic)

        <div class="container-card">

            <a class="get-product" href="{{ route( 'product', [ 'id' => $id ] ) }}">
                <div class="card">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                    <h3>{{ $comic['series'] }}</h3>
                </div>
            </a>

        </div>

        @endforeach

        <div class="button-more">

            <button>Load more</button>
        </div>
    </div>

</section>
@endsection