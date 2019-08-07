@if(is_front_page() && get_field('pl_animation', 'option') != 'false')
    @if(get_field('pl_animations', 'option') == 'default')
        @include('page-loader.animations.default')
    @elseif(get_field('pl_animations', 'option') == 'split')
        @include('page-loader.animations.split')
    @else
        {{ '' }}
    @endif
@endif