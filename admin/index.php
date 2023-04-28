<!doctype html>
<html class="fixed sidebar-light">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Youth Club Admin</title>

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

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

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/select2/css/select2.css" />
		<link rel="stylesheet" href="vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
		<link rel="stylesheet" href="vendor/datatables/media/css/dataTables.bootstrap5.css" />
		

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
					<div class="inner-wrapper">


					<div class="row">
						<div class="col-lg-12">
							<div class="row mb-3">
								<div class="col-xl-4">
									<section class="card card-featured-left card-featured-primary mb-3">
										<div class="card-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-primary">
														<i class="fas fa-user"></i>
													</div>
												</div>
												<div class="widget-summary-col">

													<div class="summary mt-3">
														<h4 class="title">Total Members</h4>
														<div class="info">
															<strong class="amount">1000+</strong>
														</div>
													</div>
													
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-xl-4">
									<section class="card card-featured-left card-featured-secondary mb-3">
										<div class="card-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-secondary">
														<i class="fas fa-user"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary mt-3">
														<h4 class="title">DONOR Members</h4>
														<div class="info">
															<strong class="amount">429</strong>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>

								<div class="col-xl-4">
									<section class="card card-featured-left card-featured-tertiary">
										<div class="card-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-tertiary">
														<i class="fas fa-user"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary mt-3">
														<h4 class="title">Life Members</h4>
														<div class="info">
															<strong class="amount">634</strong>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
					</div>


					<!-- start: page -->






					<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header" style="display:flex;flex-direction:row;gap:100px;justify-content:space-between;">
									<table>
                                     <tr>
                                      <td>
                                        <h2 class="card-title mt-2"  style="text-transform:uppercase;">Youth Club Members</h2>
                                      </td>
                                        <div class="col-lg-6">
											<div id="datatable-default_filter" class="dataTables_filter">
												<label><input type="search" class="form-control pull-right" placeholder="Search by reg id or name..." aria-controls="datatable-default"></label>
											</div>
										</div>
									</tr>
									</table>
										

										

									</header>


									<div class="input-group">
  
									
									<div class="card-body">
										<table class="table table-no-more table-bordered table-striped mb-0">
										<thead>
												<tr>
													<th class="text-center">Name</th>
													<th class="text-center">Address</th>
													<th class="text-center">Membership Type</th>
													<th class="text-center ">Reg Id</th>
													<th class="text-center">Mobile Number</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td data-title="Name" class="text-center">Mani</td>
													<td data-title="Address" class="text-center">Bhimavaram</td>
													<td data-title="Membership Type" class="text-center">Donor</td>
													<td data-title="Reg Id" class="text-center ">1</td>
													<td data-title="Mobile Number" class="text-center">9640336946</td>
												</tr>
							
												<tr>
													<td data-title="Name" class="text-center">Ravi</td>
													<td data-title="Address" class="text-center">Bhimavaram</td>
													<td data-title="Membership Type" class="text-center">Donor</td>
													<td data-title="Reg Id" class="text-center ">2</td>
													<td data-title="Mobile Number" class="text-center">9052727402</td>
												</tr>
												
												
											</tbody>
										</table>
									</div>
								</section>
							</div>
						</div>




					











					<!-- end: page -->
					
					<br>	
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<h2 class="card-title">Governing Body</h2>
									</header>
									<div class="card-body">
										<table class="table table-no-more table-bordered table-striped mb-2">
											<thead>
												<tr>
													<th class="text-center">Name</th>
													<th class="text-center">Designation</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td data-title="Name" class="text-center">G.Venkata Narasimha Raju</td>
													<td data-title="Designation" class="text-center">Honourable President</td>
												</tr>
												
												<tr>
													<td data-title="Name" class="text-center">P.V.L.Narasimha Raju</td>
													<td data-title="Designation" class="text-center">President</td>
												</tr>


												<tr>
													<td data-title="Name" class="text-center">M.V.N.Sita Rama Raju</td>
													<td data-title="Designation" class="text-center">Vice President</td>
												</tr>

												<tr>
													<td data-title="Name" class="text-center">P.V.Venkata Srinivasa Raju</td>
													<td data-title="Designation" class="text-center">Vice President</td>
												</tr>

												<tr>
													<td data-title="Name" class="text-center">K.Venkata Satyanarayana Raju</td>
													<td data-title="Designation" class="text-center">Secretary</td>
												</tr>


												<tr>
													<td data-title="Name" class="text-center">M.Suryanarayana Raju</td>
													<td data-title="Designation" class="text-center">Future Secretary</td>
												</tr>

												<tr>
													<td data-title="Name" class="text-center">V.Rama Krishnam Raju</td>
													<td data-title="Designation" class="text-center">Joint Secretary</td>
												</tr>
												
												<tr>
													<td data-title="Name" class="text-center">K.Satyanarayana Raju</td>
													<td data-title="Designation" class="text-center">Treasurer</td>
												</tr>

												<tr>
													<td data-title="Name" class="text-center">B.Ranga Raju</td>
													<td data-title="Designation" class="text-center">Director</td>
												</tr>

												<tr>
													<td data-title="Name" class="text-center">K.Srinivasa Raju</td>
													<td data-title="Designation" class="text-center">Director</td>
												</tr>

												<tr>
													<td data-title="Name" class="text-center">S.B.Suryanarayana Raju</td>
													<td data-title="Designation" class="text-center">Director</td>
												</tr>

												<tr>
													<td data-title="Name" class="text-center">C.Phanindra Varma</td>
													<td data-title="Designation" class="text-center">Director</td>
												</tr>

												<tr>
													<td data-title="Name" class="text-center">G.Padma Raju</td>
													<td data-title="Designation" class="text-center">Director</td>
												</tr>

												<tr>
													<td data-title="Name" class="text-center">P.Venkatapathi Raju</td>
													<td data-title="Designation" class="text-center">Director</td>
												</tr>

												<tr>
													<td data-title="Name" class="text-center">A.Venkata Naga Raju</td>
													<td data-title="Designation" class="text-center">Director</td>
												</tr>

											</tbody>
										</table>
									</div>
								</section>
							</div>
						</div>
				</section>





				











					<!-- end: page -->
				</section>





					<!-- end: page -->
				</section>
			</div>			
		</section>


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

		<!-- Specific Page Vendor -->
		<script src="vendor/select2/js/select2.js"></script>
		<script src="vendor/datatables/media/js/jquery.dataTables.min.js"></script>
		<script src="vendor/datatables/media/js/dataTables.bootstrap5.min.js"></script>

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