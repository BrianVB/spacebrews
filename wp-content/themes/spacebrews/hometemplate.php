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
                <a href="/about-us/"></a>
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
                <a href="/the-spacebrews/"></a>
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
                <a href="/blog/"></a>
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
                <a href="/store/"></a>
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
                <a href="/contact-us/"></a>
                <dl class="infos">
                  <dt>Contact</dt>
                  <dd><span>Phone spacebrews</span></dd>
                </dl>
              </div>
            </div>
          </div>
          <div id="homepage">
            <dl class="infos">
              <dt>Spacebrews</dt>
              <dd><span>Clicking this should launch some viral video or crazy thing we can come up with.</span></dd>
            </dl>
          </div>
        </div>
      </div>
      <script type="text/javascript">
      $(window).load(function(){

        var body = $("body"),
          solarsys = $("#solar-system");

        var nav_map = [];
        nav_map['menu-item-47'] = 'homepage';
        nav_map['menu-item-48'] = 'about';
        nav_map['menu-item-49'] = 'spacebrews';
        nav_map['menu-item-50'] = 'blog';
        nav_map['menu-item-51'] = 'store';
        nav_map['menu-item-52'] = 'contact';

        var init = function() {
          body.removeClass('view-2D opening').addClass("view-3D").queue(function() {
            $(this).removeClass('hide-UI').addClass("set-speed");
            $(this).dequeue();
          });
        };

        $("#main-nav a").hover(function(e) {
          var ref = $(this).parent().attr("id");
          solarsys.removeClass().addClass(nav_map[ref]);
          //$(this).parent().parent().find('a').removeClass('active');
          //$(this).addClass('active');
        });

        $(".planet a").hover(function(e) {
          var ref = $(this).parent().parent().parent().attr("id");
          //console.log(ref);
          //console.log(nav_map[ref]);
          solarsys.removeClass().addClass(ref);
          //$(this).parent().parent().find('a').removeClass('active');
        });        

        init();

      });
      </script>
  <?php get_footer(); ?>