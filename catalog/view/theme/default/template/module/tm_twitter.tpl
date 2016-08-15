<div class=" col-lg-4">
<div class="twitter soc_info">
	<div class="box-heading">
		<h3><?php echo $heading_title; ?></h3>
	</div>
	<div class="box-content">
		<a class="twitter-timeline" width="<?php echo $width; ?>" height="<?php echo $height; ?>" data-theme="<?php echo $color_scheme; ?>" href="<?php echo $page_url; ?>" data-tweet-limit="<?php echo $tweet_limit; ?>" data-widget-id="<?php echo $widget_id; ?>"></a>
	</div>
</div>
</div>


<script>
window.twttr = (function (d, s, id) {
  var t, js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id; js.src= "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
  return window.twttr || (t = { _e: [], ready: function (f) { t._e.push(f) } });
}(document, "script", "twitter-wjs"));
</script>
