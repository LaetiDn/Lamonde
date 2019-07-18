<?php

        $mapLoc = get_field("footer_google_map_url","option");
        $long = get_field("footer_longitude","option");
        $lat = get_field("footer_latitude","option");

?>
<div class="map-ctn">
    <div id="map">

        <script>

            function initMap() {

                //var custom_icon = '/content/themes/hvor/dist/images/map-marker.png';

                var customMapType = new google.maps.StyledMapType(
                    <?php echo get_field("footer_google_map_style", "option"); ?>
                , {
                    name: 'Custom Style'
                });
                var customMapTypeId = 'custom_style';


                var target = {lat: parseFloat("<?php echo $lat; ?>"), lng: parseFloat("<?php echo $long; ?>")};
                var map = new google.maps.Map(
                    document.getElementById('map'), {
                        zoom: 16,
                        center: target,
                        disableDefaultUI: true,
                        mapTypeControlOptions: {
                            mapTypeIds: ["roadmap", customMapTypeId]
                        }
                    });
                // The marker, positioned at Uluru
                new google.maps.Marker({
                    map: map,
                    //icon: custom_icon,
                    position: target,
                    animation   : google.maps.Animation.DROP
                });

                //Associate the styled map with the MapTypeId and set it to display.
                // map.mapTypes.set('styled_map', styledMapType);
                // map.setMapTypeId('styled_map');
                map.mapTypes.set(customMapTypeId, customMapType);
                map.setMapTypeId(customMapTypeId)
            }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKValrO9iTaGQjaYOyFF_IDwFWBD6IepQ&callback=initMap">
        </script>


    </div>
    <a href="{{ $mapLoc }}" class="map-link" target="_blank"></a>
</div>


<nav class="bottom-nav">
    <ul class="menu">
        <li class="menu-item"><a href="{{ $mapLoc }}" target="_blank"><i class="icon fa fa-map-marker" aria-hidden="true"></i> {{ pll__('direction') }}</a></li>
        @if(!empty(get_field('footer_cta', 'option')))<li class="menu-item center"><a href="{{ get_field('footer_cta', 'option') }}" @if(get_field('footer_cta_target', 'option')) {{ 'target="_blank"' }} @endif><i class="icon fa fa-bell" aria-hidden="true"></i>{{ icl_get_current_language() == 'fr' ? get_field('footer_cta_label_fr', 'option')  : get_field('footer_cta_label_en', 'option') }}</a></li>@endif
        <li class="menu-item"><a href="tel:+1{{ $contact['phone01'] }}"><i class="icon fa fa-phone" aria-hidden="true"></i> {{ pll__('contact') }}</a></li>
    </ul>
</nav>

@if(!empty(get_field('footer_cta', 'option')))
<div class="book-bottom @if(get_page_template_slug( get_the_ID() ) == "booking" || get_page_template_slug( get_the_ID() ) == "contact") {{ 'hideMe' }} @endif">
    <a href="{{ get_field('footer_cta', 'option') }}" @if(get_field('footer_cta_target', 'option')) {{ 'target="_blank"' }} @endif>{{ icl_get_current_language() == 'fr' ? get_field('footer_cta_label_fr', 'option')  : get_field('footer_cta_label_en', 'option') }}</a>
</div>
@endif