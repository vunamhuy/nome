<div id="fb-root"></div>

<div class="container">
    <div class="facebook info">
        <!--
        <div class="box-heading">
            <h5><?php echo $heading_title; ?></h5>
        </div>-->
        <div class="box-content">
            <div
                class="fb-page"
                data-href="<?php echo $page_url; ?>"
                data-width="<?php echo $width; ?>"
                data-height="<?php echo $height; ?>"
                data-hide-cover="<?php echo $bg; ?>"
                data-show-facepile="<?php echo $show_facepile; ?>"
                data-show-posts="<?php echo $show_posts; ?>"
        </div>
    </div>
</div>
</div>


<script>
    window.fbAsyncInit = function () {
        var id = '<?php echo $app_id; ?>';
        if (id == '') {
            id = false;
        }
        FB.init({
            appId: id,
            xfbml: true,
            version: 'v2.3'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/<?php echo $language; ?>/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));


    ;
    (function ($) {
        var o = $('.fb-page');

        $(window).load(function () {
            o.css({'display': 'block'})
                .find('span').css({
                    'width': '100%',
                    'display': 'block',
                    'text-align': 'inherit'
                })
                .find('iframe').css({
                    'display': 'inline-block',
                    'position': 'static'
                });
        });

        $(window).on('load resize', function () {
            if (o.parent().width() < o.find('iframe').width()) {
                o.find('iframe').css({
                    'transform': 'scale(' + (o.width() / o.find('iframe').width()) + ')',
                    'transform-origin': '0% 0%'
                })
                    .parent().css({
                        'height': (o.find('iframe').height() * (o.width() / o.find('iframe').width())) + 'px'
                    });
            } else {
                o
                    .find('span').css({
                        'height': 'auto'
                    })
                    .find('iframe').css({
                        'transform': 'none'
                    });
            }
        });
    })(jQuery);
</script>