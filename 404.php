<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/plugins/bootstrap.min.css">
  <!-- swiper css -->
  <link rel="stylesheet" href="css/plugins/swiper.min.css">
  <!-- fancybox css -->
  <link rel="stylesheet" href="css/plugins/fancybox.min.css">
  <!-- font awesome css -->
  <link rel="stylesheet" href="css/plugins/font-awesome.min.css">
  <!-- nice select css -->
  <link rel="stylesheet" href="css/plugins/nice-select.css">
  <!-- datepicker css -->
  <link rel="stylesheet" href="css/plugins/datepicker.css">
  <!-- mapbox css -->
  <link rel="stylesheet" href="css/plugins/mapbox-style.css">
  <!-- kinsley css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- page title -->
  <title>Youth Club</title>
</head>

<body>

  <!-- page wrapper -->
  <div class="knsl-app">

    <!-- datepicker frame -->
    <div class="knsl-datepicker-place"></div>

    <!-- top bar -->
    <div class="knsl-top-bar">
      <div class="container">
        <div class="knsl-left-side">
          <!-- logo -->
          <a href="index.html" class="knsl-logo-frame">
            <img src="img/logo.png" alt="Kinsley">
          </a>
          <!-- logo end -->
        </div>
        <div class="knsl-right-side">
          <!-- menu -->
         <div class="knsl-menu">
          <nav>
            <ul>
              <li>
                <a href="index.php">Home</a>
              </li>
             <li class="menu-item-has-children" >
               <a href="club_committee.php">The Club</a>
              <ul>
               <li><a href="club_committee.php">Club Committee</a></li>
               <li><a href="club_secretariat.php">Club Secretariat</a></li>
              </ul>
             </li>
              <li class="menu-item-has-children" >
                <a href="tennis.php">Sports</a>
                <ul>
                  <li><a href="tennis.php">Tennis</a></li>
                  <li><a href="gym.php">Gym</a></li>
                  <li><a href="shuttle.php">Shuttle</a></li>
                  <li><a href="table_tennis.php">Table Tennis</a></li>
                  <li><a href="billiards.php">Billiards</a></li>
                  <li><a href="volley_ball.php">Volley Ball</a></li>
                </ul>
              </li>
              <li>
                <a href="rooms.php">Rooms</a>
              </li>
              <li>
                <a href="restaurant.php">Restaurant</a>
              </li>
              <li class="menu-item-has-children">
                <a href="types_of_membership.php">Membership</a>
                <ul>
                  <li><a href="types_of_membership.php">Types Of Membership</a></li>
                  <li><a href="rules_&_regulations.php">Rules & Regulations</a></li>
                </ul>
              </li>
              <li class="current-item">
                <a href="about.php">About</a>
              </li>
              <li>
                <a href="contact.php">Contact</a>
              </li>
              <li class="menu-item-has-children">
                <a href="">Pages</a>
                <ul>
                  <li><a href="gallery.php">Gallery</a></li>
                  <li><a href="events.php">Events</a></li>
                  <li><a href="affiliations.php">Affiliations</a></li>
                  <li><a href="contact.php">Contact</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
        <!-- menu end -->
          <!-- action button -->
          <a href="https://wa.me/+919391742895?" class="knsl-btn"><img src="img/icons/bookmark.svg" alt="icon">Contact</a>
          <!-- action button end -->
        </div>
        <!-- menu button -->
        <div class="knsl-menu-btn"><span></span></div>
        <!-- menu button end -->
      </div>
    </div>
    <!-- top bar end -->

    <!-- banner -->
    <section class="knsl-banner-simple knsl-transition-bottom">
      <img src="img/palm.svg" class="knsl-deco-left" alt="palm">
      <img src="img/palm.svg" class="knsl-deco-right" alt="palm">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <div class="knsl-center knsl-title-frame">
              <h1 class="knsl-h1-inner">Oops! Where are we?</h1>
              <div class="knsl-404">404</div>
              <p class="knsl-mb-30">Page not Found! The page you are looking for was moved, removed,<br> renamed or might never existed.</p>
              <a href="index.html" class="knsl-btn">Back to Home</a>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- banner end -->

    <!-- popup -->
    <div id="knsl-success" class="knsl-popup">
      <img src="img/features/12.svg" alt="success" class="knsl-succes-icon">
      <h2 class="knsl-mb-20">Success</h2>
      <p>However, message not sent. <br>This pop-up exists for demonstration.</p>
    </div>
    <!-- popup end -->

    <!-- popup -->
    <div class="knsl-popup-frame">
      <div class="knsl-book-form knsl-book-popup">
        <span class="knsl-close-popup">+</span>
        <h2 class="knsl-mb-40">Search your Room</h2>
        <form>
          <div class="row">
            <div class="col-lg-12">
              <div class="knsl-input-frame">
                <label>Check in</label>
                <input type="text" class="datepicker-here" data-position="bottom left" placeholder="Select date" autocomplete="off" readonly="readonly">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="knsl-input-frame">
                <label class="knsl-add-icon">Check out</label>
                <input type="text" class="datepicker-here" data-position="bottom left" placeholder="Select date" autocomplete="off" readonly="readonly">
              </div>
            </div>
            <div class="col-6">
              <div class="knsl-select-frame">
                <label>Person</label>
                <select>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4" disabled>4</option>
                </select>
              </div>
            </div>
            <div class="col-6">
              <div class="knsl-select-frame">
                <label>Childrens</label>
                <select>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4" disabled>4</option>
                </select>
              </div>
            </div>
            <div class="col-lg-12 knsl-center">
              <button type="submit" class="knsl-btn"><img src="img/icons/search.svg" class="knsl-zoom" alt="icon">Serch room</button>
            </div>
          </div>
        </form>

      </div>
    </div>
    <!-- popup end -->

  </div>
  <!-- page wrapper end -->

  <!-- jquery js -->
  <script src="js/plugins/jquery.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/plugins/bootstrap.min.js"></script>
  <!-- nice select js -->
  <script src="js/plugins/jquery.nice-select.min.js"></script>
  <!-- datepicker js -->
  <script src="js/plugins/datepicker.js"></script>
  <!-- smooth scroll js -->
  <script src="js/plugins/smooth-scroll.js"></script>
  <!-- isotope js -->
  <script src="js/plugins/isotope.min.js"></script>
  <!-- mapbox js -->
  <script src="js/plugins/mapbox.min.js"></script>
  <!-- fancybox js -->
  <script src="js/plugins/fancybox.min.js"></script>
  <!-- swiper js -->
  <script src="js/plugins/swiper.min.js"></script>
  <!-- sticky js -->
  <script src="js/plugins/sticky.js"></script>
  <!-- kinsley js -->
  <script src="js/main.js"></script>

</body>

</html>
