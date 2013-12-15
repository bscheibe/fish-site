<header>
  <div class="main">
        <div class="web_title">
          <h1>
            <a class="logo" href="index.html">Martin Verdugo's Beach Resort</a>
          </h1>
        </div>
        <div class="search_bar">
          <form id="search-form" action="" method="post" enctype="multipart/form-data">
            <fieldset>
              <div class="wrapper">
                <input type="text" name="search"/>
                <a href="#" onClick="document.getElementById('search-form').submit()">Search</a>
              </div>
            </fieldset>
          </form>
        </div>
        <a class="open" href="#modal">Menu</a>
        <div id="modal">
          <ul id="nav">
              <li class="slider_link"><a href="index.php">HOTEL</a></li>
              <li class="slider_link"><a href="rooms.php">ROOMS</a></li>
              <li class="slider_link"><a href="fishing_packages.php">FISHING PACKAGES</a></li>
              <li class="slider_link"><a href="wind_surfing.php">WINDSURFING</a></li>
              <li class="slider_link"><a href="activities.php">ACTIVITIES</a></li>
              <li class="slider_link"><a href="maps.php">MAP</a></li>
              <li class="slider_link"><a href="photos.php">PHOTOS</a></li>
              <li class="slider_link"><a href="http://reports.verdugosbeachresort.com">REPORTS</a></li>
              <li class="slider_link"><a href="contact.php">CONTACT</a></li>
          </ul>
        </div>
    <div class="container_24">
      <div class="grid_24">
        <?php include 'main-menu.inc'; ?>
      </div>
      <div class="clear"></div>
    </div>
    <div class="carousel gallery">
      <a class="prev" href="#">prev</a>
      <div class="jCarouselLite">
        <ul>
          <li><img width="306" height="299" src="images/gal14-pool.jpg" alt="Martin Verdugo Hotel"/></li>
          <li><img width="306" height="299" src="images/gal12-marlin.jpg" alt="Los Barriles"/></li>
          <li><img width="306" height="299" src="images/gal10-hotelpool.jpg" alt="Los Barriles"/></li>
          <li><img width="306" height="299" src="images/gal2-sail.jpg" alt="Sailfish"/></li>
          <li><img width="306" height="299" src="images/gal3-palapa.jpg" alt="Palapa Bar"/></li>
          <li><img width="306" height="299" src="images/gal1-tuna.jpg" alt="East Cape Tuna"/></li>
          <li><img width="306" height="299" src="images/gal13-acrossbay.jpg" alt="Martin Verdugos Hotel"/></li>
          <li><img width="306" height="299" src="images/gal4-sunrise.jpg" alt="Tuna Fishing Baja"/></li>
          <li><img width="306" height="299" src="images/gal11-hallview.jpg" alt="Martin Verdugo Beach Resort"/></li>
          <li><img width="306" height="299" src="images/gal7-cactus1.jpg" alt="Sea of Cortez"/></li>
        </ul>
      </div>
      <a class="next" href="#">next</a>
      <div class="angle-left"></div>
      <div class="angle-right"></div>
    </div>
  </div>
</header>
