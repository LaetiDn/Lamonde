<?php

        $mapLoc = get_field("footer_google_map_url","option");
        $long = get_field("footer_longitude","option");
        $lat = get_field("footer_latitude","option");

?>
<div class="map-ctn">

    <div id="map">

        <script>

            function initMap() {
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
                map.mapTypes.set(customMapTypeId, customMapType);
                map.setMapTypeId(customMapTypeId)
            }
        </script>

        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key={{ get_field('google_map_key', 'option') }}&callback=initMap">
        </script>

    </div>
    <a href="{{ $mapLoc }}" class="map-link" target="_blank"></a>
</div>
