<section id="galerie-content">
    <div class="galerie-outer">
        <div class="galerie-inner default-padding">
            <div class="albums-main-ctn">
                @foreach($albums as $album)
                    <div class="album-ctn" style="background-image: url({{ $album->album_cover['url'] }})">
                        <div class="album-inner-ctn">
                            <a class="full-link {{ $album->post_name }}" href="#" data-albumID="album-{{ $album->ID }}"><span class="album-title">{{ $album->post_title }}</span></a>
                        </div>
                    </div> <!-- END ALBUM -->
                @endforeach
            </div>

        </div>
    </div>

    <div class="album-lightbox-main-ctn lightBox">
        <a class="close-lightbox" href="#"></a>
        <div class="album-lightbox-inner-ctn">
            <div class="close-ctn">
                <a class="close-carrousel" href="#" aria-label="Close (Press escape to close)">
                    <img src="{{ themosis_assets() }}/images/close.svg" alt="close lightbox">
                </a>
            </div>

            <div class="carrousel-main-ctn">
                <div class="arrow arrow-left">
                    <a class="prev-arrow" href="#">
                        <img src="{{ themosis_assets() }}/images/slider-left-yellow-arrow.svg" alt="left arrow - prev photo">
                    </a>
                </div>
                <div class="arrow arrow-right">
                    <a class="next-arrow" href="#">
                        <img src="{{ themosis_assets() }}/images/slider-right-yellow-arrow.svg" alt="right arrow - next photo">
                    </a>
                </div>

                <div class="carrousel-inner-ctn">
                    <?php  $nbPhoto = 0;  ?>
                    @foreach($albums as $album)

                        <div class="photo-ctn album-{{ $album->ID }}">

                            @foreach($album->album_gallery as $i => $photo)

                                <?php
                                $image =  $photo['url'];
                                $photoTitle = $photo['title'];
                                $photoAlt = $photo['alt'];
                                $nbPhoto = $i++ ;
                                $photoIndex = $i;
                                ?>

                                <div class="a-photo <?php echo 'photo-'. $photoIndex ?>">
                                    <div class="photo">
                                        <img class="galery-photo" src="{{ '' }}" data-delaysrc="<?php echo $image; ?>" alt="<?php echo $photoAlt; ?>">
                                    </div>
                                    <div class="photo-desc-ctn">
                                    <span class="carrousel-index">
                                        <span class="photoIndex"><?php echo $photoIndex; ?> /</span>
                                        <span class="photoNb"></span>
                                    </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

</section>
