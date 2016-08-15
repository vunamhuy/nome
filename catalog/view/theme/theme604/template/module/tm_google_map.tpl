<div class="map">
    <?php $arr = explode(',',trim($main_geocode),2);?>
    <div id="google-map" class="map_model" data-zoom="<?php echo $zoom?>"
         data-y="<?php if (is_numeric($arr[0])) {echo $arr[0];} ?>"
         data-x="<?php if (is_numeric($arr[1])){echo $arr[1];} ?>"
         data-disable-ui="<?php echo $disable_ui ?>"
         data-scrollwheel="<?php echo $scrollwheel ?>"
         data-draggable="<?php echo $draggable ?>"
         style="height:<?php echo $height;?>; width: <?php echo $width;?>">

    </div>

    <ul class="map_locations">
        <li data-x="<?php if (is_numeric($arr[1])){echo $arr[1];} ?>"
            data-y="<?php if (is_numeric($arr[0])) {echo $arr[0];} ?>">
            <p> <?php echo $main_address ?></p>
        </li>
        <?php if (!empty($address) && !empty($geocode)){ ?>
        <?php for($i = 0; $i < sizeof($address); $i++) { ?>
        <?php if (!empty($address[$i]) && !empty($geocode[$i])) { ?>
        <?php $arr = explode(',',$geocode[$i],2);?>
        <li data-x="<?php if (is_numeric($arr[1])){echo $arr[1];} ?>"
            data-y="<?php if (is_numeric($arr[0])) {echo $arr[0];} ?>">
            <p> <?php echo $address[$i]; ?></p>
        </li>
        <?php } ?>
        <?php } ?>
        <?php } ?>
    </ul>
</div>


<script>
    var tmp =<?php echo $type ?>;
    var marker_path = '<?php echo $marker_image ?>';
    var marker_active_path = '<?php echo $marker_active_image ?>';
    var styles = <?php echo html_entity_decode($styles) ?>;
    var type;
    switch (tmp) {
        case 1:
            type = google.maps.MapTypeId.ROADMAP;
            break;
        case 2:
            type = google.maps.MapTypeId.TERRAIN;
            break;
        case 3:
            type = google.maps.MapTypeId.HYBRID;
            break;
        case 4:
            type = google.maps.MapTypeId.SATELLITE;
            break;
        default:
            type = google.maps.MapTypeId.ROADMAP;
    }
    jQuery(document).ready(function ($) {
        var o = $('#google-map');
        o.googleMap({
            marker: {
                basic: marker_path,
                active: marker_active_path
            },
            type: type,
            styles: styles
        });
    });
</script>
