<?php
/**
* @package AccelerateMedia
* @subpackage Accelerate
*/
/*
Template Name: Homepage
*/

get_header(); 
?>
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
          <div id="about" class="orbit">
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
          <div id="homepage">
            <dl class="infos">
              <dt>Spa</dt>
              <dd><span>Get back to where you once belong</span></dd>
            </dl>
          </div>
        </div>
      </div>
      <script type="text/javascript">
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
  <?php get_footer(); ?>