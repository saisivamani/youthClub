<?php
$conn = new mysqli("localhost","root","","youthclub");
$result = mysqli_query($conn,"select * from members");
?>
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
  <!-- Members css-->
  <link rel="stylesheet" href="css/style1.css">
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
      <a href="index.php" class="knsl-logo-frame">
        <img src="img/logo.png" alt="Kinsley">
      </a>
      <!-- logo end -->
    </div>
    <div class="knsl-right-side">
      <!-- menu -->
     <div class="knsl-menu">
      <nav>
        <h2>Youth Cultural Assosiation</h2>
        
      </nav>
    </div>
    <input type="text" placeholder="search" style="background-color: aquamarine;" name="name" id="myInput" onkeyup="searchFun()">
    <script>
      
            const searchFun = () => {
                let filter = document.getElementById('myInput').value.toUpperCase();
                
                let myTable = document.getElementById('myTable');
                
                let tr = myTable.getElementsByTagName('tr');

                for(var i=0;i<tr.length;i++){
                    let td = tr[i].getElementsByTagName('td')[1];
                    let t1 = tr[i].getElementsByTagName('td')[0];
             
                    if(td || t1){
                        let textvlaue = td.textContent || td.innerHTML;
                        let pid = t1.textContent || t1.innerHTML;
                        if(textvlaue.toUpperCase().indexOf(filter)>-1 || pid.toUpperCase().indexOf(filter)>-1){
                            tr[i].style.display = "";
                        }
                        else{
                            tr[i].style.display = "none";
                        }
                    }
                }

            }
        
    </script>
    <!-- menu end -->
    </div>
    <!-- menu button -->
    <div class="knsl-menu-btn ml-10"><span></span></div>
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
              <h1 class="knsl-mb-20 knsl-h1-inner">Club Members</h1>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- banner end -->



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<div class="container-fluid mt-5 mb-4">
<div class="container-fluid col-lg-9 mt-4 mt-lg-0">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box table-responsive mb-0 bg-white p-4 shadow-sm">
          <table id="myTable" class="table manage-candidates-top mb-0">
            <thead>
              <tr>
                <th>Member Name</th>
                <th class="text-center">ID</th>
                <th class="action text-right">Mobile Number</th>
              </tr>
            </thead>
            <img src="" alt="">

            <tbody>
            <?php
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                    echo '
                      <tr class="candidates-list">
                <td class="title">
                  <div class="thumb">
                    <img class="img-fluid" src="img/1.jpg" alt="">
                  </div>
                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h5 class="mb-0"><a href="#">'.$row['name'].'</a></h5>
                      </div>
                      <div class="candidate-list-option">
                        <ul class="list-unstyled">
                          <li><i class="fas fa-map-marker-alt pr-1"></i>'.$row['addrs'].'</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="candidate-list-favourite-time text-center">
                  <a class="candidate-list-favourite order-2 text-danger" href="#"></a>
                  <span class="candidate-list-time order-1">'.$row['id'].'</span>
                </td>
                <td>
                  <ul class="list-unstyled mb-0 d-flex justify-content-end">
                  '.$row['phno'].'
                  </ul>
                </td>
              </tr>
                    ';
                  }
                }
              ?>
              
              <tr class="candidates-list">
                <td class="title">
                  <div class="thumb">
                    <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                  </div>
                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h5 class="mb-0"><a href="#">Ronald Bradley</a></h5>
                      </div>
                      <div class="candidate-list-option">
                        <ul class="list-unstyled">
                          <li><i class="fas fa-map-marker-alt pr-1"></i>Bhimavaram,534204</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="candidate-list-favourite-time text-center">
                  <a class="candidate-list-favourite order-2 text-danger" href="#"></i></a>
                  <span class="candidate-list-time order-1">123</span>
                </td>
                <td>
                  <ul class="list-unstyled mb-0 d-flex justify-content-end">
                    9640336946
                  </ul>
                </td>
              </tr>
              <tr class="candidates-list">
                <td class="title">
                  <div class="thumb">
                    <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="">
                  </div>
                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h5 class="mb-0"><a href="#">Rafael Briggs</a></h5>
                      </div>
                      <div class="candidate-list-option">
                        <ul class="list-unstyled">
                          <li><i class="fas fa-map-marker-alt pr-1"></i>Haines City, FL 33844</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="candidate-list-favourite-time text-center">
                  <a class="candidate-list-favourite order-2 text-danger" href="#"></i></a>
                  <span class="candidate-list-time order-1">123</span>
                </td>
                <td>
                  <ul class="list-unstyled mb-0 d-flex justify-content-end">
                    9640336946
                  </ul>
                </td>
              </tr>
              <tr class="candidates-list">
                <td class="title">
                  <div class="thumb">
                    <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                  </div>
                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h5 class="mb-0"><a href="#">Vickie Meyer</a></h5>
                      </div>
                      <div class="candidate-list-option">
                        <ul class="list-unstyled">
                          <li><i class="fas fa-map-marker-alt pr-1"></i>Minneapolis, MN 55406</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="candidate-list-favourite-time text-center">
                  <a class="candidate-list-favourite order-2 text-danger" href="#"></i></a>
                  <span class="candidate-list-time order-1">123</span>
                </td>
                <td>
                  <ul class="list-unstyled mb-0 d-flex justify-content-end">
                    9640336946
                  </ul>
                </td>
              </tr>
              <tr class="candidates-list">
                <td class="title">
                  <div class="thumb">
                    <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="">
                  </div>
                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h5 class="mb-0"><a href="#">Nichole Haynes</a></h5>
                      </div>
                      <div class="candidate-list-option">
                        <ul class="list-unstyled">
                          <li><i class="fas fa-map-marker-alt pr-1"></i>Botchergate, Carlisle</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="candidate-list-favourite-time text-center">
                  <a class="candidate-list-favourite order-2 text-danger" href="#"></i></a>
                  <span class="candidate-list-time order-1">123</span>
                </td>
                <td>
                  <ul class="list-unstyled mb-0 d-flex justify-content-end">
                    9640336946
                  </ul>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="text-center mt-3 mt-sm-3">
            <ul class="pagination justify-content-center mb-0">
              <li class="page-item disabled"> <span class="page-link">Prev</span> </li>
              <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  


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

