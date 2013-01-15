<?php
/**
 * @package AccelerateMedia
 * @subpackage Accelerate
 */
?>

    <div id="data">
      <a class="home" title="Home" href="/">Home</a>
      <a class="about" title="About" href="/about-us/">About</a>
      <a class="spacebrews" title="The Spacebrews" href="/the-spacebrews/">The Spacebrews</a>
      <a class="blog" title="Blog" href="/blog/">Blog</a>
      <a class="store" title="Store" href="/store/">Store</a>
      <a class="contact" title="Contact Us" href="/contact/">Contact</a>
    </div>

	<script>
	$(window).load(function(){

		var body = $("body"),
			universe = $("#universe"),
			solarsys = $("#solar-system");

		var init = function() {
			body.removeClass('view-2D opening').addClass("view-3D").delay(2000).queue(function() {
				$(this).removeClass('hide-UI').addClass("set-speed");
				$(this).dequeue();
			});
		};

		$("#data a").hover(function(e) {
			var ref = $(this).attr("class");
			solarsys.removeClass().addClass(ref);
			$(this).parent().find('a').removeClass('active');
			$(this).addClass('active');
		});

		init();

	});
	</script>

	<?php wp_footer(); ?>
  </body>
</html>