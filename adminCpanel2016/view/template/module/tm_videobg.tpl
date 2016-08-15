<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
    <div class="page-header">
        <div class="container-fluid">
            <div class="pull-right">
                <button type="submit" form="form-tm_videobg" data-toggle="tooltip" title="<?php echo $button_save; ?>"
                        class="btn btn-primary"><i class="fa fa-save"></i></button>
                <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>"
                   class="btn btn-default"><i class="fa fa-reply"></i></a>
            </div>
            <h1><?php echo $heading_title; ?></h1>
            <ul class="breadcrumb">
                <?php foreach ($breadcrumbs as $breadcrumb) { ?>
                    <li>
                        <a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
                    </li>
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
        <?php if ($error_start) { ?>
            <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_start; ?>
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        <?php } ?>
        <?php if ($error_youtube_url) { ?>
            <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_youtube_url; ?>
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        <?php } ?>
        <?php if ($error_mobile) { ?>
            <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_mobile; ?>
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        <?php } ?>
        <?php if ($error_youtube_image_width) { ?>
            <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_youtube_image_width; ?>
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        <?php } ?>
        <?php if ($error_youtube_image_height) { ?>
            <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_youtube_image_height; ?>
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        <?php } ?>
        <?php if ($error_local_image) { ?>
            <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_local_image; ?>
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        <?php } ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h3>
            </div>
            <div class="panel-body">
                <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-tm_videobg"
                      class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-name"><?php echo $entry_name; ?></label>

                        <div class="col-sm-10">
                            <input type="text" name="name" value="<?php echo $name; ?>"
                                   placeholder="<?php echo $entry_name; ?>" id="input-name" class="form-control"/>
                            <?php if ($error_name) { ?>
                                <div class="text-danger"><?php echo $error_name; ?></div>
                            <?php } ?>
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
                        <label class="col-sm-2 control-label" for="input-type"><?php echo $entry_type; ?></label>

                        <div class="col-sm-10">
                            <select name="type" id="input-type" class="form-control">
                                <?php if ($type == 1) { ?>
                                    <option value="1" selected="selected"><?php echo $text_youtube; ?></option>
                                    <option value="0"><?php echo $text_local; ?></option>
                                <?php } else { ?>
                                    <option value="1"><?php echo $text_youtube; ?></option>
                                    <option value="0" selected="selected"><?php echo $text_local; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div id="youtube-group">
                        <div class="form-group">
                            <label class="col-sm-2 control-label"
                                   for="input-youtube_url"><?php echo $entry_url; ?></label>

                            <div class="col-sm-10">
                                <input type="text" name="youtube_url" value="<?php echo $youtube_url; ?>"
                                       placeholder="<?php echo $entry_url; ?>" id="input-youtube_url"
                                       class="form-control"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-muted"><?php echo $entry_muted; ?></label>

                            <div class="col-sm-10">
                                <select name="muted" id="input-muted" class="form-control">
                                    <?php if ($muted === 'true') { ?>
                                        <option value="true" selected="selected"><?php echo $text_true; ?></option>
                                        <option value="false"><?php echo $text_false; ?></option>
                                    <?php } else { ?>
                                        <option value="true"><?php echo $text_true; ?></option>
                                        <option value="false" selected="selected"><?php echo $text_false; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"
                                   for="input-mobile"><?php echo $entry_mobile; ?></label>

                            <div class="col-sm-10">
                                <select name="mobile" id="input-mobile" class="form-control">
                                    <?php if ($mobile === 'true') { ?>
                                        <option value="true" selected="selected"><?php echo $text_true; ?></option>
                                        <option value="false"><?php echo $text_false; ?></option>
                                    <?php } else { ?>
                                        <option value="true"><?php echo $text_true; ?></option>
                                        <option value="false" selected="selected"><?php echo $text_false; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"
                                   for="input-start"><?php echo $entry_start; ?></label>

                            <div class="col-sm-10">
                                <input type="text" name="start" value="<?php if ($start) {
                                    echo $start;
                                } else {
                                    echo '0';
                                } ?>"
                                       placeholder="<?php echo $entry_start; ?>" id="input-start"
                                       class="form-control"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"
                                   for="input-youtube-image"><?php echo $entry_youtube_image; ?></label>

                            <div class="col-sm-10">
                                <a href="" id="youtube-image" data-toggle="image" class="img-thumbnail"><img
                                        src="<?php if ($youtube_img) {
                                            echo $youtube_img;
                                        } else {
                                            echo $placeholder;
                                        } ?>" alt="" title=""
                                        data-placeholder="<?php echo $placeholder; ?>"/></a>
                                <input class="form-control" type="hidden" name="youtube_image"
                                       value="<?php echo $youtube_image; ?>" id="input-youtube-image">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"
                                   for="input-youtube_image_width"><?php echo $entry_youtube_image_width; ?></label>

                            <div class="col-sm-10">
                                <input type="text" name="youtube_image_width"
                                       value="<?php echo $youtube_image_width; ?>"
                                       placeholder="<?php echo $entry_youtube_image_width; ?>"
                                       id="input-youtube_image_width"
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"
                                   for="input-youtube_image_height"><?php echo $entry_youtube_image_height; ?></label>

                            <div class="col-sm-10">
                                <input type="text" name="youtube_image_height"
                                       value="<?php echo $youtube_image_height; ?>"
                                       placeholder="<?php echo $entry_youtube_image_height; ?>"
                                       id="input-youtube_image_height"
                                       class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div id="local-group">
                        <div class="form-group">
                            <label class="col-sm-2 control-label"
                                   for="input-local-image"><?php echo $entry_local_image; ?></label>

                            <div class="col-sm-10">
                                <a href="" id="local-image" data-toggle="image" class="img-thumbnail"><img
                                        src="<?php if ($local_img) {
                                            echo $local_img;
                                        } else {
                                            echo $placeholder;
                                        } ?>" alt="" title=""
                                        data-placeholder="<?php echo $placeholder; ?>"/></a>
                                <input class="form-control" type="hidden" name="local_image"
                                       value="<?php echo $local_image; ?>" id="input-local-image">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-local_muted"><?php echo $entry_muted; ?></label>

                            <div class="col-sm-10">
                                <select name="local_muted" id="input-local_muted" class="form-control">
                                    <?php if ($local_muted === 'true') { ?>
                                        <option value="true" selected="selected"><?php echo $text_true; ?></option>
                                        <option value="false"><?php echo $text_false; ?></option>
                                    <?php } else { ?>
                                        <option value="true"><?php echo $text_true; ?></option>
                                        <option value="false" selected="selected"><?php echo $text_false; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>





                    </div>

                    <div class="tab-pane">
                        <ul class="nav nav-tabs" id="language">
                            <?php foreach ($languages as $language) { ?>
                                <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="view/image/flags/<?php echo $language['image']; ?>" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
                            <?php } ?>
                        </ul>
                        <div class="tab-content">
                            <?php foreach ($languages as $language) { ?>
                                <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-description<?php echo $language['language_id']; ?>"><?php echo $entry_description; ?></label>
                                        <div class="col-sm-10">
                                            <textarea name="module_description[<?php echo $language['language_id']; ?>][description]" placeholder="<?php echo $entry_description; ?>" id="input-description<?php echo $language['language_id']; ?>" class="form-control"><?php echo isset($module_description[$language['language_id']]['description']) ? $module_description[$language['language_id']]['description'] : ''; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php echo $footer; ?>


<script>
    <?php foreach ($languages as $language) { ?>
    $('#input-description<?php echo $language['language_id']; ?>').summernote({height: 300});
    <?php } ?>
    $('#language a:first').tab('show');
    $(document).ready(function () {
        $('#input-type').find('option').click(function () {
            getSelectedValue();
        });
        getSelectedValue();
    });

    function getSelectedValue() {
        if ($('#input-type').val() == 1) {
            $('#youtube-group').show();
            $('#local-group').hide();
        } else {
            $('#youtube-group').hide();
            $('#local-group').show();
        }
    }
</script>

