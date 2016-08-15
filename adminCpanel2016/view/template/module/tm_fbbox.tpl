<?php echo $header; ?><?php echo $column_left; ?>
    <div id="content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="pull-right">
                    <button type="submit" form="form-tm_fbbox" data-toggle="tooltip" title="<?php echo $button_save; ?>"
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
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h3>
                </div>
                <div class="panel-body">
                    <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-tm_fbbox"
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
                            <label class="col-sm-2 control-label"
                                   for="input-page_url"><?php echo $entry_page_url; ?></label>

                            <div class="col-sm-10">
                                <input type="text" name="page_url" value="<?php echo $page_url; ?>"
                                       placeholder="<?php echo $entry_page_url; ?>" id="input-page_url"
                                       class="form-control"/>
                                <?php if ($error_page_url) { ?>
                                    <div class="text-danger"><?php echo $error_page_url; ?></div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"
                                   for="input-app_id"><?php echo $entry_app_id; ?></label>

                            <div class="col-sm-10">
                                <input type="text" name="app_id" value="<?php echo $app_id; ?>"
                                       placeholder="<?php echo $entry_app_id; ?>" id="input-app_id"
                                       class="form-control"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"
                                   for="input-width"><?php echo $entry_show_facepile; ?></label>

                            <div class="col-sm-10">
                                <select name="show_facepile" id="show_facepile" class="form-control">
                                    <?php if ($show_facepile == 'true') { ?>
                                        <option value="true" selected="selected"><?php echo $text_yes; ?></option>
                                        <option value="false"><?php echo $text_no; ?></option>
                                    <?php } else { ?>
                                        <option value="true"><?php echo $text_yes; ?></option>
                                        <option value="false" selected="selected"><?php echo $text_no; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-bg"><?php echo $entry_bg; ?></label>

                            <div class="col-sm-10">
                                <select name="bg" id="bg" class="form-control">
                                    <?php if ($bg == 'true') { ?>
                                        <option value="true" selected="selected"><?php echo $text_no; ?></option>
                                        <option value="false"><?php echo $text_yes; ?></option>
                                    <?php } else { ?>
                                        <option value="true"><?php echo $text_no; ?></option>
                                        <option value="false" selected="selected"><?php echo $text_yes; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"
                                   for="input-show_posts"><?php echo $entry_show_posts; ?></label>

                            <div class="col-sm-10">
                                <select name="show_posts" id="show_posts" class="form-control">
                                    <?php if ($show_posts == 'true') { ?>
                                        <option value="true" selected="selected"><?php echo $text_yes; ?></option>
                                        <option value="false"><?php echo $text_no; ?></option>
                                    <?php } else { ?>
                                        <option value="true"><?php echo $text_yes; ?></option>
                                        <option value="false" selected="selected"><?php echo $text_no; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-width"><?php echo $entry_width; ?></label>

                            <div class="col-sm-10">
                                <input type="text" name="width" value="<?php echo $width; ?>"
                                       placeholder="<?php echo $entry_width; ?>" id="input-width" class="form-control"/>
                                <?php if ($error_width) { ?>
                                    <div class="text-danger"><?php echo $error_width; ?></div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"
                                   for="input-height"><?php echo $entry_height; ?></label>

                            <div class="col-sm-10">
                                <input type="text" name="height" value="<?php echo $height; ?>"
                                       placeholder="<?php echo $entry_height; ?>" id="input-height"
                                       class="form-control"/>
                                <?php if ($error_height) { ?>
                                    <div class="text-danger"><?php echo $error_height; ?></div>
                                <?php } ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-language"><?php echo $entry_language; ?></label>

                            <div class="col-sm-10">
                                <select name="language" id="input-language" class="form-control">
                                    <?php if ($language == 'de_DE') { ?>
                                        <option value="de_DE" selected="selected"><?php echo $text_german; ?></option>
                                        <option value="ru_RU"><?php echo $text_russian; ?></option>
                                        <option value="en_US"><?php echo $text_english; ?></option>
                                    <?php } elseif ($language == 'ru_RU') { ?>
                                        <option value="de_DE"><?php echo $text_german; ?></option>
                                        <option value="ru_RU" selected="selected"><?php echo $text_russian; ?></option>
                                        <option value="en_US"><?php echo $text_english; ?></option>
                                    <?php } else { ?>
                                        <option value="de_DE"><?php echo $text_german; ?></option>
                                        <option value="ru_RU"><?php echo $text_russian; ?></option>
                                        <option value="en_US" selected="selected"><?php echo $text_english; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"
                                   for="input-status"><?php echo $entry_status; ?></label>

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
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php echo $footer; ?>