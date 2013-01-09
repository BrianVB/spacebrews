<?php
/**
* @package AccelerateMedia
* @subpackage Accelerate
*/
/*
Template Name: Homepage
*/
?>

  <body class="opening hide-UI view-2D zoom-large ">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/spacebrews/style.css" />
    <div id="navbar">
      <h1>Space Craft Brewing Company</h1>
    </div>

    <div id="universe" class="scale-stretched">
      <div id="galaxy">
        <div id="solar-system">
          <div id="mercury" class="orbit">
            <div class="pos">
              <div class="planet">
              </div>
            </div>
          </div>
          <div id="venus" class="orbit">
            <div class="pos">
              <div class="planet">
              </div>
            </div>
          </div>
          <div id="earth" class="orbit">
            <div class="pos">
              <div class="orbit">
                <div class="pos">
                  <div class="moon"></div>
                </div>
              </div>
              <div class="planet">
              </div>
            </div>
          </div>
          <div id="About" class="orbit">
            <div class="pos">
              <div class="planet">
                <dl class="infos">
                  <dt>About</dt>
                  <dd><span>About</span></dd>
                </dl>
              </div>
            </div>
          </div>
          <div id="spacebrews" class="orbit">
            <div class="pos">
              <div class="planet">
                <dl class="infos">
                  <dt>The Spacebrews</dt>
                  <dd><span>The most delicious brews in the universe</span></dd>
                </dl>
              </div>
            </div>
          </div>
          <div id="blog" class="orbit">
            <div class="pos">
              <div class="planet">
                <div class="ring"></div>
                <dl class="infos">
                  <dt>Blog</dt>
                  <dd><span>News</span></dd>
                </dl>
              </div>
            </div>
          </div>
          <div id="store" class="orbit">
            <div class="pos">
              <div class="planet">
                <dl class="infos">
                  <dt>Store</dt>
                  <dd><span>Buy our stuff!</span></dd>
                </dl>
              </div>
            </div>
          </div>
          <div id="contact" class="orbit">
            <div class="pos">
              <div class="planet">
                <dl class="infos">
                  <dt>Contact</dt>
                  <dd><span>Phone spacebrews</span></dd>
                </dl>
              </div>
            </div>
          </div>
          <div id="home">
            <dl class="infos">
              <dt>home</dt>
              <dd><span>Get back to where you once belong</span></dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    
    <div id="data">
      <a class="home" title="Home" href="/">Home</a>
      <a class="about" title="About" href="/about-us/">About</a>
      <a class="spacebrews" title="The Spacebrews" href="/the-spacebrews/">The Spacebrews</a>
      <a class="blog" title="Blog" href="/blog/">Blog</a>
      <a class="store" title="Store" href="/store/">Store</a>
      <a class="contact" title="Contact Us" href="/contact/">Contact</a>
    </div>
  </body>

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