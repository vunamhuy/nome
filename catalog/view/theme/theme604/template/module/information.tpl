<div class="box information info">
	<div class="box-heading"><h3><?php echo $heading_title; ?></h3></div>
	<div class="box-content">
		<ul>
			<?php foreach ($informations as $information) { ?>
				<li>
					<a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a>
				</li>
			<?php } ?>
			<li>
				<a href="<?php echo $contact; ?>"><?php echo $text_contact; ?></a>
			</li>
			<li>
				<a href="<?php echo $sitemap; ?>"><?php echo $text_sitemap; ?></a>
			</li>
		</ul>
	</div>
</div>