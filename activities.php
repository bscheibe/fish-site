<?php
$title = "Activites";
$description = "Martin Verdugo's Beach Resort - Fishing, Windsurfing, and More";
$keywords = "Los Barriles activites, los barriles hotel, fishing, marlin, rooster fish, wahoo, dorado, windsurfing, kite boarding, sea of cortez";
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
          <div class="wrapper border-act">
            <article class="grid_16 alpha">
              <div class="pref">
              <div class="fun_sun">
                <h2><strong>FUN</strong> IN THE SUN</h2>
              </div>
              <div class="enjoy margin-bottom-0">
                <h4>Activities to Enjoy During Your Stay!</h4>
                 -- Please remember to pack your favorite gear! We only provide equipment for fishing charters. --
              </div>

                <div class="pic_wrapper">
                  <div class="col-1 margin-bottom">
                    <figure class="indent-bot frame"><img src="images/acts-fishing.jpg" alt=""/></figure>
                    <h6>World Class Fishing</h6>
                    The Sea of Cortez has some of the world's best fishing. Tuna, Marlin, Dorado (Mahi-Mahi), and Roosterfish. Book a trip
                    <a href="/packages.html">here</a>.
                  </div>
                  <div class="col-1 margin-bottom">
                    <figure class="indent-bot frame"><img src="images/acts-boarding.jpg" alt=""/></figure>
                    <h6>Wind Surfing - Kite Boarding</h6>
                    The winter months offer warm weather and great winds for boarders and surfers.
                  </div>
                  <div class="col-2 margin-bottom">
                    <figure class="indent-bot frame"><img src="images/acts-atv.jpg" alt=""/></figure>
                    <h6>ATV Riding</h6>
                    Rent an ATV and set off on an off-road desert adventure.
                    <a href="http://www.quadman.net">Rentals</a> are available in Los Barriles.
                  </div>
                </div>
                <br>

                <div class="pic_wrapper margin-bot">
                  <div class="col-1 margin-bottom">
                    <figure class="indent-bot frame"><img src="images/acts-snorkel.jpg" alt=""/></figure>
                    <h6>Snorkeling / Diving</h6>
                    Snorkel in front of our hotel, or book a trip to world famous Cabo Pulmo reef. The water is crystal clear!
                  </div>
                  <div class="col-1 margin-bottom">
                    <figure class="indent-bot frame"><img src="images/acts-beach.jpg" alt=""/></figure>
                    <h6>Beach Combing</h6>
                    The East Cape area has miles of beautiful beaches. Take a stroll and enjoy it all.
                  </div>
                  <div class="col-2">
                    <figure class="indent-bot frame"><img src="images/acts-pool.jpg" alt=""/></figure>
                    <h6>Lazy Day at the Pool</h6>
                    Take a load off and spend a day by the pool. Enjoy the tropical breeze, have a beer, read a book...whatever!
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
  <script src="/js/jquery.pageslide.min.js"></script>
  <script>
      $(".open").pageslide({ direction: "right", modal: true });
  </script>
</body>
<?php print '</html>'; ?>

