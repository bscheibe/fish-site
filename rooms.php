<?php
$title = "Rooms and Rates";
$description = "Martin Verdugo's Beach Resort - Hotel, RV Park, and Campground";
$keywords = "Los Barriles, los barriles hotel, east cape hotel rooms, fishing marlin, rooster fish, wahoo, dorado, windsurfing, kite boarding, sea of cortez";
?>
<!-- html-head -->
<?php include 'html-head.inc'; ?>
<body id="page1">
  <!-- header -->
  <?php include 'header.inc'; ?>
  <section id="content">
    <div class="main">
      <div class="container_24">
        <div class="bg-2">
          <div class="wrapper">
            <article class="grid_16 alpha">
              <div class="pref">
                <h2><strong>HOTEL</strong> ROOMS</h2>

                <div class="wrapper img-indent-bot">
                  <figure class="img-indent frame"><img src="images/room-oceanfront-small.jpg" alt=""/></figure>
                  <div class="extra-wrap">
                    <h4>OCEAN FRONT</h4> Our ocean front rooms look directly onto the Sea of Cortez. They are wonderful for watching the sunrise, or watching the colorful scene as fisherman return with the day's catch. Rooms are air conditioned with screen doors for enjoying the sea breeze.<br><br><b>$85 USD per night. </b>7th night is free for one week stay.
                  </div>
                </div>
                <div class="wrapper img-indent-bot">
                  <figure class="img-indent frame"><img src="images/room-kitchenette-small.jpg" alt=""/></figure>
                  <div class="extra-wrap">
                    <h4>KITCHENETTE</h4> Kitchenettes offer two queen size beds, a large table and chairs, and sink/kitchen area. All rooms are completely modern with air conditioning, and a full size refrigerator. These rooms are great if you have kids, or just want more space.<br><br><b>$90 USD per night - 2 persons/room. </b>7th night free for one week stay.
                  </div>
                </div>
                <div class="wrapper img-indent-bot">
                  <figure class="img-indent frame"><img src="images/room-standard-small.jpg" alt=""/></figure>
                  <div class="extra-wrap">
                    <h4>STANDARD ROOM</h4> These rooms are also air conditioned and some feature either two or three twin beds. Some rooms are equipped with small refrigerators. These rooms are very economical, and a great option if you don't require ocean front or a kitchenette. They still have plenty of space to store your gear.<br><br><b>$80 USD per night.</b> 7th night is free for one week stay.
                  </div>
                </div>
                <h2><a name="RV Park"><strong>RV</strong> PARK and CAMPGROUND</a></h2>

                <div class="wrapper img-indent-bot">
                  <figure class="img-indent frame"><img src="images/trailer-park-small.jpg" alt=""/></figure>
                  <div class="extra-wrap">
                    <h4>Full Hookup RV PARKING</h4> Our RV area is a great value for those driving down the baja Peninsula. We feature full hookups, showers/bathrooms, and laundry machines.
                    <br><br><b>$21 USD - Daily</b><br><b>$130 USD - Weekly</b><br><b>$430 USD Monthly (2 people)</b>
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
  <script type="text/javascript"> Cufon.now(); </script>
  <script src="js/jquery.pageslide.min.js"></script>
  <script>
      $(".open").pageslide({ direction: "right", modal: true });
  </script>
</body>
<?php print '</html>'; ?>

