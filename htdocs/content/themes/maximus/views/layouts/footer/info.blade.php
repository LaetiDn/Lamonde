
<div class="info-outer" style="background-color: {{ get_field('footer_bg_color', 'option') }}; background-image: url('{{ get_field('footer_bg_image', 'option')['url'] }}')">

    <div class="info-inner content-ctn">
        <div class="info-top">
            <div class="info-ctn">
                <p class="info"><i class="icon fa fa-map-marker" aria-hidden="true"></i>{{ $contact["adress_" . $lang] }}</p>
                <p class="info"> {{ $contact["town_".$lang] }} ({{ $contact["province"] }}) {{ $contact["postal_code"] }}</p>
                <a href="tel:+1{{ $contact['phone01_href'] }}" class="info phone"><i class="icon fa fa-phone" aria-hidden="true"></i>{{ $contact['phone01'] }}</a> <a href="mailto:{{ $contact["email"] }}" class="info-email"><i class="icon fa fa-envelope" aria-hidden="true"></i>{{ $contact["email"] }}</a>
            </div>
            <div class="info-ctn">
                <p class="info bold"><i class="icon fa fa-clock-o" aria-hidden="true"></i>{{ pll__("opening-hours") }}</p>
                @foreach($contact['opening_list_' . $lang] as $day)
                    <p class="opening-list"><span class="day">{{ $day['day'] }}</span>&nbsp;&nbsp;<span>{{ $day['time'] }}</span></p>
                @endforeach
            </div>
        </div>

        <div class="info-bottom">
            <div class="info-ctn">
                <p class="bold">{{ pll__("follow-us") }} :</p>
                <div class="link-ctn">
                    @if(!empty($social['facebook'])) <a href="{{ $social['facebook'] }}" target="_blank"><i class="icon fa fa-facebook" aria-hidden="true"></i></a>  @endif
                    @if(!empty($social['twitter'])) <a href="{{ $social['twitter'] }}" target="_blank"><i class="icon fa fa-instagram" aria-hidden="true"></i></a>  @endif
                    @if(!empty($social['instagram'])) <a href="{{ $social['instagram'] }}" target="_blank"><i class="icon fa fa-yelp" aria-hidden="true"></i></a> @endif
                    @if(!empty($social['trip_advisor'])) <a href="{{ $social['trip_advisor'] }}" target="_blank"><i class="icon fa fa-tripadvisor" aria-hidden="true"></i></a>  @endif
                    @if(!empty($social['youtube'])) <a href="{{ $social['youtube'] }}" target="_blank"><i class="icon fa fa-youtube" aria-hidden="true"></i></a>  @endif
                </div>
            </div>
            @if(get_field("footer_newsletter_".$lang, "option"))
            <div class="info-ctn">
                <div class="newsletter-ctn">
                    <p class="bold">{!! pll__("_newsletter")  !!}</p>
                    <?php
                    $form = get_field("footer_newsletter_".$lang, "option");
                    echo do_shortcode( ''.$form.'' );
                    ?>
                </div>
            </div>
            @endif
        </div>
    </div>




</div>
