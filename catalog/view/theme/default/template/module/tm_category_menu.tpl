<div class="box category col-sm-3">
	<div class="box-heading"><h3><?php echo $heading_title; ?></h3></div>
	<div class="box-content">
		<div class="box-category">
		<ul class="list-unstyled category_menu">
		<?php foreach ($categories as $category) { ?>
		<?php if ($category['children']) { ?>
		<li>
			<a class="children" href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a>
			  <?php foreach (array_chunk($category['children'], ceil(count($category['children']) )) as $children) { ?>
			  <ul>
				<?php foreach ($children as $child) {?>
						<li>
							<b><a href="<?php echo $child['href']; ?>"><?php echo $child['name']; ?></a></b>
								<?php if ($child['subchildren']) { ?>
									<ul>
										<?php foreach ($child['subchildren'] as $subchild) { ?>
											<li><a href="<?php echo $subchild['href']; ?>"><?php echo $subchild['name']; ?></a></li>
										<?php } ?>
									</ul>
								<?php } ?>
								<img src="<?php echo $child['thumb']; ?>" alt="<?php echo $child['name']; ?>" />
						</li>
				<?php } ?>
			  </ul>
			  <?php } ?>
		</li>
		<?php } else { ?>
		<li><a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a></li>
		<?php } ?>
		
		<?php } ?>
		</ul>
	</div>
</div>
</div>

