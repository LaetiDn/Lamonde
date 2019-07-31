@if(is_shop() || is_product() || is_cart() || is_woocommerce() || is_checkout() || is_checkout_pay_page() || is_account_page() || is_edit_account_page() )
    @php
        $disable_hero = true;
    @endphp
@else
    @php
        $disable_hero = false;
    @endphp
@endif
<header id="header">
    @include('layouts.header.main-nav')
    @if( !$disable_hero )
        @include('layouts.header.hero')
    @endif
</header>
