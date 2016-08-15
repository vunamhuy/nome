<div class="<?php echo $name; ?>">
    <?php if ($type == 1) { ?>
    <div id="player"
         class="rd-youtube-bg"
         data-video-id="<?php echo $youtube_url ?>"
         data-mute="<?php echo $muted; ?>"
         data-mobile="<?php echo $mobile; ?>"
        <?php if (isset($youtube_image)) { ?>
            data-image-url="<?php echo $youtube_image; ?>"
        <?php } ?>
         data-start="<?php echo $start; ?>">
    <?php echo $html; ?>
</div>
<?php } else { ?>
    <div class="vide" style="padding: 150px 0;" data-vide-bg="image/<?php echo $local_path ?>",data-vide-options="muted:<?php echo $muted?>">
        <div class="vide_cnt">
        <?php echo $html; ?>
        </div>
    </div>
<?php } ?>
</div>

