<header>
  <div class="main">
        <div class="web_title">
          <h1>
            <a class="logo" href="index.html">Martin Verdugo's Beach Resort</a>
            <!--<a class="title_logo" href="index.html">Martin Verdugo's Beach Resort</a>-->
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
        <div class="s_web_title">
          <a class="title_logo" href="index.html">Martin Verdugo's Beach Resort</a>
          <a class="open" href="#modal">Menu</a>
        </div>
        <div id="modal">
          <ul id="nav">
              <a href="javascript:$.pageslide.close()"><li class="no_highlight"><div class="header_menu">Close Menu &gt;&gt;</div></li></a>
              <a href="index.php"><li><div class="text_link">HOTEL</div></li></a>
              <a href="rooms.php"><li><div class="text_link">ROOMS</div></li></a>
              <a href="fishing_packages.php"><li><div class="text_link">FISHING PACKAGES</div></li></a>
              <a href="wind_surfing.php"><li><div class="text_link">WINDSURFING</div></li></a>
              <a href="activities.php"><li><div class="text_link">ACTIVITIES</div></li></a>
              <a href="maps.php"><li><div class="text_link">MAP</div></li></a>
              <a href="photos.php"><li><div class="text_link">PHOTOS</div></li></a>
              <a href="http://reports.verdugosbeachresort.com"><li><div class="text_link">REPORTS</div></li></a>
              <a href="contact.php"><li><div class="text_link">CONTACT</div></li></a>
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
