<?php if (empty($show)) { ?>
    <div id="tm-newsletter-popup" class="newsletter-popup-wrap">
        <div class="newsletter-popup" style="<?php if ($popup_bg) { ?>background-image: url(<?php echo $popup_bg;
        } ?>)">

            <div class="box-content">
                <?php if ($logo) { ?>
                    <div class="logo">
                        <img src="<?php echo $logo; ?>" title="<?php echo $name; ?>"
                             alt="<?php echo $name; ?>" class="img-responsive"/>
                    </div>
                <?php } else { ?>
                    <h1 class="logo">
                        <?php echo $name; ?>
                    </h1>
                <?php } ?>
                <h2><?php echo $heading_title; ?></h2>

                <p><?php echo $html; ?></p>

                <form method="post" enctype="multipart/form-data" id="tm-newsletter-popup-form">
                    <div class="tm-login-form">
                        <label class="control-label" for="input-email"></label>
                        <input type="text" name="tm_newsletter_popup_email" value="<?php if ($user_mail) {
                            echo $user_mail;
                        } else {
                            echo '';
                        }; ?>" placeholder="<?php echo $entry_mail; ?>"
                               id="input-tm-newsletter-popup-email" class="form-control"/>
                        <button type="submit" id="tm-newsletter-popup-button" class="newsletter-popup-btn"><i
                                class="material-design-drafts"></i><?php echo $button_subscribe; ?></button>
                        <span id="tm-newsletter-popup_error" class="newsletter-error"></span>
                        <span id="tm-newsletter-popup_success" class="newsletter-success"></span>
                    </div>

                </form>

            </div>
            <button type="button" id="newsletter-popup-close-btn"
                    class="newsletter-popup-close-btn material-design-close47"></button>
        </div>
    </div>

    <script>
        function getCookie(c_name) {
            if (document.cookie.length > 0) {
                c_start = document.cookie.indexOf(c_name + "=");
                if (c_start != -1) {
                    return true;
                }
            }
            return false;
        }


        jQuery(document).ready(function ($) {
            var showIt = getCookie('shownewsletter');
            var m = <?php echo $cookie_time?>;
            var date = new Date();
            date.setTime(date.getTime() + (m * 60 * 1000));
            if (!showIt) {
                $('#tm-newsletter-popup').fadeIn(300);
            }
            document.cookie = 'shownewsletter=true; path=/; expires=' + date.toString();
            $('#newsletter-popup-close-btn').click(function () {
                $('#tm-newsletter-popup').fadeOut(300);
            })
            $('#tm-newsletter-popup').submit(function (e) {
                e.preventDefault();
                var email = $("#input-tm-newsletter-popup-email").val();
                var emailRegex = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}$/igm;
                if (emailRegex.test(email)) {
                    var dataString = 'tm_newsletter_popup_email=' + email;
                    $.ajax({
                        type: "POST",
                        url: "index.php?route=module/tm_newsletter_popup",
                        data: dataString,
                        cache: false,
                        success: function (result) {
                            if (!result) {
                                $('#tm-newsletter-popup_success').html('<?php echo $success; ?>').fadeIn(300).delay(4000).fadeOut(300);
                            } else {
                                $('#tm-newsletter-popup_error').dequeue();
                                $('#tm-newsletter-popup_error').html(result).fadeIn(300).delay(4000).fadeOut(300);
                            }
                        }
                    });
                } else {
                    $('#tm-newsletter-popup_error').html('<?php echo $error_invalid_email; ?>').fadeIn(300).delay(4000).fadeOut(300);
                }
            });


        });
    </script>

<?php } ?>