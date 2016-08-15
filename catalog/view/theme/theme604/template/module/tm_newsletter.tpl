<div id="tm-newsletter" class="box newsletter">
    <div class="box-heading"><h3><?php echo $heading_title; ?></h3></div>
    <div class="box-content">
        <?php if ($description){?><p class="newsletter-description"><?php echo $description;?></p><?php }?>
        <form method="post" enctype="multipart/form-data" id="tm-newsletter-form">
            <div class="tm-login-form">
                <label class="control-label" for="input-email"></label>
                <input type="text" name="tm_newsletter_email" value="" placeholder="<?php echo $entry_mail; ?>"
                       id="input-tm-newsletter-email" class="form-control"/>
            </div>
            <span id="tm-newsletter_error" class="newsletter-error"></span>
            <span id="tm-newsletter_success" class="newsletter-success"></span>
            <button type="submit" id="tm-newsletter-button" class="dropdown-btn"><i
                    class="material-design-drafts"></i><?php echo $button_subscribe; ?></button>
        </form>

    </div>
</div>

<script>
    $(document).ready(function () {
        $('#tm-newsletter').submit(function (e) {
            e.preventDefault();
            var email = $("#input-tm-newsletter-email").val();
            var emailRegex = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}$/igm;
            if (emailRegex.test(email)) {
                var dataString = 'tm_newsletter_email=' + email;
                $.ajax({
                    type: "POST",
                    url: "index.php?route=module/tm_newsletter",
                    data: dataString,
                    cache: false,
                    success: function (result) {
                        if (!result){
                            $('#tm-newsletter_success').html('<?php echo $success; ?>').fadeIn(300).delay(4000).fadeOut(300);
                        }else{
                            $('#tm-newsletter_error').html(result).fadeIn(300).delay(4000).fadeOut(300);
                        }
                    }
                });
            } else {
                $('#tm-newsletter_error').html('<?php echo $error_invalid_email; ?>').fadeIn(300).delay(4000).fadeOut(300);
            }
        });
    });
</script>