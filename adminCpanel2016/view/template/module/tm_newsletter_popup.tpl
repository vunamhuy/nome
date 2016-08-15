<?php echo $header; ?><?php echo $column_left; ?>
    <div id="content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="pull-right">
                    <button type="submit" form="form-tm_newsletter_popup" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
                    <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
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
            <?php if ($error_name) { ?>
                <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_name; ?>
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            <?php } ?>
            <?php if ($error_width) { ?>
                <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_width; ?>
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            <?php } ?>
            <?php if ($error_height) { ?>
                <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_height; ?>
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            <?php } ?>
            <?php if ($error_cookie) { ?>
                <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_cookie; ?>
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            <?php } ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h3>
                </div>
                <div class="panel-body">
                    <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-tm_newsletter_popup" class="form-horizontal">
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
                            <label class="col-sm-2 control-label" for="input-image"><?php echo $entry_bg; ?></label>

                            <div class="col-sm-10">
                                <a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img
                                        src="<?php if ($newsletter_popup_bg) {echo $popup_bg;} else {echo $placeholder;} ?>" alt="" title=""
                                        data-placeholder="<?php echo $placeholder; ?>"/></a>
                                <input class="form-control" type="hidden" name="newsletter_popup_bg"
                                       value="<?php echo $newsletter_popup_bg; ?>" id="input-image">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"
                                   for="input-bg-width"><?php echo $entry_bg_width; ?></label>

                            <div class="col-sm-10">

                                <input type="text" name="newsletter_popup_bg_width" id="input-bg-width"
                                       class="form-control"
                                       value="<?php if (isset($newsletter_popup_bg_width)){ echo $newsletter_popup_bg_width; }else{ echo '300';} ?>">
                            </div>
                        </div>

                        <?php ?>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"
                                   for="input-bg-height"><?php echo $entry_bg_height; ?></label>

                            <div class="col-sm-10">

                                <input type="text" name="newsletter_popup_bg_height" id="input-bg-height"
                                       class="form-control"
                                       value="<?php if (isset($newsletter_popup_bg_height)){ echo $newsletter_popup_bg_height; }else{ echo '300';} ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"
                                   for="input-cookie"><span data-toggle="tooltip"
                                                               title="<?php echo $help_cookie; ?>"><?php echo $entry_cookie; ?></span></label>

                            <div class="col-sm-10">

                                <input type="text" name="newsletter_popup_cookie" id="input-cookie"
                                       class="form-control"
                                       value="<?php if (isset($newsletter_popup_cookie)){ echo $newsletter_popup_cookie; }else{ echo '30';} ?>">
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
                                            <label class="col-sm-2 control-label" for="input-title<?php echo $language['language_id']; ?>"><?php echo $entry_title; ?></label>
                                            <div class="col-sm-10">
                                                <input type="text" name="tm_newsletter_popup_description[<?php echo $language['language_id']; ?>][title]" placeholder="<?php echo $entry_title; ?>" id="input-heading<?php echo $language['language_id']; ?>" value="<?php echo isset($tm_newsletter_popup_description[$language['language_id']]['title']) ? $tm_newsletter_popup_description[$language['language_id']]['title'] : ''; ?>" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="input-description<?php echo $language['language_id']; ?>"><?php echo $entry_description; ?></label>
                                            <div class="col-sm-10">
                                                <textarea name="tm_newsletter_popup_description[<?php echo $language['language_id']; ?>][description]" placeholder="<?php echo $entry_description; ?>" id="input-description<?php echo $language['language_id']; ?>" class="form-control"><?php echo isset($tm_newsletter_popup_description[$language['language_id']]['description']) ? $tm_newsletter_popup_description[$language['language_id']]['description'] : ''; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php echo $footer; ?>

<script type="text/javascript">
    $('#language a:first').tab('show');
    </script>