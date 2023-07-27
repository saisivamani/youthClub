<?php
include "connect.php";
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
		<link rel="stylesheet" href="vendor/font-awesome/css/all.min.css" />
		<link rel="stylesheet" href="vendor/boxicons/css/boxicons.min.css" />
		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css" />
		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.js"></script>
		<!--Sned Message Button-->
          <style>
            .send-message-btn {
             background-color: #3498db; 
             color: #fff; 
             border-radius: 5px; 
             padding: 5px 10px; 
			 font-size: 14px;
             cursor: pointer; 
            }
        </style>


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
                                            if (mysqli_num_rows($run) > 0) {
                                            while ($row = mysqli_fetch_assoc($run)) {
                                            echo '<tr>
                                             <td data-title="Reg Id" class="text-Start">' . $row['id'] . '</td>
                                             <td data-title="Name" class="text-Start">' . $row['name'] . '</td>
                                             <td data-title="Son OFF" class="text-Start">' . $row['sonoff'] . '</td>
                                             <td data-title="Membership Type" class="text-Start">' . $row['mship'] . '</td>
                                             <td data-title="Address" class="text-Start ">' . $row['addr1'] . '<br>' . $row['addr2'] . '<br>' . $row['addr3'] . '</td>
                                             <td data-title="Mobile Number" class="text-Start">' . $row['mobile'] . '</td>
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
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<script src="js/theme.init.js"></script>
		<!--Send message JS-->
        <script src="send_message.js"></script>

	</body>
</html>