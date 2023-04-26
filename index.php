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
  <!-- kinsley css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- page title -->
  <title>Youth Club</title>
  <style>
    /* .lg{
      font-family:serif;
    } */
  </style>
</head>

<body>

    <!-- page wrapper -->
  <div class="knsl-app">

<!-- preloader -->
<div class="knsl-preloader-frame">
  <div class="knsl-preloader">
    <img src="img/logo.png" alt="Kinsley">
    <div class="knsl-preloader-progress">
      <div class="knsl-preloader-bar"></div>
    </div>
    <div><span class="knsl-preloader-number" data-count="101">0</span>%</div>
  </div>
</div>
<!-- preloader end -->

<!-- datepicker frame -->
<div class="knsl-datepicker-place"></div>

<!-- top bar -->
<div class="knsl-top-bar">
  <div class="container">
    <div class="knsl-left-side">
      <!-- logo -->
      <a href="index.php" class="knsl-logo-frame">
        <img src="img/logo.png" alt="Kinsley">
      </a>
      <!-- logo end -->
    </div>
    <div class="knsl-right-side">
      <!-- menu -->
     <div class="knsl-menu">
      <nav>
        <ul>
          <li class="current-item">
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
          <li>
            <a href="about.php">About</a>
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
      <a href="https://wa.me/+917207080232?" class="knsl-btn"><img src="img/icons/bookmark.svg" alt="icon">Contact</a>
      <!-- action button end -->
    </div>
    <!-- menu button -->
    <div class="knsl-menu-btn"><span></span></div>
    <!-- menu button end -->
  </div>
</div>
<!-- top bar end -->


                         

  <!-- banner -->
  <section class="knsl-banner">
      <div class="knsl-cover-frame mySlides">
        <img src="img/1.jpg" alt="banner" class="knsl-parallax">
      </div>
      <div class="knsl-cover-frame mySlides" >
        <img src="img/16.jpg" alt="banner" class="knsl-parallax">
      </div>
      <div class="knsl-cover-frame mySlides">
        <img src="img/5.jpg" alt="banner" class="knsl-parallax">
      </div>
      <div class="knsl-banner-content"></div>
    </section>

             <script>
                var myIndex = 0;
                carousel();
                
                function carousel() {
                  var i;
                  var x = document.getElementsByClassName("mySlides");
                  for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                  }
                  myIndex++;
                  if (myIndex > x.length) {myIndex = 1}    
                  x[myIndex-1].style.display = "block";  
                  setTimeout(carousel, 4000); // Change image every 2 seconds
                }
              </script>
    <!-- banner end -->




                 
   


  

    <!-- features -->
    <section id="knsl-triger-1">

      <div class="container">

        <!-- features card -->
        <div class="knsl-features-card" style="margin-top: -80px;">

          <div class="row">
            <div class="col-6 col-lg-3">

              <!-- icon box -->
              <div class="knsl-icon-box">
                <img src="img/features/1.svg" alt="icon" class="knsl-mb-10">
                <h5>Transport</h5>
              </div>
              <!-- icon box end -->

            </div>
            <div class="col-6 col-lg-3">

              <!-- icon box -->
              <div class="knsl-icon-box">
                <img src="img/features/2.svg" alt="icon" class="knsl-mb-10">
                <h5>All inclusive</h5>
              </div>
              <!-- icon box end -->

            </div>
            <div class="col-6 col-lg-3">

              <!-- icon box -->
              <div class="knsl-icon-box">
                <img src="img/features/3.svg" alt="icon" class="knsl-mb-10">
                <h5>Air-conditioned</h5>
              </div>
              <!-- icon box end -->

            </div>
            <div class="col-6 col-lg-3">

              <!-- icon box -->
              <div class="knsl-icon-box">
                <img src="img/features/4.svg" alt="icon" class="knsl-mb-10">
                <h5>Under protection</h5>
              </div>
              <!-- icon box end -->

            </div>
          </div>

        </div>
        <!-- features card end -->

      </div>
    </section>
    <!-- features end -->

    <!-- about -->
    <section class="knsl-p-100-100">

      <div class="container">
        <div class="knsl-about-card">
          <div class="row no-gutters">
            <div class="col-lg-6">
              <div class="knsl-about-photo">
                <img src="img/10.jpg" alt="cover">
              </div>
            </div>
            <div class="col-lg-6 align-self-center">
              <div class="knsl-about-text">
                <div class="knsl-title-frame">
                  <h2 class="knsl-mb-20">We have 30+ years <br>of Experience</h2>
                  <p class="knsl-mb-30">Past 30+ Years We Are Running This Club In Bhimavaram.</p>
                  <a href="about.php" class="knsl-btn knsl-btn-md">More about us</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 order-lg-2">
              <div class="knsl-video-frame">
                <img src="img/14.jpg" alt="cover">
                <a data-fancybox href="https://www.youtube.com/watch?v=3pN8bqHeA4I&t=3s" class="knsl-play-btn">
                  <i class="fas fa-play"></i>
                </a>
              </div>
            </div>
            <div class="col-lg-6 align-self-center">
              <div class="knsl-about-text">
                <div class="knsl-title-frame">
                  <h2 class="knsl-mb-20">Start your Amazing Adventure!</h2>
                  <p class="knsl-mb-30">Plan A Adventurious Trip In Godavari Districts At Youth Club Bhimavaram</p>
                  <a href="rooms.php" class="knsl-btn knsl-btn-md">Choose a room</a>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>

    </section>
    <!-- about end -->

    <!-- gallery -->
    <section class="knsl-transition-top knsl-p-0-100">
      <img src="img/palm.svg" class="knsl-deco-left" alt="palm">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">

            <div class="knsl-center knsl-title-frame knsl-scroll-animation knsl-mb-100">
              <h2 class="knsl-mb-20">Youth Club is Waiting for You!</h2>
              <p class="knsl-mb-30">Get The Best Experience In Youth Club Bhimavaram Never Before</p>
              <a href="about.php" class="knsl-btn knsl-btn-md">More about us</a>
            </div>

          </div>
          <div class="col-lg-12">

            <!-- slider -->
            <div class="swiper-container knsl-about-slider knsl-scroll-animation">
              <div class="swiper-wrapper">
                <div class="swiper-slide">

                  <!-- gallery item -->
                  <div class="knsl-image-frame">
                    <a data-fancybox="gallery" href="img/1.jpg">
                      <img src="img/1.jpg" alt="about">
                      <div class="knsl-badge">View from the top</div>
                      <span class="knsl-zoom"><i class="fas fa-search-plus"></i></span>
                    </a>
                  </div>
                  <!-- gallery item end -->

                </div>
                <div class="swiper-slide">

                  <!-- gallery item -->
                  <div class="knsl-image-frame">
                    <a data-fancybox="gallery" href="img/4.jpg">
                      <img src="img/4.jpg" alt="about">
                      <div class="knsl-badge">Sita rama raju statue</div>
                      <span class="knsl-zoom"><i class="fas fa-search-plus"></i></span>
                    </a>
                  </div>
                  <!-- gallery item end -->

                </div>
                <div class="swiper-slide">

                  <!-- gallery item -->
                  <div class="knsl-image-frame">
                    <a data-fancybox="gallery" href="img/36.jpg">
                      <img src="img/36.jpg" alt="about">
                      <div class="knsl-badge">Riception</div>
                      <span class="knsl-zoom"><i class="fas fa-search-plus"></i></span>
                    </a>
                  </div>
                  <!-- gallery item end -->

                </div>
                <div class="swiper-slide">

                  <!-- gallery item -->
                  <div class="knsl-image-frame">
                    <a data-fancybox="gallery" href="img/3.jpg">
                      <img src="img/3.jpg" alt="about">
                      <div class="knsl-badge">Auditorium</div>
                      <span class="knsl-zoom"><i class="fas fa-search-plus"></i></span>
                    </a>
                  </div>
                  <!-- gallery item end -->

                </div>
                <div class="swiper-slide">

                  <!-- gallery item -->
                  <div class="knsl-image-frame">
                    <a data-fancybox="gallery" href="img/9.jpg">
                      <img src="img/9.jpg" alt="about">
                      <div class="knsl-badge">Gym</div>
                      <span class="knsl-zoom"><i class="fas fa-search-plus"></i></span>
                    </a>
                  </div>
                  <!-- gallery item end -->

                </div>
                <div class="swiper-slide">

                  <!-- gallery item -->
                  <div class="knsl-image-frame">
                    <a data-fancybox="gallery" href="img/6.jpg">
                      <img src="img/6.jpg" alt="about">
                      <div class="knsl-badge">Bar & Restaurant</div>
                      <span class="knsl-zoom"><i class="fas fa-search-plus"></i></span>
                    </a>
                  </div>
                  <!-- gallery item end -->

                </div>
                <div class="swiper-slide">

                  <!-- gallery item -->
                  <div class="knsl-image-frame">
                    <a data-fancybox="gallery" href="img/18.jpg">
                      <img src="img/18.jpg" alt="about">
                      <div class="knsl-badge">Indoor stadium</div>
                      <span class="knsl-zoom"><i class="fas fa-search-plus"></i></span>
                    </a>
                  </div>
                  <!-- gallery item end -->

                </div>
                <div class="swiper-slide">

                  <!-- gallery item -->
                  <div class="knsl-image-frame">
                    <a data-fancybox="gallery" href="img/12.jpg">
                      <img src="img/12.jpg" alt="about">
                      <div class="knsl-badge">Conference hall</div>
                      <span class="knsl-zoom"><i class="fas fa-search-plus"></i></span>
                    </a>
                  </div>
                  <!-- gallery item end -->

                </div>
              </div>

              <!-- slider navigation -->
              <div class="knsl-slider-nav-panel">
                <!-- pagination -->
                <div class="knsl-about-slider-1-pagination"></div>
                <!-- navigation -->
                <div class="knsl-about-slider-nav">
                  <div class="knsl-about-slider-1-prev"><i class="fas fa-arrow-left"></i></div>
                  <div class="knsl-about-slider-1-next"><i class="fas fa-arrow-right"></i></div>
                </div>
                <!-- navigation end -->
              </div>
              <!-- slider navigation end -->

            </div>
            <!-- slider end -->

          </div>

        </div>
      </div>

    </section>
    <!-- gallery end -->

    <!-- counters -->
    <section class="knsl-p-0-100" style="background-color: #ECFAFB">
      <img src="img/palm.svg" class="knsl-deco-right" alt="palm">
      <div class="container">

        <!-- features card -->
        <div class="knsl-features-card knsl-counters-card knsl-scroll-animation">

          <div class="row">
            <div class="col-6 col-lg-3">

              <!-- icon box -->
              <div class="knsl-icon-box">
                <div class="knsl-counter-number knsl-mb-10" data-count="1"></div>
                <h5>Bar & Restaurant</h5>
              </div>
              <!-- icon box end -->

            </div>
            <div class="col-6 col-lg-3">

              <!-- icon box -->
              <div class="knsl-icon-box">
                <div class="knsl-counter-number knsl-mb-10" data-count="50"></div>
                <h5>Rooms</h5>
              </div>
              <!-- icon box end -->

            </div>
            <div class="col-6 col-lg-3">

              <!-- icon box -->
              <div class="knsl-icon-box">
                <div class="knsl-counter-number knsl-mb-10" data-count="3"></div>
                <h5>Rummy Halls</h5>
              </div>
              <!-- icon box end -->

            </div>
            <div class="col-6 col-lg-3">

              <!-- icon box -->
              <div class="knsl-icon-box">
                <div class="knsl-counter-number knsl-mb-10" data-count="5000"></div>
                <h5>Guests</h5>
              </div>
              <!-- icon box end -->

            </div>
          </div>

        </div>
        <!-- features card end -->

      </div>
    </section>
    <!-- counters end -->

    <!-- rooms -->
    <section class="knsl-transition-bottom" style="background-color: #ECFAFB">
      <img src="img/palm.svg" class="knsl-deco-left" alt="palm">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">

            <div class="knsl-center knsl-title-frame knsl-scroll-animation knsl-mb-100">
              <h2 class="knsl-mb-20">Our Best Rooms</h2>
              <p class="knsl-mb-30">We Are Providing The Best Rooms For Our Guests. In Our Youth Club Every Guest Will Be Treated As Our Family.</p>
              <a href="rooms.php" class="knsl-btn knsl-btn-md">All rooms</a>
            </div>

          </div>
          <div class="col-lg-12">
            <div class="swiper-container knsl-uni-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">

                  <!-- room card -->
                  <div class="knsl-room-card knsl-scroll-animation">
                    <div class="knsl-cover-frame">
                      <a href="rooms.php"><img src="img/26.jpg" alt="cover"></a>
                    </div>
                    <div class="knsl-description-frame">
                      
                      <a href="rooms.php">
                        <h3 class="knsl-mb-20">Deluxe room</h3>
                      </a>
                      <div class="knsl-text-light knsl-text-sm knsl-mb-20">We Are Providing A Delux Room</div>
                      
                    </div>
                  </div>
                  <!-- room card end -->

                </div>
                <div class="swiper-slide">

                  <!-- room card -->
                  <div class="knsl-room-card knsl-scroll-animation">
                    <div class="knsl-cover-frame">
                      <a href="rooms.php"><img src="img/27.jpg" alt="cover"></a>
                      <div class="knsl-badge">Popular</div>
                    </div>
                    <div class="knsl-description-frame">
                      
                      <a href="rooms.php">
                        <h3 class="knsl-mb-20">Standart Room</h3>
                      </a>
                      <div class="knsl-text-light knsl-text-sm knsl-mb-20">We Are Providing A Standart Room</div>
                      <div class="knsl-card-bottom">
                      </div>
                    </div>
                  </div>
                  <!-- room card end -->

                </div>
                <div class="swiper-slide">

                  <!-- room card -->
                  <div class="knsl-room-card knsl-scroll-animation">
                    <div class="knsl-cover-frame">
                      <a href="rooms.php"><img src="img/28.jpg" alt="cover"></a>
                    </div>
                    <div class="knsl-description-frame">
                      
                      <a href="rooms.php">
                        <h3 class="knsl-mb-20">Suite Room</h3>
                      </a>
                      <div class="knsl-text-light knsl-text-sm knsl-mb-20">We Are Providing A Suite Room</div>
                      <div class="knsl-card-bottom">
                      </div>
                    </div>
                  </div>
                  <!-- room card end -->

                </div>

                </div>
              </div>

              <!-- slider navigation -->
              <div class="knsl-uni-slider-nav-panel">
                <div class="knsl-uni-slider-pagination"></div>
                <div class="knsl-uni-nav">
                  <div class="knsl-uni-slider-prev"><i class="fas fa-arrow-left"></i></div>
                  <div class="knsl-uni-slider-next"><i class="fas fa-arrow-right"></i></div>
                </div>
              </div>
              <!-- slider navigation end -->

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- rooms end -->

    <!-- services -->
    <section class="knsl-p-100-80">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <div class="knsl-center knsl-title-frame knsl-scroll-animation knsl-mb-100">
              <h2 class="knsl-mb-20">Around The Youth Club</h2>
              <p class="knsl-mb-30">Around The Youth Club We Have A Lot Of Things.</p>
              <a href="about.php" class="knsl-btn knsl-btn-md">Services</a>
            </div>
          </div>
          <div class="col-lg-4">

            <!-- service card -->
            <div class="knsl-ath-card knsl-scroll-animation">
              <div class="knsl-cover-frame">
                <img src="img/39.jpg" alt="cover">
              </div>
              <div class="knsl-card-description">
                <h3 class="knsl-mb-10">Lounge bar</h3>
                <p>Officially Licensed Bar</p>
                <a href="about.php" class="knsl-btn">Read more</a>
              </div>
            </div>
            <!-- service card end -->

          </div>
          <div class="col-lg-4">

            <!-- service card -->
            <div class="knsl-ath-card knsl-scroll-animation">
              <div class="knsl-cover-frame">
                <img src="img/12.jpg" alt="cover">
              </div>
              <div class="knsl-card-description">
                <h3 class="knsl-mb-10">Conference Hall</h3>
                <p>Hall For Official Meetings.</p>
                <a href="about.php" class="knsl-btn">Read more</a>
              </div>
            </div>
            <!-- service card end -->

          </div>
          <div class="col-lg-4">

            <!-- service card -->
            <div class="knsl-ath-card knsl-scroll-animation">
              <div class="knsl-cover-frame">
                <img src="img/37.jpg" alt="cover">
              </div>
              <div class="knsl-card-description">
                <h3 class="knsl-mb-10">Restaurant</h3>
                <p>Best Restaurant Best Food</p>
                <a href="about.php" class="knsl-btn">Read more</a>
              </div>
            </div>
            <!-- service card end -->
          </div>
        </div>
      </div>
    </section>
    <!-- services end -->

    <!-- Footer Start -->
  <?php include 'footer.php' ?>
    <!-- Footer End -->
 

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
  <!-- form js -->
  <script src="js/script.js"></script>

</body>

</html>
