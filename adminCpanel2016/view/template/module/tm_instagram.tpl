<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
	<div class="container-fluid">
	  <div class="pull-right">
		<button type="submit" form="form-tm_instagram" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
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
		<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-tm_instagram" class="form-horizontal">
		  <div class="form-group">
			<label class="col-sm-2 control-label" for="input-name"><?php echo $entry_name; ?></label>
			<div class="col-sm-10">
			  <input type="text" name="name" value="<?php echo $name; ?>" placeholder="<?php echo $entry_name; ?>" id="input-name" class="form-control" />
			  <?php if ($error_name) { ?>
			  <div class="text-danger"><?php echo $error_name; ?></div>
			  <?php } ?>
			</div>
		  </div>
			<!--***************************************-->
			<div class="form-group">
				<label class="col-sm-2 control-label" for="get"><?php echo $entry_get; ?></label>
				<div class="col-sm-10">
					<select name="get" id="get" class="form-control">
						<?php if ($get == 'user') { ?>
						<option value="user" selected="selected"><?php echo $text_user; ?></option>
						<option value="tagged"><?php echo $text_tagged; ?></option>
						<?php } else { ?>
						<option value="user"><?php echo $text_user; ?></option>
						<option value="tagged" selected="selected"><?php echo $text_tagged; ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="input-tag_name"><?php echo $entry_tag_name; ?></label>
				<div class="col-sm-10">
					<input type="text" name="tag_name" value="<?php echo $tag_name; ?>" placeholder="<?php echo $entry_tag_name; ?>" id="input-tag_name" class="form-control" />
					<?php if ($error_tag_name) { ?>
					<div class="text-danger"><?php echo $error_tag_name; ?></div>
					<?php } ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="input-clientid"><?php echo $entry_clientid; ?></label>
				<div class="col-sm-10">
				<input type="text" name="clientid" value="<?php echo $clientid; ?>" placeholder="<?php echo $entry_clientid; ?>" id="input-clientid" class="form-control" />
				<?php if ($error_clientid) { ?>
				<div class="text-danger"><?php echo $error_clientid; ?></div>
				<?php } ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="input-user_id"><?php echo $entry_user_id; ?></label>
				<div class="col-sm-10">
				<input type="text" name="user_id" value="<?php echo $user_id; ?>" placeholder="<?php echo $entry_user_id; ?>" id="input-user_id" class="form-control" />
				<?php if ($error_user_id) { ?>
				<div class="text-danger"><?php echo $error_user_id; ?></div>
				<?php } ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="input-accesstoken"><?php echo $entry_accesstoken; ?></label>
				<div class="col-sm-10">
				<input type="text" name="accesstoken" value="<?php echo $accesstoken; ?>" placeholder="<?php echo $entry_accesstoken; ?>" id="input-accesstoken" class="form-control" />
				<?php if ($error_accesstoken) { ?>
				<div class="text-danger"><?php echo $error_accesstoken; ?></div>
				<?php } ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="input-limit"><?php echo $entry_limit; ?></label>
				<div class="col-sm-10">
				<input type="text" name="limit" value="<?php echo $limit; ?>" placeholder="<?php echo $entry_limit; ?>" id="input-limit" class="form-control" />
				<?php if ($error_limit) { ?>
				<div class="text-danger"><?php echo $error_limit; ?></div>
				<?php } ?>
				</div>
			</div>
			<!--***************************************-->
s		  <div class="form-group">
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
		</form>
	  </div>
	</div>
  </div>
</div>
<?php echo $footer; ?>