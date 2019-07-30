<section class="block-iframe">
    <div class="content-ctn">
        <div class="iframe-ctn" style="height :@if(get_sub_field("iframe_height") === ''){{ '100vh' }} @else {{ get_sub_field("iframe_height") }}px @endif">
            <iframe src="{{ get_sub_field("iframe_url") }}" style="width:100%;   border: 0;" frameborder="0"></iframe>
        </div>
    </div>
</section>
