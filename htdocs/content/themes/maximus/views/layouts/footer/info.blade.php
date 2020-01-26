<div class="footer" style="background-color: {{ get_field('footer_bg_color', 'option') }}; background-image: url('{{ get_field('footer_bg_image', 'option')['url'] }}')">
    <div class="footer__logo logo-ctn">
        <a href="{{ $home_url }}"><img class="logo" src="{{ get_field("footer_logo", "option")["url"]  }}" alt="logo"></a>
    </div>

    <div class="footer__info content default-padding">
        <div class="footer__info-container">
            <a class="info" href="{{ get_field('footer_google_map_url', 'option') }}" target="_blank">
                {{ $contact["adress_" . $lang] }}<br>
                {{ $contact["city_" . $lang] }} ({{ $contact["province"] }}) {{ $contact["postal_code"] }}
            </a>
            <a href="tel:+1{{ $contact['phone01_href'] }}" class="info phone">{{ $contact['phone01'] }}</a>
            <a href="mailto:{{ $contact["email"] }}" class="info-email">{{ $contact["email"] }}</a>
        </div>
        <div class="footer__info-container">
            <div class="opening">
                <h3 class="info bold">{{ pll__("opening-hours") }}</h3>
                <ul class="opening-list">
                @foreach($contact['opening_list_' . $lang] as $day)
                    <li class="opening-list__item">{{ $day['day'] }}&nbsp;&nbsp;{{ $day['time'] }}</li>
                @endforeach
                </ul>
            </div>
            <div class="socials">
                <h3 class="socials__title bold mt-small">{{ pll__("follow-us") }} :</h3>
                <div class="socials__wrapper">
                    @include('components.socials')
                </div>
            </div>
        </div>

    </div>
</div>
