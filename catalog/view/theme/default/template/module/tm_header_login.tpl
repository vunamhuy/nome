<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
    <div class="tm-login-form">
        <label class="control-label" for="input-email"></label>
        <input type="text" name="email" value="<?php echo $email; ?>" placeholder="<?php echo $entry_email; ?>"
               id="input-email" class="form-control"/>
    </div>
    <div class="tm-login-form">
        <label class="control-label" for="input-password"></label>
        <input type="password" name="password" value="<?php echo $password; ?>"
               placeholder="<?php echo $entry_password; ?>" id="input-password" class="form-control"/>
    </div>
    <button type="submit" class="dropdown-btn"><i class="material-design-https"></i><?php echo $button_login; ?></button>
    <?php if ($redirect) { ?>
        <input type="hidden" name="redirect" value="<?php echo $redirect; ?>"/>
    <?php } ?>
</form>
