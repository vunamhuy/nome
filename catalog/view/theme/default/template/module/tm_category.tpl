<div class="box category">
	<div class="box-heading"><h3><?php echo $heading_title; ?></h3></div>
	<div class="box-content">
		<div class="box-category">
		<?php if ($categories) {  echo $categories; } ?>
		</div>
	</div>
</div>
<script>
jQuery(document).ready(function(){
jQuery('.box-category .menu').find('li>ul').before('<i class="fa fa-plus"></i>');
  jQuery('.box-category .menu li i').on("click", function(){
   if (jQuery(this).hasClass('fa-minus')) { jQuery(this).removeClass('fa-minus').parent('li').find('> ul').slideToggle(); } 
    else {
     jQuery(this).addClass('fa-minus').parent('li').find('> ul').slideToggle();
    }
  });
});
</script>
