<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
    <div class="page-header">
        <div class="container-fluid">
            <div class="pull-right">
                <button type="submit" form="form-tm_google_map" data-toggle="tooltip"
                        title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
                <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>"
                   class="btn btn-default"><i class="fa fa-reply"></i></a></div>
            <h1><?php echo $heading_title; ?></h1>
            <ul class="breadcrumb">
                <?php foreach ($breadcrumbs as $breadcrumb) { ?>
                <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <?php if ($error_warning) { ?>
        <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
        <?php } ?>

        <?php if ($error_key) { ?>
            <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_key; ?>
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        <?php } ?>
        <?php if ($error_marker_width) { ?>
        <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_marker_width; ?>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
        <?php } ?>
        <?php if ($error_marker_height) { ?>
        <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_marker_height; ?>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
        <?php } ?>
        <?php if ($error_zoom) { ?>
        <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_zoom; ?>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
        <?php } ?>
        <?php if ($error_marker_active) { ?>
        <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_marker_active; ?>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
        <?php } ?>
        <?php if ($error_marker) { ?>
        <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_marker; ?>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
        <?php } ?>
        <?php if ($error_styles) { ?>
        <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_styles; ?>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
        <?php } ?>
        <?php if ($error_geocode) { ?>
        <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_geocode; ?>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
        <?php } ?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h3>
            </div>
            <div class="panel-body">
                <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data"
                      id="form-tm_google_map" class="form-horizontal">

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-name"><?php echo $entry_name; ?></label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="<?php echo $name; ?>" placeholder="<?php echo $entry_name; ?>" id="input-name" class="form-control" />
                            <?php if ($error_name) { ?>
                                <div class="text-danger"><?php echo $error_name; ?></div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-name"><?php echo $entry_key; ?></label>
                        <div class="col-sm-10">
                            <input type="text" name="tm_google_map_key" value="<?php echo $tm_google_map_key; ?>" placeholder="<?php echo $entry_key; ?>" id="input-name" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-status"><?php echo $entry_status; ?></label>

                        <div class="col-sm-10">

                            <select name="status" id="input-status" class="form-control">
                                <?php if ($status) { ?>
                                <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                                <option value="0"><?php echo $text_disabled; ?></option>
                                <?php } else { ?>
                                <option value="1"><?php echo $text_enabled; ?></option>
                                <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-zoom"><span data-toggle="tooltip"
                                                                                     title="<?php echo $help_zoom; ?>"><?php echo $entry_zoom; ?></span></label>

                        <div class="col-sm-10">
                            <input type="text" name="tm_google_map_zoom" id="input-zoom" class="form-control"
                                   value="<?php if ($tm_google_map_zoom){ echo $tm_google_map_zoom; }else{ echo '14';} ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-type"><?php echo $entry_type; ?></label>

                        <div class="col-sm-10">
                            <select name="tm_google_map_type" id="input-type" class="form-control">
                                <?php if ($tm_google_map_type) { ?>
                                <option value="1"
                                <?php if ($tm_google_map_type == 1) { ?> selected="selected" <?php } ?>
                                ><?php echo $text_type_roadmap; ?></option>
                                <option value="2"
                                <?php if ($tm_google_map_type == 2) { ?> selected="selected" <?php } ?>
                                ><?php echo $text_type_land; ?></option>
                                <option value="3"
                                <?php if ($tm_google_map_type == 3) { ?> selected="selected" <?php } ?>
                                ><?php echo $text_type_hybrid; ?></option>
                                <option value="4"
                                <?php if ($tm_google_map_type == 4) { ?> selected="selected" <?php } ?>
                                ><?php echo $text_type_satellite; ?></option>
                                <?php } else { ?>
                                <option value="1" selected="selected"><?php echo $text_type_roadmap; ?></option>
                                <option value="2"><?php echo $text_type_land; ?></option>
                                <option value="3"><?php echo $text_type_hybrid; ?></option>
                                <option value="4"><?php echo $text_type_satellite; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-sensor"><?php echo $entry_sensor; ?></label>

                        <div class="col-sm-10">

                            <select name="tm_google_map_sensor" id="input-sensor" class="form-control">
                                <?php if ($tm_google_map_sensor) { ?>
                                <option value="true" selected="selected"><?php echo $text_true ?></option>
                                <option value="false"><?php echo $text_false; ?></option>
                                <?php } else { ?>
                                <option value="true"><?php echo $text_true ?></option>
                                <option value="false" selected="selected"><?php echo $text_false ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-width"><span data-toggle="tooltip"
                                                                                      title="<?php echo $help_size; ?>"><?php echo $entry_width; ?></span></label>

                        <div class="col-sm-10">

                            <input type="text" name="tm_google_map_width" id="input-width" class="form-control"
                                   value="<?php if ($tm_google_map_width){ echo $tm_google_map_width; }else{ echo '100%';} ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-height"><span data-toggle="tooltip"
                                                                                       title="<?php echo $help_size; ?>"><?php echo $entry_height; ?></span></label>

                        <div class="col-sm-10">

                            <input type="text" name="tm_google_map_height" id="input-height" class="form-control"
                                   value="<?php if ($tm_google_map_height){ echo $tm_google_map_height; }else{ echo '200px';} ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-styles"><span data-toggle="tooltip"
                                                                                       title="<?php echo $help_styles; ?>"><?php echo $entry_styles; ?></span></label>

                        <div class="col-sm-10">

                            <textarea name="tm_google_map_styles" id="input-styles" class="form-control">
                                <?php if ($tm_google_map_styles){ echo $tm_google_map_styles; }else{ echo '';} ?>
                            </textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-disable"><span data-toggle="tooltip"
                                                                                        title="<?php echo $help_disable_ui; ?>"><?php echo $entry_disable_ui; ?></span></label>

                        <div class="col-sm-10">

                            <select name="tm_google_map_disable_ui" id="input-disable" class="form-control">
                                <?php if ($tm_google_map_disable_ui === 'true') { ?>
                                <option value="true" selected="selected"><?php echo $text_true ?></option>
                                <option value="false"><?php echo $text_false; ?></option>
                                <?php } else { ?>
                                <option value="true"><?php echo $text_true ?></option>
                                <option value="false" selected="selected"><?php echo $text_false ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-scrollwheel"><span data-toggle="tooltip"
                                                                                            title="<?php echo $help_scrollwheel; ?>"><?php echo $entry_scrollwheel; ?></span></label>

                        <div class="col-sm-10">
                            <select name="tm_google_map_scrollwheel" id="input-scrollwheel" class="form-control">
                                <?php if ($tm_google_map_scrollwheel === 'true') { ?>
                                <option value="true" selected="selected"><?php echo $text_true ?></option>
                                <option value="false"><?php echo $text_false; ?></option>
                                <?php } else { ?>
                                <option value="true"><?php echo $text_true ?></option>
                                <option value="false" selected="selected"><?php echo $text_false ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-draggable"><span data-toggle="tooltip"
                                                                                          title="<?php echo $help_draggable; ?>"><?php echo $entry_draggable; ?></span></label>

                        <div class="col-sm-10">
                            <select name="tm_google_map_draggable" id="input-draggable" class="form-control">
                                <?php if ($tm_google_map_draggable === 'true') { ?>
                                <option value="true" selected="selected"><?php echo $text_true ?></option>
                                <option value="false"><?php echo $text_false; ?></option>
                                <?php } else { ?>
                                <option value="true"><?php echo $text_true ?></option>
                                <option value="false" selected="selected"><?php echo $text_false ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-image"><?php echo $entry_image; ?></label>

                        <div class="col-sm-10">
                            <a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img
                                        src="<?php if ($tm_google_map_marker) {echo $map_marker;} else {echo $placeholder;} ?>" alt="" title=""
                                        data-placeholder="<?php echo $placeholder; ?>"/></a>
                            <input class="form-control" type="hidden" name="tm_google_map_marker"
                                   value="<?php echo $tm_google_map_marker; ?>" id="input-image">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-active-image"><span data-toggle="tooltip"
                                                                                             title="<?php echo $help_active_image; ?>"><?php echo $entry_active_image; ?></span></label>

                        <div class="col-sm-10">
                            <a href="" id="thumb-image2" data-toggle="image" class="img-thumbnail"><img
                                        src="<?php if ($tm_google_map_marker_active){ echo $map_marker_active;} else {echo $placeholder;} ?>" alt="" title=""
                                        data-placeholder="<?php echo $placeholder; ?>"/></a>
                            <input class="form-control" type="hidden" name="tm_google_map_marker_active"
                                   value="<?php echo $tm_google_map_marker_active; ?>" id="input-active-image">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"
                               for="input-marker-width"><?php echo $entry_marker_width; ?></label>

                        <div class="col-sm-10">

                            <input type="text" name="tm_google_map_marker_width" id="input-marker-width"
                                   class="form-control"
                                   value="<?php if ($tm_google_map_marker_width && is_numeric($tm_google_map_marker_width)){ echo $tm_google_map_marker_width; }else{ echo '';} ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"
                               for="input-marker-height"><?php echo $entry_marker_height; ?></label>

                        <div class="col-sm-10">

                            <input type="text" name="tm_google_map_marker_height" id="input-marker-height"
                                   class="form-control"
                                   value="<?php if ($tm_google_map_marker_height && is_numeric($tm_google_map_marker_height)){ echo $tm_google_map_marker_height; }else{ echo '';} ?>">
                        </div>
                    </div>

                    <div id="markers">

                        <?php $address_count = 0;?>
                        <?php if (isset($tm_google_map_address)) { ?>
                        <?php for ($i = 0; $i <= sizeof($tm_google_map_address) - 1; $i++) { ?>
                        <?php if (!empty($tm_google_map_address[$i]) && !empty($tm_google_map_geocode[$i])){ ?>
                        <div class="marker<?php echo $i?>">
                            <div class="form-group">
                                <h4 class="col-sm-2 text-right">Marker: <?php echo $i+1;?></h4>

                                <div class="col-sm-10 text-right">
                                    <button type="button" onclick="removeMarker(<?php echo $i?>);" data-toggle="tooltip"
                                            title="<?php echo $text_remove_marker; ?>" class="btn btn-danger"><i
                                                class="fa fa-minus-circle"></i></button>
                                </div>

                                <div class="clearfix "></div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label"
                                       for="input-geocode<?php echo $i;?>"><span data-toggle="tooltip"
                                                                                 title="<?php echo $help_geocode; ?>"><?php echo $entry_geocode; ?></span></label>

                                <div class="col-sm-10">
                                    <input name="tm_google_map_geocode[]" id="input-geocode<?php echo $i;?>"
                                           class="form-control" value="<?php echo $tm_google_map_geocode[$i]; ?>">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label"
                                       for="input-address<?php echo $i;?>"><?php echo $entry_address; ?></label>

                                <div class="col-sm-10">
                                    <input name="tm_google_map_address[]" id="input-address<?php echo $i;?>"
                                           class="form-control" value="<?php echo $tm_google_map_address[$i]; ?>">
                                </div>
                            </div>
                        </div>
                        <?php $address_count++ ?>
                        <?php } ?>
                        <?php } ?>

                        <?php } ?>

                    </div>
                        <div class="text-right">
                            <button type="button" onclick="addMarker();" data-toggle="tooltip"
                                    title="<?php echo $text_add_marker; ?>" class="btn btn-primary"><i
                                        class="fa fa-plus-circle"></i></button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var address_count =<?php echo $address_count; ?>;

    function addMarker() {
        html = '<div class="marker' + address_count + '">';


        html += '<div class="form-group">';
        html += '	<h4 class="col-sm-2 text-right">Marker: ' + (address_count + 1) + '</h4>';
        html += '	<div class="col-sm-10 text-right">';
        html += '		  <button type="button" onclick="removeMarker(' + address_count + ');" data-toggle="tooltip" title="<?php echo $text_remove_marker; ?>" class="btn btn-danger">' +
        '<i class="fa fa-minus-circle"></i></button>  ';
        html += '	</div>';
        html += '</div>';


        html += '<div class="form-group required">';
        html += '	<label class="col-sm-2 control-label" for="input-geocode' + address_count + '"><span data-toggle="tooltip" title="<?php echo $help_geocode; ?>"><?php echo $entry_geocode; ?></span></label>';
        html += '	<div class="col-sm-10">';
        html += '		<input name="tm_google_map_geocode[]" id="input-geocode' + address_count + '" class="form-control" value="">   ';
        html += '	</div>';
        html += '</div>';


        html += '<div class="form-group required">';
        html += '	<label class="col-sm-2 control-label" for="input-address' + address_count + '"><?php echo $entry_address; ?></label>';
        html += '	<div class="col-sm-10">';
        html += '		<input name="tm_google_map_address[]" id="input-address' + address_count + '" class="form-control" value="">   ';
        html += '	</div>';
        html += '</div>';
        html += '</div>';

        $('#markers').append(html);
        address_count++;
    }

    function removeMarker(index) {
        var el = '.marker' + index;
        $(el).remove();
        $('.tooltip').remove();
    }
</script>
<?php echo $footer; ?>