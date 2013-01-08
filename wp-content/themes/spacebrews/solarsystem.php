<?php
/**
* @package AccelerateMedia
* @subpackage Accelerate
*/
/*
Template Name: Homepage
*/
?>

  <body class="opening hide-UI view-2D zoom-large data-close controls-close">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <div id="navbar">
      <a id="toggle-data" href="#data"><i class="icon-data"></i>Data</a>
      <h1>3D CSS Solar System</h1>
      <a id="toggle-controls" href="#controls"><i class="icon-controls"></i>Controls</a>
    </div>
    <div id="data">
      <a class="sun" title="sun" href="#sunspeed">Sun</a>
      <a class="mercury" title="mercury" href="#mercuryspeed">Mercury</a>
      <a class="venus" title="venus" href="#venusspeed">Venus</a>
      <a class="earth active" title="earth" href="#earthspeed">Earth</a>
      <a class="mars" title="mars" href="#marsspeed">Mars</a>
      <a class="jupiter" title="jupiter" href="#jupiterspeed">Jupiter</a>
      <a class="saturn" title="saturn" href="#saturnspeed">Saturn</a>
      <a class="uranus" title="uranus" href="#uranusspeed">Uranus</a>
      <a class="neptune" title="neptune" href="#neptunespeed">Neptune</a>
    </div>
    <div id="controls">
      <label class="set-view">
        <input type="checkbox">
      </label>
      <label class="set-zoom">
        <input type="checkbox">
      </label>
      <label>
        <input type="radio" class="set-speed" name="scale" checked>
        <span>Speed</span>
      </label>
      <label>
        <input type="radio" class="set-size" name="scale">
        <span>Size</span>
      </label>
      <label>
        <input type="radio" class="set-distance" name="scale">
        <span>Distance</span>
      </label>
    </div>
    <div id="universe" class="scale-stretched">
      <div id="galaxy">
        <div id="solar-system" class="earth">
          <div id="mercury" class="orbit">
            <div class="pos">
              <div class="planet">
                <dl class="infos">
                  <dt>Mercury</dt>
                  <dd><span></span></dd>
                </dl>
              </div>
            </div>
          </div>
          <div id="venus" class="orbit">
            <div class="pos">
              <div class="planet">
                <dl class="infos">
                  <dt>Venus</dt>
                  <dd><span></span></dd>
                </dl>
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
                <dl class="infos">
                  <dt>Earth</dt>
                  <dd><span></span></dd>
                </dl>
              </div>
            </div>
          </div>
          <div id="mars" class="orbit">
            <div class="pos">
              <div class="planet">
                <dl class="infos">
                  <dt>Mars</dt>
                  <dd><span></span></dd>
                </dl>
              </div>
            </div>
          </div>
          <div id="jupiter" class="orbit">
            <div class="pos">
              <div class="planet">
                <dl class="infos">
                  <dt>Jupiter</dt>
                  <dd><span></span></dd>
                </dl>
              </div>
            </div>
          </div>
          <div id="saturn" class="orbit">
            <div class="pos">
              <div class="planet">
                <div class="ring"></div>
                <dl class="infos">
                  <dt>Saturn</dt>
                  <dd><span></span></dd>
                </dl>
              </div>
            </div>
          </div>
          <div id="uranus" class="orbit">
            <div class="pos">
              <div class="planet">
                <dl class="infos">
                  <dt>Uranus</dt>
                  <dd><span></span></dd>
                </dl>
              </div>
            </div>
          </div>
          <div id="neptune" class="orbit">
            <div class="pos">
              <div class="planet">
                <dl class="infos">
                  <dt>Neptune</dt>
                  <dd><span></span></dd>
                </dl>
              </div>
            </div>
          </div>
          <div id="sun">
            <dl class="infos">
              <dt>Sun</dt>
              <dd><span></span></dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </body>

  <style>
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300);
/*
  Copyright (c) 2012 Julian Garnier
  Licensed under the MIT license
*/
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
  margin: 0;
  padding: 0; }

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
  display: block; }

body {
  line-height: 1; }

ol, ul {
  list-style: none; }

blockquote, q {
  quotes: none; }

blockquote:before, blockquote:after, q:before, q:after {
  content: none; }

table {
  border-collapse: collapse;
  border-spacing: 0; }

* {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  box-sizing: border-box; }

body {
  font-size: 10px;
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  background-color: #08090A; }

#universe {
  z-index: 1;
  position: absolute;
  overflow: hidden;
  width: 100%;
  height: 100%;
  background-position: center 40%;
  background-repeat: no-repeat;
  background-size: cover; }

#galaxy {
  position: relative;
  width: 100%;
  height: 100%;
  /*perspective: 4000;*/ }

#solar-system {
  position: absolute;
  width: 100%;
  height: 100%;
  transform-style: preserve-3d; }

.orbit {
  position: absolute;
  top: 50%;
  left: 50%;
  border: 1px solid rgba(255, 255, 255, 0.2);
  border-radius: 50%;
  transform-style: preserve-3d;
  animation-name: orbit;
  animation-iteration-count: infinite;
  animation-timing-function: linear; }

.orbit .orbit {
  animation-name: suborbit; }

.pos {
  position: absolute;
  top: 50%;
  width: 2em;
  height: 2em;
  margin-top: -1em;
  margin-left: -1em;
  transform-style: preserve-3d;
  animation-name: invert;
  animation-iteration-count: infinite;
  animation-timing-function: linear; }

#sun, .planet, #earth .moon {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  margin-left: -0.5em;
  border-radius: 50%;
  transform-style: preserve-3d; }

#sun {
  background-color: #FB7209;
  background-repeat: no-repeat;
  background-size: cover;
  box-shadow: 0 0 60px rgba(255, 160, 60, 0.4); }

.planet {
  background-color: #202020;
  background-repeat: no-repeat;
  background-size: cover;
  animation-iteration-count: infinite;
  animation-timing-function: linear; }

.ring {
  position: absolute;
  top: 50%;
  left: 50%;
  border-radius: 50%; }

#saturn .ring {
  width: 2em;
  height: 2em;
  margin-top: -1em;
  margin-left: -1em;
  border: 0.3em solid rgba(160, 147, 130, 0.7);
  animation-iteration-count: infinite;
  animation-timing-function: linear; }

#saturn .ring:after {
  border-radius: 50%;
  position: absolute;
  content: '';
  top: 50%;
  left: 50%;
  width: 2.2em;
  height: 2.2em;
  margin-top: -1.1em;
  margin-left: -1.1em;
  border: 0.07em solid rgba(160, 147, 130, 0.5);
  box-sizing: border-box;
  box-sizing: border-box; }

/* --------------------------------------------------------------------------- planets index */
#mercury {
  z-index: 10; }

#venus {
  z-index: 9; }

#earth {
  z-index: 8; }

#moon {
  z-index: 7; }

#mars {
  z-index: 6; }

#jupiter {
  z-index: 5; }

#saturn {
  z-index: 4; }

#uranus {
  z-index: 3; }

#neptune {
  z-index: 2; }

#sun {
  z-index: 1; }

/* --------------------------------------------------------------------------- animations */
@keyframes orbit {
  0% {
    transform: rotateZ(0deg); }

  100% {
    transform: rotateZ(-360deg); } }

@keyframes suborbit {
  0% {
    transform: rotateX(90deg) rotateZ(0deg); }

  100% {
    transform: rotateX(90deg) rotateZ(-360deg); } }

@keyframes invert {
  0% {
    transform: rotateX(-90deg) rotateY(360deg) rotateZ(0deg); }

  100% {
    transform: rotateX(-90deg) rotateY(0deg) rotateZ(0deg); } }

/* --------------------------------------------------------------------------- opening */
.view-3D .opening #sun,
.view-3D .opening .orbit,
.view-3D .opening .pos,
.view-3D .opening .planet,
.view-3D .opening .satelite,
.view-3D .opening .ring {
  transition-duration: 4s; }

#universe.opening #sun {
  box-shadow: 0 0 0 rgba(255, 160, 60, 0); }

/* --------------------------------------------------------------------------- 2D view */
.view-2D.zoom-large #sun {
  transform-style: flat; }

.view-2D.zoom-large .orbit {
  transform-style: flat; }

.view-2D #sun,
.view-2D .ring {
  transform: rotateX(0deg); }

.view-2D .planet,
.view-2D .moon {
  transform: rotateX(90deg); }

/* --------------------------------------------------------------------------- 3D view */
.view-3D.zoom-large #sun {
  transform-style: preserve-3d; }

.view-3D.zoom-large .orbit {
  transform-style: preserve-3d; }

.view-3D #solar-system {
  transform: rotateX(75deg); }

.view-3D #sun {
  transform: rotateX(-90deg); }

.view-3D .ring {
  transform: rotateX(90deg); }

.view-3D .planet,
.view-3D .moon {
  transform: rotateX(0deg); }

/* --------------------------------------------------------------------------- large zoom */
.zoom-large #solar-system {
  width: 100%; }

.zoom-large.view-2D .scale-stretched #solar-system {
  font-size: 26%; }

.zoom-large.view-3D .scale-stretched #solar-system {
  font-size: 62%; }

.zoom-large.view-2D .scale-d #solar-system {
  font-size: 22%; }

.zoom-large.view-3D .scale-d #solar-system {
  font-size: 48%; }

.zoom-large.view-2D .scale-s #solar-system {
  font-size: 7%; }

.zoom-large.view-3D .scale-s #solar-system {
  font-size: 14%; }

/* --------------------------------------------------------------------------- close zoom */
.zoom-close #solar-system {
  width: 200%;
  font-size: 100%; }

.zoom-close .scale-stretched #solar-system {
  margin-left: -100%; }

.zoom-close .scale-d #solar-system {
  margin-left: -106%; }

.zoom-close.view-2D .scale-d #solar-system {
  font-size: 84%; }

.zoom-close.view-3D .scale-d #solar-system {
  font-size: 84%; }

.zoom-close .scale-s #solar-system {
  margin-left: -145%; }

.zoom-close.view-2D .scale-s #solar-system {
  font-size: 40%; }

.zoom-close.view-3D .scale-s #solar-system {
  font-size: 40%; }

.zoom-close .orbit,
.zoom-close .pos,
.zoom-close .planet,
.zoom-close .satelite,
.zoom-close .ring {
  animation-play-state: paused!important;
  animation-duration: 0s!important;
  animation: none!important; }

.zoom-close.view-2D .planet,
.zoom-close.view-2D .moon {
  transform: rotateX(0deg); }

.zoom-close.view-3D .planet {
  transform: rotateX(-90deg); }

.zoom-close.view-3D .moon {
  transform: rotateX(90deg); }

.zoom-close .pos {
  left: 100%!important;
  top: 50%!important; }

/* --------------------------------------------------------------------------- data */
/* --------------------------------------------------------------------------- speed */
/* sideral years */
#mercury .pos,
#mercury .planet,
#mercury.orbit {
  animation-duration: 2.89016s; }

#venus .pos,
#venus .planet,
#venus.orbit {
  animation-duration: 7.38237s; }

#earth .pos,
#earth .planet,
#earth.orbit {
  animation-duration: 12.00021s; }

#earth .orbit .pos,
#earth .orbit {
  animation-duration: 0.89764s; }

#mars .pos,
#mars .planet,
#mars.orbit {
  animation-duration: 22.57017s; }

#jupiter .pos,
#jupiter .planet,
#jupiter.orbit {
  animation-duration: 142.35138s; }

#saturn .pos,
#saturn .planet,
#saturn.orbit,
#saturn .ring {
  animation-duration: 353.36998s; }

#uranus .pos,
#uranus .planet,
#uranus.orbit {
  animation-duration: 1008.20215s; }

#neptune .pos,
#neptune .planet,
#neptune.orbit {
  animation-duration: 1977.49584s; }

/* --------------------------------------------------------------------------- planets sizes */
/* --------------------------------------------------------------------------- stretched sizes */
.scale-stretched #sun {
  font-size: 24em; }

.scale-stretched #mercury .planet {
  font-size: 1.5em; }

.scale-stretched #venus .planet {
  font-size: 3.72em; }

.scale-stretched #earth .planet {
  font-size: 3.92em; }

.scale-stretched #earth .moon {
  font-size: 1.2em; }

.scale-stretched #mars .planet {
  font-size: 2.9em; }

.scale-stretched #jupiter .planet {
  font-size: 12em; }

.scale-stretched #saturn .planet {
  font-size: 10.8em; }

.scale-stretched #uranus .planet {
  font-size: 4.68em; }

.scale-stretched #neptune .planet {
  font-size: 4.9em; }

/* --------------------------------------------------------------------------- scaled sizes */
/*
(planets radius * 2) * ratio
*/
/*$distanceScaleRatio:   0.000075em;*/
/* --------------------------------------------------------------------------- planets distance scale sizes */
.scale-d #sun {
  font-size: 41.73048em; }

.scale-d #mercury .planet {
  font-size: 0.14634em; }

.scale-d #venus .planet {
  font-size: 0.36306em; }

.scale-d #earth .planet {
  font-size: 0.38226em; }

.scale-d #earth .moon {
  font-size: 0.08226em; }

.scale-d #mars .planet {
  font-size: 0.20334em; }

.scale-d #jupiter .planet {
  font-size: 4.19466em; }

.scale-d #saturn .planet {
  font-size: 3.49392em; }

.scale-d #uranus .planet {
  font-size: 1.52172em; }

.scale-d #neptune .planet {
  font-size: 1.47732em; }

/* --------------------------------------------------------------------------- planet size scale sizes */
.scale-s #sun {
  font-size: 417.3048em; }

.scale-s #mercury .planet {
  font-size: 1.4634em; }

.scale-s #venus .planet {
  font-size: 3.6306em; }

.scale-s #earth .planet {
  font-size: 3.8226em; }

.scale-s #earth .moon {
  font-size: 0.8226em; }

.scale-s #mars .planet {
  font-size: 2.0334em; }

.scale-s #jupiter .planet {
  font-size: 41.9466em; }

.scale-s #saturn .planet {
  font-size: 34.9392em; }

.scale-s #uranus .planet {
  font-size: 15.2172em; }

.scale-s #neptune .planet {
  font-size: 14.7732em; }

/* --------------------------------------------------------------------------- stretched orbits */
.scale-stretched #mercury.orbit {
  width: 32em;
  height: 32em;
  margin-top: -16em;
  margin-left: -16em; }

.scale-stretched #venus.orbit {
  width: 40em;
  height: 40em;
  margin-top: -20em;
  margin-left: -20em; }

.scale-stretched #earth.orbit {
  width: 56em;
  height: 56em;
  margin-top: -28em;
  margin-left: -28em; }

.scale-stretched #earth .orbit {
  width: 6em;
  height: 6em;
  margin-top: -3em;
  margin-left: -3em; }

.scale-stretched #mars.orbit {
  width: 72em;
  height: 72em;
  margin-top: -36em;
  margin-left: -36em; }

.scale-stretched #jupiter.orbit {
  width: 100em;
  height: 100em;
  margin-top: -50em;
  margin-left: -50em; }

.scale-stretched #saturn.orbit {
  width: 150em;
  height: 150em;
  margin-top: -75em;
  margin-left: -75em; }

.scale-stretched #uranus.orbit {
  width: 186em;
  height: 186em;
  margin-top: -93em;
  margin-left: -93em; }

.scale-stretched #neptune.orbit {
  width: 210em;
  height: 210em;
  margin-top: -105em;
  margin-left: -105em; }

/* --------------------------------------------------------------------------- scaled orbits */
/* --------------------------------------------------------------------------- distance scale orbits */
.scale-d #mercury.orbit {
  width: 44.74176em;
  height: 44.74176em;
  margin-top: -22.37088em;
  margin-left: -22.37088em; }

.scale-d #venus.orbit {
  width: 47.35737em;
  height: 47.35737em;
  margin-top: -23.67869em;
  margin-left: -23.67869em; }

.scale-d #earth.orbit {
  width: 49.50959em;
  height: 49.50959em;
  margin-top: -24.75479em;
  margin-left: -24.75479em; }

.scale-d #mars.orbit {
  width: 53.58356em;
  height: 53.58356em;
  margin-top: -26.79178em;
  margin-left: -26.79178em; }

.scale-d #jupiter.orbit {
  width: 82.2042em;
  height: 82.2042em;
  margin-top: -41.1021em;
  margin-left: -41.1021em; }

.scale-d #saturn.orbit {
  width: 115.91713em;
  height: 115.91713em;
  margin-top: -57.95857em;
  margin-left: -57.95857em; }

.scale-d #uranus.orbit {
  width: 191.00471em;
  height: 191.00471em;
  margin-top: -95.50235em;
  margin-left: -95.50235em; }

.scale-d #neptune.orbit {
  width: 275.64709em;
  height: 275.64709em;
  margin-top: -137.82355em;
  margin-left: -137.82355em; }

/* Moon */
.scale-d #earth .orbit {
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  margin-left: -0.5em; }

/* --------------------------------------------------------------------------- size scale orbits */
.scale-s #mercury.orbit {
  width: 441.3048em;
  height: 441.3048em;
  margin-top: -220.6524em;
  margin-left: -220.6524em; }

.scale-s #venus.orbit {
  width: 457.3048em;
  height: 457.3048em;
  margin-top: -228.6524em;
  margin-left: -228.6524em; }

.scale-s #earth.orbit {
  width: 473.3048em;
  height: 473.3048em;
  margin-top: -236.6524em;
  margin-left: -236.6524em; }

.scale-s #mars.orbit {
  width: 489.3048em;
  height: 489.3048em;
  margin-top: -244.6524em;
  margin-left: -244.6524em; }

.scale-s #jupiter.orbit {
  width: 561.3048em;
  height: 561.3048em;
  margin-top: -280.6524em;
  margin-left: -280.6524em; }

.scale-s #saturn.orbit {
  width: 705.3048em;
  height: 705.3048em;
  margin-top: -352.6524em;
  margin-left: -352.6524em; }

.scale-s #uranus.orbit {
  width: 817.3048em;
  height: 817.3048em;
  margin-top: -408.6524em;
  margin-left: -408.6524em; }

.scale-s #neptune.orbit {
  width: 881.3048em;
  height: 881.3048em;
  margin-top: -440.6524em;
  margin-left: -440.6524em; }

/* Moon */
.scale-s #earth .orbit {
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  margin-left: -0.5em; }

/* --------------------------------------------------------------------------- text infos data */
/* --------------------------------------------------------------------------- speed */
.set-speed dl.infos dd span:after {
  content: 'Orbit Velocity'; }

.set-speed #sun dl.infos dd:after {
  content: '0 km/h'; }

.set-speed #mercury dl.infos dd:after {
  content: '170,503 km/h'; }

.set-speed #venus dl.infos dd:after {
  content: '126,074 km/h'; }

.set-speed #earth dl.infos dd:after {
  content: '107,218 km/h'; }

.set-speed #mars dl.infos dd:after {
  content: '86,677 km/h'; }

.set-speed #jupiter dl.infos dd:after {
  content: '47,002 km/h'; }

.set-speed #saturn dl.infos dd:after {
  content: '34,701 km/h'; }

.set-speed #uranus dl.infos dd:after {
  content: '24,477 km/h'; }

.set-speed #neptune dl.infos dd:after {
  content: '19,566 km/h'; }

/* --------------------------------------------------------------------------- size */
.set-size dl.infos dd span:after {
  content: 'Equatorial Circumference'; }

.set-size #sun dl.infos dd:after {
  content: '4,370,005 km'; }

.set-size #mercury dl.infos dd:after {
  content: '15,329 km'; }

.set-size #venus dl.infos dd:after {
  content: '38,024 km'; }

.set-size #earth dl.infos dd:after {
  content: '40,030 km'; }

.set-size #mars dl.infos dd:after {
  content: '21,296 km'; }

.set-size #jupiter dl.infos dd:after {
  content: '439,263 km'; }

.set-size #saturn dl.infos dd:after {
  content: '365,882 km'; }

.set-size #uranus dl.infos dd:after {
  content: '159,354 km'; }

.set-size #neptune dl.infos dd:after {
  content: '154,704 km'; }

/* --------------------------------------------------------------------------- distance */
.set-distance dl.infos dd span:after {
  content: 'From Sun'; }

.set-distance #sun dl.infos dd span:after {
  content: 'From Earth'; }

.set-distance #sun dl.infos dd:after {
  content: '149,598,262 km'; }

.set-distance #mercury dl.infos dd:after {
  content: '57,909,227 km'; }

.set-distance #venus dl.infos dd:after {
  content: '108,209,475 km'; }

.set-distance #earth dl.infos dd:after {
  content: '149,598,262 km'; }

.set-distance #mars dl.infos dd:after {
  content: '227,943,824 km'; }

.set-distance #jupiter dl.infos dd:after {
  content: '778,340,821 km'; }

.set-distance #saturn dl.infos dd:after {
  content: '1,426,666,422 km'; }

.set-distance #uranus dl.infos dd:after {
  content: '2,870,658,186 km'; }

.set-distance #neptune dl.infos dd:after {
  content: '4,498,396,441 km'; }

/* --------------------------------------------------------------------------- planets starting position and lighting effect */
/* --------------------------------------------------------------------------- mercury ; pos: Top */
#mercury .pos {
  left: 50%;
  top: -1%; }

#mercury .planet {
  animation-name: shadow-mercury; }

@keyframes shadow-mercury {
  0% {
    box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.5);
    /* TOP */ }

  25% {
    box-shadow: inset 4px 0 2px rgba(0, 0, 0, 0.5);
    /* LEFT */ }

  50% {
    box-shadow: inset 13px -5px 4px rgba(0, 0, 0, 0.5);
    /* BOTTOM */ }

  50.01% {
    box-shadow: inset -13px -5px 4px rgba(0, 0, 0, 0.5);
    /* BOTTOM */ }

  75% {
    box-shadow: inset -4px 0 2px rgba(0, 0, 0, 0.5);
    /* RIGHT */ }

  100% {
    box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.5);
    /* TOP */ } }

.scaled.view-2D #mercury .planet,
.scaled.view-3D #mercury .planet {
  box-shadow: inset -4px 0 2px rgba(0, 0, 0, 0.5);
  /* RIGHT */ }

/* --------------------------------------------------------------------------- venus ; pos: Left */
#venus .pos {
  left: 0;
  top: 50%; }

#venus .planet {
  animation-name: shadow-venus; }

@keyframes shadow-venus {
  0% {
    box-shadow: inset 4px 0 2px rgba(0, 0, 0, 0.5);
    /* LEFT */ }

  25% {
    box-shadow: inset 22px -20px 10px rgba(0, 0, 0, 0.5);
    /* BOTTOM */ }

  25.5% {
    box-shadow: inset -22px -20px 10px rgba(0, 0, 0, 0.5);
    /* BOTTOM */ }

  50% {
    box-shadow: inset -4px 0 2px rgba(0, 0, 0, 0.5);
    /* RIGHT */ }

  75% {
    box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.5);
    /* TOP */ }

  100% {
    box-shadow: inset 4px 0 2px rgba(0, 0, 0, 0.5);
    /* LEFT */ } }

.scaled.view-2D #venus .planet,
.scaled.view-3D #venus .planet {
  box-shadow: inset -4px 0 2px rgba(0, 0, 0, 0.5);
  /* RIGHT */ }

/* --------------------------------------------------------------------------- earth ; pos: Right */
#earth .pos {
  left: 100%;
  top: 50%; }

#earth .planet {
  animation-name: shadow-earth; }

@keyframes shadow-earth {
  0% {
    box-shadow: inset -4px 0 2px rgba(0, 0, 0, 0.5);
    /* RIGHT */ }

  25% {
    box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.5);
    /* TOP */ }

  50% {
    box-shadow: inset 4px 0 2px rgba(0, 0, 0, 0.5);
    /* LEFT */ }

  75% {
    box-shadow: inset 24px -20px 15px rgba(0, 0, 0, 0.5);
    /* BOTTOM */ }

  75.01% {
    box-shadow: inset -24px -20px 15px rgba(0, 0, 0, 0.5);
    /* BOTTOM */ }

  100% {
    box-shadow: inset -4px 0 2px rgba(0, 0, 0, 0.5);
    /* RIGHT */ } }

.scaled.view-2D #earth .planet,
.scaled.view-3D #earth .planet {
  box-shadow: inset -4px 0 2px rgba(0, 0, 0, 0.5);
  /* RIGHT */ }

/* --------------------------------------------------------------------------- moon */
#earth .orbit .pos {
  left: 100%;
  top: 50%; }

/* --------------------------------------------------------------------------- mars ; pos: Bottom */
#mars .pos {
  left: 50%;
  top: 100%; }

#mars .planet {
  animation-name: shadow-mars; }

@keyframes shadow-mars {
  0% {
    box-shadow: inset -18px -10px 10px rgba(0, 0, 0, 0.5);
    /* BOTTOM */ }

  25% {
    box-shadow: inset -4px 0 2px rgba(0, 0, 0, 0.5);
    /* RIGHT */ }

  50% {
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.5);
    /* TOP */ }

  75% {
    box-shadow: inset 4px 0 2px rgba(0, 0, 0, 0.5);
    /* LEFT */ }

  99.99% {
    box-shadow: inset 18px -10px 10px rgba(0, 0, 0, 0.5);
    /* BOTTOM */ }

  100% {
    box-shadow: inset -18px -10px 10px rgba(0, 0, 0, 0.5);
    /* BOTTOM */ } }

.scaled.view-2D #mars .planet,
.scaled.view-3D #mars .planet {
  box-shadow: inset -4px 0 2px rgba(0, 0, 0, 0.5);
  /* RIGHT */ }

/* --------------------------------------------------------------------------- jupiter ; pos: Right */
#jupiter .pos {
  left: 100%;
  top: 50%; }

#jupiter .planet {
  animation-name: shadow-jupiter; }

@keyframes shadow-jupiter {
  0% {
    box-shadow: inset -16px 0 5px rgba(0, 0, 0, 0.5);
    /* RIGHT */ }

  25% {
    box-shadow: inset 0 3px 2px rgba(0, 0, 0, 0.5);
    /* TOP */ }

  50% {
    box-shadow: inset 16px 0 5px rgba(0, 0, 0, 0.5);
    /* LEFT */ }

  75% {
    box-shadow: inset 94px -30px 40px rgba(0, 0, 0, 0.5);
    /* BOTTOM */ }

  75.01% {
    box-shadow: inset -94px -30px 40px rgba(0, 0, 0, 0.5);
    /* BOTTOM */ }

  100% {
    box-shadow: inset -16px 0 5px rgba(0, 0, 0, 0.5);
    /* RIGHT */ } }

.scaled.view-2D #jupiter .planet,
.scaled.view-3D #jupiter .planet {
  box-shadow: inset -16px 0 5px rgba(0, 0, 0, 0.5);
  /* RIGHT */ }

/* --------------------------------------------------------------------------- saturn ; pos: Left */
#saturn .pos {
  left: 0%;
  top: 50%; }

#saturn .planet {
  animation-name: shadow-saturn; }

@keyframes shadow-saturn {
  0% {
    box-shadow: inset 16px 0 5px rgba(0, 0, 0, 0.5);
    /* LEFT */ }

  25% {
    box-shadow: inset 80px -30px 50px rgba(0, 0, 0, 0.5);
    /* BOTTOM */ }

  25.01% {
    box-shadow: inset -94px -30px 40px rgba(0, 0, 0, 0.5);
    /* BOTTOM */ }

  50% {
    box-shadow: inset -16px 0 5px rgba(0, 0, 0, 0.5);
    /* RIGHT */ }

  75% {
    box-shadow: inset -2px 3px 2px rgba(0, 0, 0, 0.5);
    /* TOP */ }

  100% {
    box-shadow: inset 16px 0 5px rgba(0, 0, 0, 0.5);
    /* LEFT */ } }

.scaled.view-2D #saturn .planet,
.scaled.view-3D #saturn .planet {
  box-shadow: inset -16px 0 5px rgba(0, 0, 0, 0.5);
  /* RIGHT */ }

/* --------------------------------------------------------------------------- saturn ring */
/*

#saturn .ring           { animation-name:     shadow-saturn-ring; }

@keyframes 
shadow-saturn-ring{ 0%   { box-shadow: inset -16px  0      4px   rgba(20, 40, 50, 0.45); opacity: .4; }
                  25%    { box-shadow: inset -5px   -30px   12px  rgba(20, 40, 50, 0.3);  opacity: 1; }
                  25.01% { box-shadow: inset 5px    -30px   12px  rgba(20, 40, 50, 0.3);  opacity: 1; }
                  50%    { box-shadow: inset 16px   0      4px   rgba(20, 40, 50, 0.45);  opacity: .4; }
                  75%    { box-shadow: inset 0      30px  50px  rgba(20, 40, 50, 0);  opacity: .3; }
                  100%   { box-shadow: inset -16px  0      4px   rgba(20, 40, 50, 0.45);  opacity: .4; }
                }

.scaled.view-2D #saturn .ring,
.scaled.view-3D #saturn .ring { box-shadow: inset 16px   0      4px   rgba(20, 40, 50, 0.6); }

*/
/* --------------------------------------------------------------------------- uranus ; pos: Left */
#uranus .pos {
  left: 0;
  top: 50%; }

#uranus .planet {
  animation-name: shadow-uranus; }

@keyframes shadow-uranus {
  0% {
    box-shadow: inset 8px 0 5px rgba(0, 0, 0, 0.5);
    /* LEFT */ }

  25% {
    box-shadow: inset 40px -15px 40px rgba(0, 0, 0, 0.5);
    /* BOTTOM */ }

  25.01% {
    box-shadow: inset -40px -15px 40px rgba(0, 0, 0, 0.5);
    /* BOTTOM */ }

  50% {
    box-shadow: inset -8px 0 5px rgba(0, 0, 0, 0.5);
    /* RIGHT */ }

  75% {
    box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.5);
    /* TOP */ }

  100% {
    box-shadow: inset 8px 0 5px rgba(0, 0, 0, 0.5);
    /* LEFT */ } }

.scaled.view-2D #uranus .planet,
.scaled.view-3D #uranus .planet {
  box-shadow: inset -8px 0 5px rgba(0, 0, 0, 0.5);
  /* RIGHT */ }

/* --------------------------------------------------------------------------- neptune ; pos: Top */
#neptune .pos {
  left: 50%;
  top: 0; }

#neptune .planet {
  animation-name: shadow-neptune; }

@keyframes shadow-neptune {
  0% {
    box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.5);
    /* TOP */ }

  25% {
    box-shadow: inset 12px 0 5px rgba(0, 0, 0, 0.5);
    /* LEFT */ }

  50% {
    box-shadow: inset 50px -15px 40px rgba(0, 0, 0, 0.5);
    /* BOTTOM */ }

  50.01% {
    box-shadow: inset -50px -15px 40px rgba(0, 0, 0, 0.5);
    /* BOTTOM */ }

  75% {
    box-shadow: inset -12px 0 5px rgba(0, 0, 0, 0.5);
    /* RIGHT */ }

  100% {
    box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.5);
    /* TOP */ } }

.scaled.view-2D #neptune .planet,
.scaled.view-3D #neptune .planet {
  box-shadow: inset -12px 0 5px rgba(0, 0, 0, 0.5);
  /* RIGHT */ }

/* --------------------------------------------------------------------------- DEBUG 
.pos, 
.planet, 
.orbit,
.ring { animation-duration: 20s!important; }

/* */
/* --------------------------------------------------------------------------- navigation styles */
dl.infos {
  position: absolute;
  display: block;
  opacity: 0;
  width: 100%;
  height: 100%;
  margin-top: -90%;
  margin-left: 90%;
  padding-left: 100%;
  transform-origin: 100% 100%;
  transform-style: preserve-3d;
  transform: rotateX(90deg); }

dl.infos:before {
  position: absolute;
  content: '';
  width: 15px;
  height: 30px;
  left: 15px;
  bottom: 0;
  border-top: 1px solid white;
  border-left: 1px solid white;
  transform-style: preserve-3d;
  transform: skew(-45deg, 0deg);
  box-shadow: inset 1px 1px black; }

dl.infos dt {
  position: absolute;
  left: 50px;
  margin-bottom: 26px;
  bottom: 30px;
  color: #FFF;
  font-size: 14px;
  text-shadow: 1px 1px 2px black; }

dl.infos dd:after {
  position: absolute;
  left: 50px;
  bottom: 30px;
  width: 300px;
  color: #FFF;
  font-size: 22px;
  text-shadow: 1px 1px 2px black; }

dl.infos dd span:after {
  position: absolute;
  left: 50px;
  bottom: 14px;
  width: 300px;
  color: #FFF;
  font-size: 11px;
  text-shadow: 1px 1px 2px black; }

.sun #sun .infos,
.mercury #mercury .infos,
.venus #venus .infos,
.earth #earth .infos,
.mars #mars .infos,
.jupiter #jupiter .infos,
.saturn #saturn .infos,
.uranus #uranus .infos,
.neptune #neptune .infos {
  display: block;
  opacity: 1;
  transform: rotateX(0deg); }

.mercury #mercury.orbit,
.venus #venus.orbit,
.earth #earth.orbit,
.mars #mars.orbit,
.jupiter #jupiter.orbit,
.saturn #saturn.orbit,
.uranus #uranus.orbit,
.neptune #neptune.orbit {
  border: 1px solid rgba(255, 255, 255, 0.8); }

.hide-UI h1,
.hide-UI #data,
.hide-UI dl.infos,
.hide-UI #controls {
  opacity: 0!important;
  margin-top: -30px; }

.hide-UI #data {
  margin-bottom: -30px; }

.hide-UI .orbit {
  border: 1px solid rgba(255, 255, 255, 0.2) !important; }

h1 {
  width: 100%;
  font-weight: 600;
  font-size: 14px;
  text-align: center;
  color: rgba(255, 255, 255, 0.8); }

#navbar, #controls, #data {
  background: rgba(0, 0, 0, 0.4); }

#navbar {
  z-index: 99;
  position: absolute;
  top: 0;
  left: 0;
  padding: 16px;
  width: 100%;
  height: 48px; }

#navbar a, #data a, #controls label {
  color: rgba(255, 255, 255, 0.6);
  display: block;
  position: relative;
  text-decoration: none; }

#navbar a:hover, #data a:hover, #controls label:hover {
  color: #FFF; }

#data a.active {
  color: #0CF; }

#navbar a {
  position: absolute;
  top: 0;
  height: 48px;
  padding: 16px;
  font-size: 14px; }

#toggle-data {
  left: 0; }

#toggle-controls {
  right: 0; }

#data, #controls {
  z-index: 99;
  position: fixed;
  opacity: 1;
  top: 49px;
  padding: 16px; }

.data-close #data {
  left: -100%; }

.data-open #data {
  left: 0px; }

.controls-close #controls {
  right: -100%; }

.controls-open #controls {
  right: 0px; }

#data a {
  margin-bottom: 1px;
  padding: 6px 10px;
  font-size: 18px; }

#controls label {
  opacity: .6;
  height: 24px;
  margin-bottom: 28px; }

#controls label:hover {
  opacity: 1; }

#controls label:before {
  position: absolute;
  display: block;
  width: 20px;
  height: 20px;
  margin-top: 3px;
  text-align: center;
  color: #FFF;
  z-index: 99; }

#controls label span {
  display: block;
  margin-left: 36px;
  padding-top: 4px;
  font-size: 18px;
  color: #FFF; }

#controls input {
  display: block;
  appearance: none; }

#controls input[type="radio"]:before {
  content: '';
  display: block;
  position: absolute;
  width: 22px;
  height: 22px;
  border: 2px solid #FFF;
  border-radius: 16px; }

#controls input:checked[type="radio"]:after {
  content: '';
  display: block;
  top: 3px;
  margin-left: 3px;
  position: absolute;
  width: 20px;
  height: 20px;
  border-radius: 10px;
  background: #FFF;
  z-index: 99; }

#controls input[type="checkbox"]:before {
  content: '';
  display: block;
  position: absolute;
  width: 100px;
  height: 22px;
  border: 2px solid #FFF;
  border-radius: 16px; }

#controls input[type="checkbox"]:after {
  content: '';
  display: block;
  top: 3px;
  position: absolute;
  width: 20px;
  height: 20px;
  border-radius: 10px;
  background: #FFF;
  z-index: 99; }

#controls label.set-view:before {
  font: bold small-caps 11px/20px sans-serif; }

.view-3D #controls label.set-view:before {
  content: '2D';
  margin-left: 82px; }

.view-2D #controls label.set-view:before {
  content: '3D';
  margin-left: 7px; }

.view-3D #controls .set-view input:after {
  margin-left: 3px; }

.view-2D #controls .set-view input:after {
  margin-left: 81px; }

#controls label.set-zoom:before {
  font: normal small-caps 18px/14px sans-serif; }

.zoom-large #controls label.set-zoom:before {
  content: '+';
  margin-left: 82px; }

.zoom-close #controls label.set-zoom:before {
  content: '-';
  margin-left: 7px; }

.zoom-large #controls .set-zoom input:after {
  margin-left: 3px; }

.zoom-close #controls .set-zoom input:after {
  margin-left: 81px; }

/* --------------------------------------------------------------------------- transitions */
.pos {
  transition-property: top, left; }

#solar-system, .orbit,
.planet,
.satelite,
.ring {
  transition-property: width, height, top, left, margin-left, margin-top, webkit-transform; }

#sun, .icon {
  transition-property: width, height, webkit-transform; }

#solar-system,
#sun,
.orbit,
.pos,
.planet,
.satelite,
.ring,
.infos,
.icon {
  transition-duration: .8s;
  transition-timing-function: ease-in-out; }

#solar-system,
#sun,
.planet,
.satelite,
.ring {
  transition-delay: 0s; }

.pos {
  transition-delay: 1s; }

.opening #solar-system,
.opening #sun,
.opening .orbit,
.opening .pos,
.opening .planet,
.opening .satelite,
.opening .ring,
.opening .infos,
.opening h1,
.opening #data,
.opening dl.infos,
.opening #controls {
  transition-duration: 0s;
  transition-delay: 0s; }

.opening .pos {
  transition-delay: 0s; }

h1, #data, #controls {
  transition-property: opacity, margin;
  transition-duration: .8s;
  transition-timing-function: ease-in-out; }

h1 {
  transition-delay: .35s; }

#data {
  transition-delay: .7s; }

#controls {
  transition-delay: 1s; }

/* --------------------------------------------------------------------------- images */
body {
  background-image: url(data:image/png;base64,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); }

#universe {
  background-image: url(data:image/png;base64,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nTqFYp06deoUinXq1KlTKNapU6dOoVinTp06hWKdOnXqFIp16tSpUyjWqVOnTp1CsU6dOnUKxTp16tQpFOvUqVOnUKxTp06dQrFOnTp1CsU6derUKRTr1KlTp1CsU6dOnUKxTp06dQrFOnXq1CkU69SpU6dQrFOnTp1CsU6dOnUKxTp16tQpFOvUqVOnUKxTp06dQrFOnTp1CsU6derUKRTr1KlTp1CsU6dOnUKxTp06dQrFOnXq1CkU69SpU6dQrL8FderUqVMo1qlTp06hWKdOnTqFYp06deoUinXq1KlTKNapU6dOoVinTp06hWKdOnXqFIp16tSpUyjWqVOnTqFYp06dOoVinTp16hSKderUqVMo1qlTp06hWKdOnTqFYp06deoUinXq1KlTKNapU6dOoVinTp06hWKdOnXqFIp16tSpUyjWqVOnTqFYp06dOoVinTp16tQpFOvUqVOnUKxTp06dQrFOnTp1CsU6derUKRTr1KlTp1CsU6dOnUKxTp06dQrFOnXq1CkU69SpU6dQrFOnTp1CsU6dOnUKxTp16tQpFOvUqVOnUKxTp06dQrFOnTp1CsU6derUKRTr1KlTp1CsU6dOnUKxTp06dQrFOnXq1CkU69SpU6dQrFOnTp1CsU6dOnXqFIp16tSpUyjWqVOnTqFYp06dOoVinTp16hSKderUqVMo1qlTp06hWKdOnTqFYp06deoUinXq1KlTKNapU6dOoVinTp06hWKdOnXqFIp16tSpUyjWqVOnTqFYp06dOoVinTp16hSKderUqVMo1qlTp06hWKdOnTqFYp06deoUinXq1KlTKNapU6dOoVinTp06hWKdOnXq1CkU69SpU6dQrFOnTp1CsU6dOnUKxTp16tTpP/8/BI4DQbewen8AAAAASUVORK5CYII=); }

#sun {
  background-image: url(data:image/png;base64,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); }

#mercury .planet {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPBAMAAADJ+Ih5AAAABGdBTUEAALGPC/xhBQAAADBQTFRFqqWjubWzoZyZjoiFqqWiu7e1nZaToZyarqmnAAAAq6Wi2tXSurSxy8bCxL670czJ3zIDEAAAAAp0Uk5TclBQUOvj+xCAAOCI6hkAAACSSURBVAjXAYcAeP8AmZeEbeWHmZAAmTSq7M2kKZAAk2rN7O7M4ZAAdKzf7f/s/nAAjt2+u7/f/YAAXf/7u/3vzlAA6uv/u97d/aAAasv+/93+3GAAz+//3t3+ymAAWr3f/93+7lAAjOzrv73f3oAAdKzLv/3t5XAAk6rM/87qopAAmTbOzOzGKZAAmZeErsWHmZDnbFcFNI0NnwAAAABJRU5ErkJggg==); }

#venus .planet {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAAABGdBTUEAALGPC/xhBQAAAGBQTFRFnHlVuYpjfWdJpX5aqoFcu4xkm3lWjnFQj3JQdmNFhGxMk3RSmXhUqoFcq4JdgGlKr4VelHVSim9OvIxkon1ZvIxkvIxkvIxkvIxkvIxkvIxkvIxkvIxkvIxkAAAAvIxkls4uvQAAACB0Uk5Tm/1srVqO0Ycro9cNHcDU6ezowbzpv8Lgx8zq5dLbAOwHjDEIAAAB2UlEQVQoz12TiZbqMAiG49Zq16TZIAF5/7e8pLXOzMVjPfEr8EPAvE+b7g9fBGO63afvn+aEjxg51ZovJLz0z7/4AQk5FmYWNfLz9RceE2LKQkBCIlkwpWDGE49JsBR1IqkgtfkLhNv4wamdSymZcgIPO5YlbAd+6AFzjoBECSKwZA0lwfUNP/eXiQCIqQoCE2gCssE9FT+OYFoPqru0H9Aima17vc10UInY3HPBijH6iAJLcJO5f3CJCUBDFwCtC6RUDNvd+BNLSlgoJaoAiUplO2+90XYcwXPOFRGlUkvSLGyb4fSRBj5mxlqYmGvV0mpwqzm63Iw5A9TMKaZWt2jw1cgvQypau5TjlGYNjuUHq3Qp55kuLbePtdlFsj5V74E1I83d8DI6BtH7jJK91zuve4PJs6Z2iu+FPO36kteaFTPo61mvzK1XM3HxdGTLgE0W7wnssq3rZN63E2thfOhCjWFV2KtdqG09azMkPn+agErdsLYLffdWSJVXbeW3RBu6Ybgew3Rb2NfK+ily9ER9t2E7R9HMMxChDqo06XbpNk08fgfZdMuiHBVbq65uXV/jrzXouy4swS52CTtc+79L9Ow351yn3wZf/y1R27LrNqxDY9efFfwHiRFWry5LGJMAAAAASUVORK5CYII=); }

#earth .planet {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAAABGdBTUEAALGPC/xhBQAAAGBQTFRFGDRdAyFNIDxkQld5CCZTIztsJD1lAAAArsblO230dJfgP2vUnLbbbovAOF2vN1GERnb0Un/yW3asWH3PeY+uhKfyYXaVjafNT2WNeJ3zv9f0nrzzX4rzkLHzrcjzbZX0L9IPbAAAAAh0Uk5TfSC49Uv+4wC/XoCAAAACEUlEQVQoz12T2WKrMAxECWDC4n1fZOv//7IiaXp760cOtkaj0fT8nHXe1LLEmJd5/fk4feDGGFPeR0U/5G39H290zXohhJUi+czY9gs/lhytsM4JvvPEebJZsccH3zSldDrX6uhw8jMl/+Y33nKWibdQChhTsDRzXdbm5Y1nla1LYxAwGjsChvPmcb7xGrMVrtemQdPB0ltt6C6Z80p4y164CxpqMMcBZdRWey9O2rg9p5VlIS5ttMGCiGFUgn20xoXP6zQrJd2JAKW83q11tF5Cb9zZPE9btPIcI5AmLKXXEfoIASGchLeJ5eTCKNA7GMReu8HR26AGLqnUxFRyF3U7aqFrpQVjXrXBOJGXKUexl5fgPsgzqjpIV2sAztk4ZZ/2gVBqfb8NJH/QwcC5j1P0KTU0UOttKrUHh8Y2qL/9jcUZAsCrJTwOHYyG3so3XrJNJ7U1Xn4UfWiAW1nrPPllmqk4v1lrRQMarQ2QPKonBNmyLlScGg1Ik6C6QG8XbA3P5NlKI6EonGHoA2gY5BwZVqAAReIeyXNlyvJ9DJpWozcPU8hzJFNsvAf6pIySOooDUBA6tRBCP5OUav4OE1NSXHu9nQ+kn9LiklXbTxSJS7fvt1kAx+Wc9H57/Aty9FImms3Or+uSBOPy+LUGc/RkT6KgO0lVY57/LpHKlEnrvacV+LtE7xVkSuW8bL9W8AvOdz8ZXmQqKAAAAABJRU5ErkJggg==); }

#earth .moon {
  background-color: white; }

#mars .planet {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAMAAACelLz8AAAABGdBTUEAALGPC/xhBQAAAGBQTFRFsW89lWA2jVwzsm8+qGo72oVJrW08h1gxlWA15IpMrW09jlw0l2E2nGM3v3ZC3YdK3odKyHtE75BP8JFQ8JFQ8JFQ8JFQ8JFQw3hD8JFQ8JFQ8JFQ8JFQ8JFQ8JFQAAAAe3ooYQAAACB0Uk5Tk0+hrcTz6g7P5tkiYurz49bk79XR3vvm2PH26ezi2QCQ4vSgAAABm0lEQVQoz1VSWXaEMAzLLAw7ZHMSx0vvf8uaTtvX+icQYSRbch/vGrf7ftV0v43fV+59bNP+Oo6jtXAs0/YHWg1o4TxnqyG05bn+QOt0AUIRKWVV39qyvqF1f4VTFSqiZgWuerarz6D7KwyoqkI19k5UFYfjeUHbdJzEkLQS9cLCSELDsX24cVoCVYYMHXsphQk0Aw2v0W17OCv2CPwFIWnSBDAfmzOmSt0KmZhj1ZwERLU5N72GwsyIREwCKZtIsAe/uL3NpapW42ciMTWitXI8g9uDj/aCAEZoaqRHtf8ZmduPFAtW1kz2BWntXQRUo0FhTrVcKxLTZmNbi7Fd0NR8Vhsz5x6jZMHIrJrS3Nx98WAQ5lyJsXdGGxs0eeduS5Brs1+y2dZRe0EBajc3LuaHEKRks8qFIYrC0EZb79KM31qUbCO9l44mJWyXKY9mbMnkJzAeo0Ni/3hb+WynqDGkDJHNa/Okrd8BWJpPag1gHpdO5vL6G5tnC15rRBaI6sNj/Ru25Wjez3E+LTTbvxxaRB/PdtVj+4noJ91nOp3NTB6wAAAAAElFTkSuQmCC); }

#jupiter .planet {
  background-image: url(data:image/png;base64,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); }

#saturn .planet {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAMAAAC5zwKfAAAABGdBTUEAALGPC/xhBQAAAMBQTFRF4tGvn5N8u62TzLufzbyew7OYtKeNtKeOsqWMqZyEuauRuqySvK2TuqyRAAAAvbGZnJB618ao0MCiyrmbuKeLv7Obuq6WoZV+raKKuKyT59Wz1MasyLuj18mtxbmgwradpZqC28ut3s2uzsCnxrWYy76l08ChzLud0L6gu6mO0cOpqp6GtamR08Kj2senxbSX5NGw1cOjyLeZ4c6tzr2fvayQ38yr28mp2Mam3cuqv66S1sSl4tCvxLOWsaWNwrGUWvwQRgAAAA90Uk5T/uAn5LTXY+7LsUOVfRQAUdLj3AAACDFJREFUWMOdmYlC4koQReMCooDIooCKyiIEJCCbgYSQ//+rd2vp7qDj6JsKMoDj4dbSVU3jXf/Nyvli4eJwOLTUDheFYr781z/xvv/VaSnXbk/ZDgI9tOjBoVA6/QdgKXcHa7eVeRBrHQRayP8/YLlYua1UKnds7alSlSh2USz/Hli8fX6+hVUU2m7fOeTBIX8JvDp7enp6FuStU5pF6j8XV78Als8fHx+fyJ4d1TINlO/gfqH8E/Dq7PX18fXxUakMfbbemxSBpxH9IvITsPRqjJEq1Ub0rm2Z6narVfob8LxW66sZqGWKUBPOTEAvvweCV+tbZP/VUjNMDmf7qD4vvwOeB0FQC/rBpD+B9SdHSh3TZIhVytL5M5B4ZJNJMDHmlArTqKzcVbSQPnvtZfwNgkUc4IondLE9KNXkSXQapBCnR0QLLPn+MAAMVq1WH+iCTR4erNIsUplWpMu1AV6tfb82hETmsQlSsE5oxvPbii4gEnl1DCyfjUAcDocgbrez7YyInWqn82ChVqdB3pqUc7YvykfA8/pIiIEQwzDs0K0j9tAxUId8OvL7MC1kgVejkQEykYC7sBt2u51ux0C/IG1dSk1eZYBn/no9Mk4vROIO1u3i5qiO6aqII8nECwcsQtfQB1ScBnEmxN6u2+uKKVSQNj220glZNMDyiDFBAKhvJDLx46Mn9omZQWooaTVyXghY5BKkilkEw+En4mplmEy1SA0lyzSRLCqwvlbidruNF+q0IfZW+9W+t88odSL7WursNpBTAZZGHDwtmBmYC5cYOL1a7dks8qvfJpIlBuY4v74RFobEJLXWaSUq0yIl31YkkDkCntaPihqe7nbE/ER8f88ij0RmiKcAlkauqrWoqQTBlPp2RGF+DWUm3SUAz9YjvpgYxzYZHzs4L0BHNEgLZL9tJG9z1155WeekcBgdkZPxAaG7TBgNsvcJaUQiN2UvnwyWnBT/qDcQZb8nZnhM3H8hTrJu571iCiJEYj4Nh9q/ODFMxF+TTibiqcfJoReFGGaJjCx6uSSZD4Bc+zUaKAtLJIg6ufrgOO6zJsiwg0asvZKJOS9KlAiRAMamqHeWeH///r7CY3pKF+NWe6ux+qAzkoleQsD5YLkEEiJ5qLgwKhFMkrliz631Pj5A5Gnh+qSXAjcniUsRSSNlu7UaKWj394pUnWwfxOuhDJhYtQPCa2xSBdZhipzNbLNxxPt7DiYHFCz52XWFGJvMeI3GeJMODLBOyQExZPtC1PyQ4Vc7MUsMsIsBcNwYj6PUKKRVSCLD7o6XIAEzRCANh1ByYUUBGE+Cfr/GCsmi1AKxcGpE7BJvx+XigEDyAmKOsRmIcUw7o1oNQCJu4Pd8KQLJRCQqQwvwiAikUMKZGib5NiYkAccscbPZROncEH2q8uospCW2MgV+zxf9S36HwmEWGwZIHDiFkBhFaTqos0CfifEWItH+Xa+xhuSEhoTWyReNpECAgiSgIsGr8WaMROpSe7cdUV/YhQxxF9ZYEBCQiBsDTIBkHi9ERDLsmdXGDWK11zvqRLPtwhren24MbHAMNwxME0ai9wSyLSFkT4jSanXBcFmHNCYXwwD/ecgjeOhdCBE4IzHBalyOWCH1W4ckTVzQfNP6hsihGvqfv/YKVmJkgNx/gBRiFa0CSNTQnqpod2yhiERzlhad84oKpCw7IrefNedlS72iqsweL7VPhhEZ+DREkM1zL9/4QxRh3H6AJGIsntPqQQ/c2Xp2FmNfxKMu75UbGWJkiPM5E0llbG3BXUOIXICzrS3r7SIAcTQqe9e5cVYiI7nlCnCJWDItiDWk0BkSkURzPUtRxxTJdY4GfbQZZyRGRiKAzETHABJ1tgj4gxEz0bF4D0S/kBuXok+D/nS6SZkpeUkjjeJgaTTScOD9I3UTqnhizoRIb0TvtZAPTbQVuS4cphEhx652EpkLQIlGauWG59d8X5hV3U86O+PdV/6tdYBKYmYyjbTM5wQjqvTymhK5v8k8w7uAgx2CFKJs565f3giJeQqmiWKa2tm1FKSMRao3Mtq+UEOSfTTvZNb+yGyJX15eBDlPo0jimJDIRInG9+WgLv13bTo7rSbe7vPrZktcbhJRkaQzZSI9BpEMyDphB4O5dsyR2trXKOBxvWw/Vrww8e3t0I7mywHUpdrKAB0QhZRSBAZzvLa0PJ5CEOpTUdeL7oPPSVOJDhnZPqEGGN3TuyUyfQjHRcX+js6yH82aTRWJA652BS4OdFFTBSWJIdOTlPUjmjLHOcRUVuvsR7Pry2bTiGy1pncYV0v6UyHKfZroUyZGNCSZp1Gunx9/vD1pWiTOd6bk+HKe2u5DPyzOEZG3AedeYnFW/vQB/Kbp3Kajo/ZdYpCiLhVv+U6qK9rQhoMkIhhXX44IbjJe88mEIAVwbBETMTSwDhLhlb4eYlzeOJF69gjkwKbcCNN7ItI0xyYGDp//6ZjlmEgHmvD8DvkUzy2LnWUcNxTM4Oj8zwdBx8Q3RbZTVWmEibcikPYIjUbhu6MqIZpkv7UsMiGkdI6NxI5tzMTG5feHaYbYlGXzJr5TFTFSiBkjhxuXfz3uAzGjUpGUHyyOQRoZeWPpx3RX+uFA8uTG+m1WjlTRlNKZRBtpwwIbj386kMSagds3DLVIqSLxfJ4yciwJafx8ZGpESsKbxnE9aCeZic4f8H51qMv98YZDKa6/qUr1HtNHkI1fHzvzwbj6fWPq0qWdPEdVjv/PwThZXhy3tf6SQR6mudI/fblwcpNNOZwX///tywX9+uPyhIkWWrj84euP/wDRZY/wEAmLygAAAABJRU5ErkJggg==); }

#uranus .planet {
  background-image: url(data:image/png;base64,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); }

#neptune .planet {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADcAAAA3CAMAAACfBSJ0AAAABGdBTUEAALGPC/xhBQAAAGBQTFRFZoGyU2ybWHKiU2yZV3CgVm+eVm+dV3GhVG2bAAAAmLjslbbqk7ToZIO3aovBZ4e7cJTMkLHmbI/FYX+yXnusWnWlja7kiavhc5fRg6bdhqjfeZ3WgKTbdprUfqHZe5/XTjN33QAAAAp0Uk5T82DQILiggOhMAI3C2HIAAAPgSURBVEjHjZaLVqNAEEQxkoAmIAYIb/j/v9yuqp4BNetum8R4Dtfq6elX8vbE8kt6apsWdkov+bNHkp/QOWvbpqlhTQM6O+f/5F4Mag0qPmSFwUBffuXyLEBleaeVpaNZ/lfuNTWoMMSYqur7pTerqjtQI9PX51yekSICW2DTsvTV/U7yKLlzFxP7gJIAMZPZAlSal5/cuW0oFigA9t62jSi9bdrzdw4YKTw6TfrcgNkX+wpvywOYRCcd29YNLzy+8su6umRvYB1cFZfjbMD4FF6rPmR0lr6aYr5zrxmxBWpusz7nnQNYlUWbvUYubS2ScjJgMxD/2MH+/lG3aeByHs6xmTaY2R/DwL94UESnj56Co5cW/wM2DuMo3N5z8NWyB4KZuJe2LuglqIEUbNhtlq/IuwqCL+SypvDDyb9h6Dqj8BpHvgdydoc6YZOBy1t5KTnY2BkI6/gDZXELr988zY07Q245yAE7GhQRG+QPU7VozsbRzckxONZ1j91cGorh9o3L3hK6aVm5Omfe2eOfZvglshsV1G0Ld5gnF7qJpJoVC8p93m4gRUNS14iaWsBdkvToJgQld7uRjCDzgLVojtZNmpwQTXDrzn2Cu15vDhvIE+p8POAp0S2Qm3l1D9e7wggqOkrThQdsWnJL5HAH0rte39/fAUZuVmB6BibohXtwvZu4d+eMHDzXvnKLH5B3/l3vU5hu8AvXRy44+lWvG0NuH7gi6s2Bo6PCwHVDyG1dfCHO7h2NyxMmCN5iOJVpIWFUSsmpcS4mWoioru/xCAmq3BZ3snypwcWL8JuHIl4Pcp37OakgrMckFwsMywh+oikMI2/iEbIsFgTzs1dYLlYPTShbNbChe8RCwuEcw/mm2Clyrz8JsuMOLNZDAVLMK16cdSbVu2W2WrvVYaz3HTMvvFH47Z3VX4qyNykLjY2gNQR1bxPhCryK2EHZzyyi08YjTmjP86HJhCYhrj/0M+ufjIwlG2OqQhyjDfHqvPhq75+MjA0jVu+ssA7sGV/a7jSFbpbF+aCxogGxBXBW9/agqH169wzzyMeY0m3dfEqEoUQnUOmSS4/zT9OWU5qp6hMmjsItrAfNYf5xkn0I3CaN5n1qhoLlblA3+ff57iCig55+mNUcfhzTdXP5sU94cBZ2rYnbhLQnbjEVl5/zk/0Faw9Kaln21Wfa1KQxh57tL9qXdI991UdQ/4ar1vN9Ke5nZRkWNC5pKPAKa6GlV/7LPlhD1Ha7SssgpAyCj3/bB+P+GdfP0n7ugGzx/WX/9H0XO3Khfdd+FVhbm3/su0/2a9uw/2e/3vf59td9/g/87+wnzrJ1rQAAAABJRU5ErkJggg==); }

/* --------------------------------------------------------------------------- responsive styles */
@media screen and (max-width: 299px) {
  #universe {
    font-size: 20%; } }
@media screen and (min-width: 300px) {
  #universe {
    font-size: 24%; } }
@media screen and (min-width: 500px) {
  #universe {
    font-size: 36%; } }
@media screen and (min-width: 600px) {
  #universe {
    font-size: 44%; } }
@media screen and (min-width: 760px) {
  #universe {
    font-size: 58%; } }
@media screen and (min-width: 1000px) {
  #universe {
    font-size: 73%; }

  #navbar, #controls, #data {
    background: transparent; }

  #navbar a {
    display: none; }

  h1 {
    font-size: 22px;
    margin-top: 8px; }

  #controls {
    padding-right: 32px;
    top: 12px; }

  #data {
    position: fixed;
    top: inherit;
    bottom: 0;
    width: 100%;
    text-align: center; }

  #data a {
    display: inline-block;
    text-align: center;
    font-size: 20px;
    padding: 15px 15px; }

  .data-open #data, .data-close #data {
    left: 0px; }

  .controls-open #controls, .controls-close #controls {
    right: 0px; } }
@media screen and (min-width: 1300px) {
  #universe {
    font-size: 100%; } }

  </style>

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

  var setView = function(view) { universe.removeClass().addClass(view); };

  $("#toggle-data").click(function(e) {
    body.toggleClass("data-open data-close");
    e.preventDefault();
  });

  $("#toggle-controls").click(function(e) {
    body.toggleClass("controls-open controls-close");
    e.preventDefault();
  });

  $("#data a").click(function(e) {
    var ref = $(this).attr("class");
    solarsys.removeClass().addClass(ref);
    $(this).parent().find('a').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });

  $(".set-view").click(function() { body.toggleClass("view-3D view-2D"); });
  $(".set-zoom").click(function() { body.toggleClass("zoom-large zoom-close"); });
  $(".set-speed").click(function() { setView("scale-stretched set-speed"); });
  $(".set-size").click(function() { setView("scale-s set-size"); });
  $(".set-distance").click(function() { setView("scale-d set-distance"); });

  init();

});
</script>