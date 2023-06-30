<?php
session_start();

if(empty($_SESSION['pass'])){
	header("location:login.php");
}
include "connect.php";
$run = mysqli_query($conn,"select * from members order by id");


?>


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
		<link rel="stylesheet" href="vendor/font-awesome/css/all.min.css" />
		<link rel="stylesheet" href="vendor/boxicons/css/boxicons.min.css" />
		<link rel="stylesheet" href="css/theme.css" />

		<link rel="stylesheet" href="css/skins/default.css" />

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
									<header class="card-header" style="display:flex; flex-direction:row;gap:100px;justify-content:space-between;">
									<table>
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
															<td data-title="Mobile Number" class="text-Start">'.$result[$i]['mobile'].'<br>'.$result[$i]['mobile2'].'</td>
														</tr>';
														}
														for ($i = 10; $i <= mysqli_num_rows($run) && $i < count($result); $i++) {
															echo '<tr style="display: none;">
															<td data-title="Reg Id" class="text-Start">'.$result[$i]['id'].'</td>
															<td data-title="Name" class="text-Start">'.$result[$i]['name'].'</td>
															<td data-title="Son OFF" class="text-Start">'.$result[$i]['sonoff'].'</td>
															<td data-title="Membership Type" class="text-Start">'.$result[$i]['mship'].'</td>
															<td data-title="Address" class="text-Start ">'.$result[$i]['addr1'].'<br>'.$result[$i]['addr2'].'<br>'.$result[$i]['addr3'].'</td>
															<td data-title="Mobile Number" class="text-Start">'.$result[$i]['mobile'].'<br>'.$result[$i]['mobile2'].'</td>
														</tr>';
														}
													}
												?>
												
												
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
													<th class="text-start">Name</th>
													<th class="text-start">Designation</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td data-title="Name" class="text-start">G.Venkata Narasimha Raju</td>
													<td data-title="Designation" class="text-start">Honourable President</td>
												</tr>
												
												<tr>
													<td data-title="Name" class="text-start">P.V.L.Narasimha Raju</td>
													<td data-title="Designation" class="text-start">President</td>
												</tr>


												<tr>
													<td data-title="Name" class="text-start">M.V.N.Sita Rama Raju</td>
													<td data-title="Designation" class="text-start">Vice President</td>
												</tr>

												<tr>
													<td data-title="Name" class="text-start">P.V.Venkata Srinivasa Raju(Subhash)</td>
													<td data-title="Designation" class="text-start">Vice President</td>
												</tr>

												<tr>
													<td data-title="Name" class="text-start">K.Venkata Satyanarayana Raju</td>
													<td data-title="Designation" class="text-start">Secretary</td>
												</tr>


												<tr>
													<td data-title="Name" class="text-start">M.Suryanarayana Raju</td>
													<td data-title="Designation" class="text-start">Future Secretary</td>
												</tr>

												<tr>
													<td data-title="Name" class="text-start">V.Rama Krishnam Raju</td>
													<td data-title="Designation" class="text-start">Joint Secretary</td>
												</tr>
												
												<tr>
													<td data-title="Name" class="text-start">K.Satyanarayana Raju</td>
													<td data-title="Designation" class="text-start">Treasurer</td>
												</tr>

												<tr>
													<td data-title="Name" class="text-start">B.Ranga Raju</td>
													<td data-title="Designation" class="text-start">Director</td>
												</tr>

												<tr>
													<td data-title="Name" class="text-start">K.Srinivasa Raju</td>
													<td data-title="Designation" class="text-start">Director</td>
												</tr>

												<tr>
													<td data-title="Name" class="text-start">S.B.Suryanarayana Raju</td>
													<td data-title="Designation" class="text-start">Director</td>
												</tr>

												<tr>
													<td data-title="Name" class="text-start">C.Phanindra Varma</td>
													<td data-title="Designation" class="text-start">Director</td>
												</tr>

												<tr>
													<td data-title="Name" class="text-start">G.Padma Raju</td>
													<td data-title="Designation" class="text-start">Director</td>
												</tr>

												<tr>
													<td data-title="Name" class="text-start">P.Venkatapathi Raju</td>
													<td data-title="Designation" class="text-start">Director</td>
												</tr>

												<tr>
													<td data-title="Name" class="text-start">A.Venkata Naga Raju</td>
													<td data-title="Designation" class="text-start">Director</td>
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
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="js/theme.js"></script>
		<script src="js/theme.init.js"></script>


	</body>
</html>