<section class="section-content block-discover" style="background-color: {{ get_sub_field('bg_color') }}">
    @if(!empty(get_sub_field('logo')))
    <div class="logo-ctn">
        <img src="{{ get_sub_field('logo')['url'] }}" alt="{{ get_sub_field('logo')['alt'] }}" style="width:{{ get_sub_field('logo_width') }}px">
    </div>
    @endif
    @if(!empty(get_sub_field('wysywyg')))
    <div class="content-ctn wysywig-ctn">
        {!! get_sub_field('wysywyg') !!}
    </div>
    @endif

    @if(!empty(get_sub_field('link_left')) || !empty(get_sub_field('link_right')))
    <div class="links-ctn">
        <span class="bold">{{ pll__('discover') }} :</span>
        <div class="link-ctn">
            @if(!empty(get_sub_field('link_left')))
            <a href="{!! get_sub_field('link_left')['url'] !!} ">
                {{ get_sub_field('link_left')["title"] }}
                <i class="icon fa fa-arrow-right" aria-hidden="true"></i>
            </a>
            @endif
            @if(!empty(get_sub_field('link_right')))
            <a href="{{ get_sub_field('link_right')['url'] }}">
                {{ get_sub_field('link_right')["title"] }}
                <i class="icon fa fa-arrow-right" aria-hidden="true"></i>
            </a>
            @endif
        </div>
    </div>
    @endif
</section>


