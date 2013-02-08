<?php
/**
 * @package AccelerateMedia
 * @subpackage Accelerate
 */
?>
	</div>

  
  <div id="main-nav">
    <?php wp_nav_menu( array( 
    	'theme_location' => 'header-menu',
    	'sort_column' => 'menu_order',
    	'container' => false,
    	'fallback_cb' => 'menu_fallback' 
    ) ); ?>
  </div>
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-9709827-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  </script>
	<?php wp_footer(); ?>
  </body>
</html>