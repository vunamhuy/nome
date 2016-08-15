<script type="text/javascript">
	$(document).ready(function() {
	var myCookie = document.cookie.replace(/(?:(?:^|.*;\s*)accepted\s*\=\s*([^;]*).*$)|^.*$/, "$1");
		if (myCookie != "yes") {
			$('#cookie-consent').show();
			$('#cookie-space').show();
			$('#accept').click(function() {
				document.cookie = "accepted=yes; expires=Thu, 18 Dec 2025 12:00:00 GMT; path=/";
				$('#cookie-space').hide();
				$('#cookie-consent').hide();
			});
		}
	});        
</script>
<div id="cookie-consent">
	<div class="container">
		<div id="cookie-inner">
			<div id="cookie-text">
				<span id="accept"><i class="fa fa-times"></i></span><?php echo $text_cookie; ?>
			</div>
		</div>
	</div>
</div>
