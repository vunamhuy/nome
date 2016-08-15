<h5><?php echo $text_heading?></h5>
<ul class="social-list list-unstyled">
    <?php if ($youtube) {?>
        <li>
            <a href='<?php echo $youtube;?>'>
                <i class="fa fa-youtube"></i>
                <span><?php echo $text_youtube;?></span>
            </a>
        </li>
    <?php }?>
    <?php if ($facebook) {?>
        <li>
            <a href='<?php echo $facebook;?>'>
                <i class="fa fa-facebook"></i>
                <span><?php echo $text_facebook;?></span>
            </a>
        </li>
    <?php }?>
    <?php if ($google_plus) {?>
        <li>
            <a href='<?php echo $google_plus;?>'>
                <i class="fa fa-google-plus"></i>
                <span><?php echo $text_google_plus;?></span>
            </a>
        </li>
    <?php }?>
    <?php if ($twitter) {?>
        <li>
            <a href='<?php echo $twitter;?>'>
                <i class="fa fa-twitter"></i>
                <span><?php echo $text_twitter;?></span>
            </a>
        </li>
    <?php }?>
    <?php if ($pinterest) {?>
        <li>
            <a href='<?php echo $pinterest;?>'>
                <i class="fa fa-pinterest"></i>
                <span><?php echo $text_pinterest;?></span>
            </a>
        </li>
    <?php }?>
    <?php if ($instagram) {?>
        <li>
            <a href='<?php echo $instagram;?>'>
                <i class="fa fa-instagram"></i>
                <span><?php echo $text_instagram;?></span>
            </a>
        </li>
    <?php }?>
    <?php if ($vimeo) {?>
        <li>
            <a href='<?php echo $vimeo;?>'>
                <i class="fa fa-vimeo-square"></i>
                <span><?php echo $text_vimeo;?></span>
            </a>
        </li>
    <?php }?>
</ul>