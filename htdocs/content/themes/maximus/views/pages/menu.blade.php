@extends('master')

@section('main')
    <section id="services-content" class="animate">
        <div class="page-title alignCenter">
            <h1>{{ get_field("menu_title") }}</h1>
        </div>
        <div class="content-rect-text css-animation">
            <div class="wysiwyg-ctn">
                {!! get_field("menu_wysywyg") !!}
            </div>

        </div>
        <div class="service-outer">
            <div class="service-inner default-padding">

                @foreach($services as $service)
                    <div class="service-ctn">
                        <h3 class="service-name">{{ $service->post_title }}</h3>
                        @if(!empty($service->dish_repeater))
                            @foreach($service->dish_repeater as $dish)
                                <div class="plate-ctn">
                                    <div class="top-info">
                                        <p class="dish-name">{{ $dish['dish_name'] }}</p>
                                        <p class="dish-price">{{ $dish['dish_price'] }}</p>
                                    </div>
                                    <div class="bottom-info">
                                        <p class="dish-ingredients">{{ $dish['dish_ingredients'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    @include('templates.custom-template')

@endsection


