<div class="box_html <?php echo $class; ?>">
	<?php if(!empty($heading_title)){?>
	<h4><?php echo $heading_title; ?></h4>
	<?php } ?>
	<div class="contentHtml">
	<?php echo $html; ?>
	</div>
</div>
<script>
$('.box_html').addClass("changed");
$('.<?php echo $class; ?> h4').click(function(){
	if($(".<?php echo $class; ?> .contentHtml").is(':hidden')==true){
		$(".<?php echo $class; ?> .contentHtml").fadeIn();
		$('.<?php echo $class; ?>').removeClass("changed");
	}else{
		$('.<?php echo $class; ?> .contentHtml').fadeOut();
		$('.<?php echo $class; ?>').addClass("changed");
	}
});
</script>