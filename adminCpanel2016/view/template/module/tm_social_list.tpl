<?php echo $header; ?><?php echo $column_left; ?>
    <div id="content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="pull-right">
                    <button type="submit" form="form-tm_social_list" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
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
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h3>
                </div>
                <div class="panel-body">
                    <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-tm_social_list" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-status"><?php echo $entry_status; ?></label>
                            <div class="col-sm-10">
                                <select name="tm_social_list_status" id="input-status" class="form-control">
                                    <?php echo $tm_social_list_status;?>
                                    <?php if ($tm_social_list_status == 1) { ?>
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
                            <label class="col-sm-2 control-label" for="input-youtube"><?php echo $entry_youtube; ?></label>
                            <div class="col-sm-10">
                                <input type="text" name="tm_social_list_youtube" value="<?php if (isset($tm_social_list_youtube)){ echo $tm_social_list_youtube;}else{ echo '';} ?>" placeholder="<?php echo $entry_youtube; ?>" id="input-youtube" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-facebook"><?php echo $entry_facebook; ?></label>
                            <div class="col-sm-10">
                                <input type="text" name="tm_social_list_facebook" value="<?php if (isset($tm_social_list_facebook)){ echo $tm_social_list_facebook;}else{ echo '';} ?>" placeholder="<?php echo $entry_facebook; ?>" id="input-facebook" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-google_plus"><?php echo $entry_google_plus; ?></label>
                            <div class="col-sm-10">
                                <input type="text" name="tm_social_list_google_plus" value="<?php if (isset($tm_social_list_google_plus)){ echo $tm_social_list_google_plus;}else{ echo '';} ?>" placeholder="<?php echo $entry_google_plus; ?>" id="input-google_plus" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-twitter"><?php echo $entry_twitter; ?></label>
                            <div class="col-sm-10">
                                <input type="text" name="tm_social_list_twitter" value="<?php if (isset($tm_social_list_twitter)){ echo $tm_social_list_twitter;}else{ echo '';} ?>" placeholder="<?php echo $entry_twitter; ?>" id="input-twitter" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-pinterest"><?php echo $entry_pinterest; ?></label>
                            <div class="col-sm-10">
                                <input type="text" name="tm_social_list_pinterest" value="<?php if (isset($tm_social_list_pinterest)){ echo $tm_social_list_pinterest;}else{ echo '';} ?>" placeholder="<?php echo $entry_pinterest; ?>" id="input-pinterest" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-instagram"><?php echo $entry_instagram; ?></label>
                            <div class="col-sm-10">
                                <input type="text" name="tm_social_list_instagram" value="<?php if (isset($tm_social_list_instagram)){ echo $tm_social_list_instagram;}else{ echo '';} ?>" placeholder="<?php echo $entry_instagram; ?>" id="input-instagram" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-vimeo"><?php echo $entry_vimeo; ?></label>
                            <div class="col-sm-10">
                                <input type="text" name="tm_social_list_vimeo" value="<?php if (isset($tm_social_list_vimeo)){ echo $tm_social_list_vimeo;}else{ echo '';} ?>" placeholder="<?php echo $entry_vimeo; ?>" id="input-vimeo" class="form-control" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php echo $footer; ?>