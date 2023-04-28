<?php
$conn = new mysqli("localhost","root","","youthclub");
// $conn = new mysqli("localhost","ycabvrm","ycabvrm#1990","youthclub");
$run = mysqli_query($conn,"select * from members order by id");
?>




<!doctype html>
<html class="fixed sidebar-light">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Youth Club Admin</title>

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/all.min.css" />
		<link rel="stylesheet" href="vendor/boxicons/css/boxicons.min.css" />
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />
		<link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.css" />
		<link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.theme.css" />
		<link rel="stylesheet" href="vendor/bootstrap-multiselect/css/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<?php
			include "navbar.php";
			?>
			<!-- end: header -->

				

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Youth Cultural Association</h2>
					</header>
					<!-- start: page -->
					<br><br><br><br><br>	
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header" style="display:flex;flex-direction:row;gap:100px;justify-content:space-between;">
									<table >
                                     <tr>
                                      <td>
                                        <h2 class="card-title mt-2"  style="text-transform:uppercase;">Youth Club Members</h2>
                                      </td>
                                        <div class="col-lg-6">
											<div id="datatable-default_filter" class="dataTables_filter">
												<label><input type="search" id="myInput" onkeyup="searchFun()" class="form-control pull-right" placeholder="Search by reg id or name..." aria-controls="datatable-default"></label>
											</div>
										</div>
									</tr>
									</table>
										

										

									</header>


									<div class="input-group">
  
									
									<div class="card-body">
										<table id="myTable" class="table table-no-more table-bordered table-striped mb-0">
											<thead>
												<tr>
													<th class="text-Start ">Reg Id</th>
													<th class="text-Start">Name</th>
													<th class="text-Start">Parent</th>
													<th class="text-Start">Membership Type</th>
													<th class="text-Start">Address</th>
													<th class="text-Start">Mobile Number</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$result = array();
													if(mysqli_num_rows($run)>0){
														while($row = mysqli_fetch_assoc($run)){
															$result[] = $row;
														}
														for ($i = 0; $i < 10 && $i < count($result); $i++) {
															echo '<tr>
															<td data-title="Reg Id" class="text-Start">'.$result[$i]['id'].'</td>
															<td data-title="Name" class="text-Start">'.$result[$i]['name'].'</td>
															<td data-title="Son OFF" class="text-Start">'.$result[$i]['sonoff'].'</td>
															<td data-title="Membership Type" class="text-Start">'.$result[$i]['mship'].'</td>
															<td data-title="Address" class="text-Start ">'.$result[$i]['addr1'].'<br>'.$result[$i]['addr2'].'<br>'.$result[$i]['addr3'].'</td>
															<td data-title="Mobile Number" class="text-Start">'.$result[$i]['mobile'].'</td>
														</tr>';
														}
														for ($i = 10; $i <= mysqli_num_rows($run) && $i < count($result); $i++) {
															echo '<tr style="display: none;">
															<td data-title="Reg Id" class="text-Start">'.$result[$i]['id'].'</td>
															<td data-title="Name" class="text-Start">'.$result[$i]['name'].'</td>
															<td data-title="Son OFF" class="text-Start">'.$result[$i]['sonoff'].'</td>
															<td data-title="Membership Type" class="text-Start">'.$result[$i]['mship'].'</td>
															<td data-title="Address" class="text-Start ">'.$result[$i]['addr1'].'<br>'.$result[$i]['addr2'].'<br>'.$result[$i]['addr3'].'</td>
															<td data-title="Mobile Number" class="text-Start">'.$result[$i]['mobile'].'</td>
														</tr>';
														}
													}
												?>
												<!-- <tr>
													<td data-title="Name" class="text-end">Mani</td>
													<td data-title="Address" class="text-end">Bhimavaram</td>
													<td data-title="Membership Type" class="text-end">Donor</td>
													<td data-title="Reg Id" class="text-end ">1</td>
													<td data-title="Mobile Number" class="text-end">9640336946</td>
												</tr> -->
												
												
											</tbody>
										</table>
									</div>
								</section>
							</div>
						</div>

					<!-- end: page -->
				</section>
			</div>			
		</section>

<script>
      
	const searchFun = () => {
	let filter = document.getElementById('myInput').value.toUpperCase();
          
  	let myTable = document.getElementById('myTable');
  
  	let tr = myTable.getElementsByTagName('tr');

  	for(var i=0;i<tr.length;i++){
      let td = tr[i].getElementsByTagName('td')[1];
      let t1 = tr[i].getElementsByTagName('td')[0];
    //   let t2 = tr[i].getElementsByTagName('td')[2];
    //   let t3 = tr[i].getElementsByTagName('td')[3];
       
    if(td || t1){
    let textvlaue = td.textContent || td.innerHTML;
    let pid = t1.textContent || t1.innerHTML;
    // let mob = t3.textContent || t3.innerHTML;
    // let mid = t2.textContent || t2.innerHTML;
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

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.js"></script>
		<script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="vendor/popper/umd/popper.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="vendor/common/common.js"></script>
		<script src="vendor/nanoscroller/nanoscroller.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="vendor/jquery-placeholder/jquery.placeholder.js"></script>

		<!-- Specific Page Vendor -->
		<script src="vendor/jquery-ui/jquery-ui.js"></script>
		<script src="vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="vendor/jquery-appear/jquery.appear.js"></script>
		<script src="vendor/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.js"></script>
		<script src="vendor/flot/jquery.flot.js"></script>
		<script src="vendor/flot.tooltip/jquery.flot.tooltip.js"></script>
		<script src="vendor/flot/jquery.flot.pie.js"></script>
		<script src="vendor/flot/jquery.flot.categories.js"></script>
		<script src="vendor/flot/jquery.flot.resize.js"></script>
		<script src="vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="vendor/raphael/raphael.js"></script>
		<script src="vendor/morris/morris.js"></script>
		<script src="vendor/gauge/gauge.js"></script>
		<script src="vendor/snap.svg/snap.svg.js"></script>
		<script src="vendor/liquid-meter/liquid.meter.js"></script>
		<script src="vendor/jqvmap/jquery.vmap.js"></script>
		<script src="vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

		<!-- Examples -->
		<script src="js/examples/examples.dashboard.js"></script>

	</body>
</html>