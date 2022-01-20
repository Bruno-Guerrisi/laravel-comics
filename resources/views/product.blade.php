@extends('layouts.main')

@section('main-content')

<section class="main-product">

    <div class="background-main-product">
        
        
    </div>

    <div class="container container-product">

        <div class="left">

            <h2 class="title">
                {{$product['title']}}
            </h2>
            
            <div class="price-avaiable">
                
                <div class="price-left">
                    <span>
                        U.S Price: 
                        <span class="color-price">{{$product['price']}}</span>
                    </span>

                    <span class="avaiable">
                        avaiable
                    </span>
                </div>

                <div class="price-right">
                    <div>
                        Check Availability <i class="fas fa-caret-down freccia-di-cazzu"></i>
                    </div>
                </div>
            </div>

            <p class="description">
                {{$product['description']}}
            </p>
        </div>

        <div class="rigt">
            <span>
                adverteisement
            </span>
            <img src=" {{ asset('images/adv.png') }} " alt="">
        </div>
    </div>

</section>
@endsection