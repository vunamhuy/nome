<div class="box manufacturer">
  <div class="box-heading"><h3><?php echo $heading_title; ?></h3></div>
  <div class="box-content">

	<?php if ($categories) { ?>
	<ul class="info list-unstyled aside_list">
	  <?php foreach ($categories['manufacturer'] as $manufacturer) {   ?>
	  <li><a href="<?php echo $manufacturer['href']; ?>"><?php echo $manufacturer['name']; ?></a></li>
		<?php } ?>
	</ul>
	<?php } ?>
	<div class="clear"></div>
  </div>
</div>