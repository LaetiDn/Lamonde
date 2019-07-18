(function($) {
    $(document).ready(function() {

        $('#instruction-main-ctn input').on('click', function () {

            $temp = $(this).select();
            $copy = $temp.select().val();
            document.execCommand('copy');

        });
    });


}(jQuery));

