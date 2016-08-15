<div class="clear"></div>
<div class="box man">
  <div class="box-heading"><span><?php echo $heading_title; ?></span></div>
  <div class="box-content">
	<?php if ($manufacturers) { ?>
	<ul class="info">
	  <?php foreach ($manufacturers as $manufacturer) {   ?>
	  <li><a href="<?php echo $manufacturer['href']; ?>"><?php echo $manufacturer['name']; ?></a></li>
		
		<?php } ?>
	</ul>
	<?php } ?>
	<div class="clear"></div>
  </div>
</div>