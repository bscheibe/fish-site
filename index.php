<?php
$title = "Martin Verdugos Beach Resort - Los Barriles";
$description = "Martin Verdugo's Beach Resort - Fishing, Windsurfing, and Fun in Los Barriles";
$keywords = "Los Barriles, los barriles hotel, fishing, marlin, rooster fish, wahoo, dorado, windsurfing, kite boarding, sea of cortez";
?>
<!-- html-head -->
<?php include 'html-head.inc'; ?>
<body id="page1">
  <!-- header -->
  <?php include 'header.inc'; ?>
  <section id="content">
    <div class="main">
      <div class="container_24">
        <div class="bg">
          <div class="wrapper">
            <article class="grid_16 alpha">
              <div class="pref">
                <h2><strong>Welcome</strong> to Martin Verdugo's Beach Resort!</h2>

                <div class="wrapper img-indent-bot">
                  <figure class="img-indent frame"><img src="images/page1-hotel.jpg" alt=""/></figure>
                  <div class="extra-wrap">
                    Located right on the beach in <a href="http://www.verdugosbeachresort.com/los_barriles.php">Los Barriles</a>, Martin Verdugo's is a great place to enjoy the Sea of Cortez. Still family run by the Verugo family, the hotel caters to fishermen, wind surfers, divers, and travelers just looking for a nice place to relax.
                    <p>

                    <p>All rooms are modern and air conditioned with some rooms having refrigerators and kitchenettes. The hotel has its own fishing fleet of 28ft Super Cruisers, and smaller Super Pangas.
                  </div>
                </div>
                <div class="wrapper border-bot p3">
                  <div class="grid_7 alpha suffix_1">
                    <ul class="list-1">
                      <li><a href="#">Located right on the beach!</a></li>
                      <li><a href="rooms.html">Air Conditioned Hotel Rooms</a></li>
                      <li><a href="#">Family Owned and Managed</a></li>
                      <li><a href="#">Restaurant</a></li>
                      <li><a href="packages.html">Fishing Charters</a></li>
                    </ul>
                  </div>
                  <div class="grid_6 omega">
                    <ul class="list-1">
                      <li><a href="rooms.html#RV Park">RV Parking and Campground</a></li>
                      <li><a href="maps.html">Less than 1hr from SJD</a></li>
                      <li><a href="#">Beach Front Pool</a></li>
                      <li><a href="#">Palapa Bar</a></li>
                      <li><a href="wind_surfing.html">Windsurfing Kite Boarding</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </article>
            <article class="grid_8 omega">
              <!-- side-menu -->
              <?php include 'side-menu.inc'; ?>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- footer -->
  <?php include 'footer.inc'; ?>
  <!-- footer script -->
  <script type="text/javascript"> Cufon.now(); </script>
  <script src="/js/jquery.pageslide.min.js"></script>
  <script>
      $(".open").pageslide({ direction: "right", modal: true });
  </script>
</body>
<?php print '</html>'; ?>

