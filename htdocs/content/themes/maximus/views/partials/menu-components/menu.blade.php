<section id="services-content">
    <div class="page-title">
        <h1>{{ get_field("menu_title") }}</h1>
    </div>
    <div class="content-rect-text">
        {!! get_field("menu_wysywyg") !!}
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
    <div class="img-ctn" style="background-image: url('{{ get_field("menu_image")['url'] }}')">

    </div>
</section>
