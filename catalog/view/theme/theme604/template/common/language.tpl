<?php if (count($languages) > 1) { ?>
<div class="box-language">
<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="language">
  <div class="btn-group">
	<span class="dropdown-toggle" data-toggle="dropdown">
	<?php foreach ($languages as $language) { ?>
	<?php if ($language['code'] == $code) { ?>
	<img class="hidden" src="image/flags/<?php echo $language['image']; ?>" alt="<?php echo $language['name']; ?>" title="<?php echo $language['name']; ?>">
	<?php echo $language['code']; ?>
	<?php } ?>
	<?php } ?>
	<span class="hidden-xs hidden-sm hidden-md hidden"><?php echo $text_language; ?></span> </span>
	<ul class="dropdown-menu pull-right">
	  <?php foreach ($languages as $language) { ?>
	  <li><a href="<?php echo $language['code']; ?>"><img class="hidden" src="image/flags/<?php echo $language['image']; ?>" alt="<?php echo $language['name']; ?>" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
	  <?php } ?>
	</ul>
  </div>
  <input type="hidden" name="code" value="" />
  <input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />
</form>
</div>
<?php } ?>
