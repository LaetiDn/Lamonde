<div class="footer" style="background-color: {{ get_field('footer_bg_color', 'option') }}; background-image: url('{{ get_field('footer_bg_image', 'option')['url'] }}')">
    @if(!empty(get_field("footer_logo", "option")["url"]))
    <div class="footer__logo logo-ctn">
        <a href="{{ $home_url }}"><img class="logo" src="{{ get_field("footer_logo", "option")["url"]  }}" alt="logo"></a>
    </div>
    @endif

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
                <h3 class="info bold">{{ pll__("_opening-hours") }}</h3>
                <ul class="opening-list">
                @foreach($contact['opening_list_' . $lang] as $day)
                    <li class="opening-list__item">@if($day['day'] != ""){{ $day['day'] }}&nbsp;&nbsp;@endif{{ $day['time'] }}</li>
                @endforeach
                </ul>
            </div>
            <div class="socials">
                <h3 class="socials__title bold mt-small">{{ pll__("_follow-us") }} :</h3>
                <div class="socials__wrapper">
                    @include('components.socials')
                </div>
            </div>
        </div>
    </div>
    <div class="copyrights">
        @if(get_privacy_policy_url())<a href="{{ get_privacy_policy_url() }}">{!! pll__('_policy') !!}</a> <span>|</span> @endif
        <span>© {{ date('Y') }} {{ get_field('copyrights_' . $lang, 'option')}}</span> 
    </div>
    @if(!empty(get_field('footer_cta_' . $lang, 'option')['url']))
    <nav class="bottom-nav">
        <ul class="menu">
            @if(!empty(get_field('footer_cta', 'option')))
            <li class="menu-item center">
                <a href="{{ get_field('footer_cta_' . $lang, 'option')['url'] }}" target="{{ get_field('footer_cta_' . $lang, 'option')['target'] }}">
                    <i class="icon fa fa-bell" aria-hidden="true"></i>{{ get_field('footer_cta_' . $lang, 'option')['title'] }}
                </a>
            </li>@endif
            <li class="menu-item"><a href="tel:+1{{ $contact['phone01'] }}"><i class="icon fa fa-phone" aria-hidden="true"></i> {{ pll__('contact') }}</a></li>
        </ul>
    </nav>
    @endif

    @if(!empty(get_field('footer_cta_' . $lang, 'option')))
    <div class="book-bottom @if(get_page_template_slug( get_the_ID() ) == "booking" || get_page_template_slug( get_the_ID() ) == "contact") {{ 'hideMe' }} @endif">
        <a href="{{ get_field('footer_cta_' . $lang, 'option')['url'] }}" target="{{ get_field('footer_cta_' . $lang, 'option')['target'] }}">{{ get_field('footer_cta_' . $lang, 'option')['title'] }}</a>
    </div>
    @endif
</div>
