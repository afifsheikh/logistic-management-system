<?php
session_start();


include("config.php");



?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Transcrew | Home</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<link href="assets/css/app.min.css" rel="stylesheet" />
	<script src="https://use.fontawesome.com/c64ad24e38.js"></script>
</head>

<body>

	<div id="app" class="app">

		<header id="header" class="app-header">

			<div class="mobile-toggler">
				<button type="button" class="menu-toggler" data-toggle="sidebar-mobile">
					<span class="bar"></span>
					<span class="bar"></span>
				</button>
			</div>


			<div class="brand">
				<div class="desktop-toggler">
					<button type="button" class="menu-toggler" data-toggle="sidebar-minify">
						<span class="bar"></span>
						<span class="bar"></span>
					</button>
				</div>
				<a href="#" class="brand-logo">
					<img src="assets/img/logo1.png" height="20px" />
				</a>
			</div>


			<div class="menu">
				<form class="menu-search" method="POST" name="header_search_form">
					<div class="menu-search-icon"><i class="fa fa-search"></i></div>
					<div class="menu-search-input">
						<input type="text" class="form-control" placeholder="Search menu..." />
					</div>
				</form>
				<!-- <div class="menu-item dropdown">
					<a href="#" data-toggle="dropdown" data-display="static" class="menu-link">
						<div class="menu-icon"><i class="fa fa-bell nav-icon"></i></div>
						<div class="menu-label">3</div>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-notification">
						<h6 class="dropdown-header text-gray-900 mb-1">Notifications</h6>
						<a href="#" class="dropdown-notification-item">
							<div class="dropdown-notification-icon">
								<i class="fa fa-receipt fa-lg fa-fw text-success"></i>
							</div>
							<div class="dropdown-notification-info">
								<div class="title">Your store has a new order for 2 items totaling $1,299.00</div>
								<div class="time">just now</div>
							</div>
							<div class="dropdown-notification-arrow">
								<i class="fa fa-chevron-right"></i>
							</div>
						</a>
						<a href="#" class="dropdown-notification-item">
							<div class="dropdown-notification-icon">
								<i class="far fa-user-circle fa-lg fa-fw text-muted"></i>
							</div>
							<div class="dropdown-notification-info">
								<div class="title">3 new customer account is created</div>
								<div class="time">2 minutes ago</div>
							</div>
							<div class="dropdown-notification-arrow">
								<i class="fa fa-chevron-right"></i>
							</div>
						</a>
						<a href="#" class="dropdown-notification-item">
							<div class="dropdown-notification-icon">
								<img src="assets/img/icon/android.svg" width="26px" alt="" />
							</div>
							<div class="dropdown-notification-info">
								<div class="title">Your android application has been approved</div>
								<div class="time">5 minutes ago</div>
							</div>
							<div class="dropdown-notification-arrow">
								<i class="fa fa-chevron-right"></i>
							</div>
						</a>
						<a href="#" class="dropdown-notification-item">
							<div class="dropdown-notification-icon">
								<img src="assets/img/icon/paypal.svg" width="26px" alt="" />
							</div>
							<div class="dropdown-notification-info">
								<div class="title">Paypal payment method has been enabled for your store</div>
								<div class="time">10 minutes ago</div>
							</div>
							<div class="dropdown-notification-arrow">
								<i class="fa fa-chevron-right"></i>
							</div>
						</a>
						<div class="p-2 text-center mb-n1">
							<a href="#" class="text-gray-800 text-decoration-none">See all</a>
						</div>
					</div>
				</div> -->
				<div class="menu-item dropdown">
					<a href="#" data-toggle="dropdown" data-display="static" class="menu-link">
						<div class="menu-img online">
							<img src="assets/img/user/user.jpg" alt="" class="mw-100 mh-100 rounded-circle" />
						</div>
						<div class="menu-text"><span class="__cf_email__"
								data-cfemail="3d4e585c5349555850587d5a505c5451135e5250"><?php echo $_SESSION['loginuser']; ?></span>
						</div>
					</a>
					<div class="dropdown-menu dropdown-menu-right mr-lg-3">
						<a class="dropdown-item d-flex align-items-center" href="#">Edit Profile <i
								class="fa fa-user-circle fa-fw ml-auto text-gray-400 f-s-16"></i></a>
						<a class="dropdown-item d-flex align-items-center" href="#">Inbox <i
								class="fa fa-envelope fa-fw ml-auto text-gray-400 f-s-16"></i></a>
						<a class="dropdown-item d-flex align-items-center" href="#">Calendar <i
								class="fa fa-calendar-alt fa-fw ml-auto text-gray-400 f-s-16"></i></a>
						<a class="dropdown-item d-flex align-items-center" href="#">Setting <i
								class="fa fa-wrench fa-fw ml-auto text-gray-400 f-s-16"></i></a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item d-flex align-items-center" href="page_login.php">Log Out <? session_destroy(); ?> <i
								class="fa fa-toggle-off fa-fw ml-auto text-gray-400 f-s-16"></i></a>
					</div>
				</div>
			</div>

		</header>


		<sidebar id="sidebar" class="app-sidebar">

			<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

				<div class="menu">
					<div class="menu-header">Menu</div>
					<!-- <div class="menu-item">
						<a href="index.php" class="menu-link">
							<span class="menu-icon"><i class="fa fa-laptop"></i></span>
							<span class="menu-text">Tracker</span>
						</a>
					</div> -->
					<div class="menu-item active">
						<a href="index.php" class="menu-link">
							<span class="menu-icon"><i class="fa fa-map"></i></span>
							<span class="menu-text">Tracker</span>
						</a>
					</div>
					<div class="menu-item">
						<a href="analytics.php" class="menu-link">
							<span class="menu-icon"><i class="fa fa-chart-pie"></i></span>
							<span class="menu-text">Analytics</span>
						</a>
					</div>
					<!-- <div class="menu-item has-sub">
						<a href="#" class="menu-link">
							<span class="menu-icon">
								<i class="fa fa-envelope"></i>
								<span class="menu-icon-label">6</span>
							</span>
							<span class="menu-text">Email</span>
							<span class="menu-caret"><b class="caret"></b></span>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="email_inbox.html" class="menu-link">
									<span class="menu-text">Inbox</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="email_compose.html" class="menu-link">
									<span class="menu-text">Compose</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="email_detail.html" class="menu-link">
									<span class="menu-text">Detail</span>
								</a>
							</div>
						</div>
					</div> -->
					<!-- <div class="menu-divider"></div>
					<div class="menu-header">Components</div> -->
					<!-- <div class="menu-item">
						<a href="widgets.html" class="menu-link">
							<span class="menu-icon"><i class="fa fa-qrcode"></i></span>
							<span class="menu-text">Widgets</span>
						</a>
					</div>
					<div class="menu-item has-sub">
						<a href="#" class="menu-link">
							<span class="menu-icon"><i class="fa fa-heart"></i></span>
							<span class="menu-text">UI Kits</span>
							<span class="menu-caret"><b class="caret"></b></span>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="ui_bootstrap.html" class="menu-link">
									<span class="menu-text">Bootstrap</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_buttons.html" class="menu-link">
									<span class="menu-text">Buttons</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_card.html" class="menu-link">
									<span class="menu-text">Card</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_icons.html" class="menu-link">
									<span class="menu-text">Icons</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_modal_notification.html" class="menu-link">
									<span class="menu-text">Modal & Notification</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_typography.html" class="menu-link">
									<span class="menu-text">Typography</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_tabs_accordions.html" class="menu-link">
									<span class="menu-text">Tabs & Accordions</span>
								</a>
							</div>
						</div>
					</div>
					<div class="menu-item has-sub">
						<a href="#" class="menu-link">
							<span class="menu-icon"><i class="fa fa-file-alt"></i></span>
							<span class="menu-text">Forms</span>
							<span class="menu-caret"><b class="caret"></b></span>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="form_elements.html" class="menu-link">
									<span class="menu-text">Form Elements</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="form_plugins.html" class="menu-link">
									<span class="menu-text">Form Plugins</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="form_wizards.html" class="menu-link">
									<span class="menu-text">Wizards</span>
								</a>
							</div>
						</div>
					</div>
					<div class="menu-item has-sub">
						<a href="#" class="menu-link">
							<span class="menu-icon"><i class="fa fa-table"></i></span>
							<span class="menu-text">Tables</span>
							<span class="menu-caret"><b class="caret"></b></span>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="table_elements.html" class="menu-link">
									<span class="menu-text">Table Elements</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="table_plugins.html" class="menu-link">
									<span class="menu-text">Table Plugins</span>
								</a>
							</div>
						</div>
					</div>
					<div class="menu-item has-sub">
						<a href="#" class="menu-link">
							<span class="menu-icon"><i class="fa fa-chart-bar"></i></span>
							<span class="menu-text">Charts</span>
							<span class="menu-caret"><b class="caret"></b></span>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="chart_js.html" class="menu-link">
									<span class="menu-text">Chart.js</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="chart_apex.html" class="menu-link">
									<span class="menu-text">Apexcharts.js</span>
								</a>
							</div>
						</div>
					</div>
					<div class="menu-item">
						<a href="map.html" class="menu-link">
							<span class="menu-icon"><i class="fa fa-map-marker-alt"></i></span>
							<span class="menu-text">Map</span>
						</a>
					</div>
					<div class="menu-item has-sub">
						<a href="#" class="menu-link">
							<span class="menu-icon"><i class="fa fa-code-branch"></i></span>
							<span class="menu-text">Layout</span>
							<span class="menu-caret"><b class="caret"></b></span>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="layout_starter.html" class="menu-link">
									<span class="menu-text">Starter Page</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="layout_fixed_footer.html" class="menu-link">
									<span class="menu-text">Fixed Footer</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="layout_full_height.html" class="menu-link">
									<span class="menu-text">Full Height</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="layout_full_width.html" class="menu-link">
									<span class="menu-text">Full Width</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="layout_boxed_layout.html" class="menu-link">
									<span class="menu-text">Boxed Layout</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="layout_minified_sidebar.html" class="menu-link">
									<span class="menu-text">Minified Sidebar</span>
								</a>
							</div>
						</div>
					</div> -->
					<div class="menu-item has-sub">
						<a href="#" class="menu-link">
							<span class="menu-icon"><i class="fa fa-globe"></i></span>
							<span class="menu-text">Pages</span>
							<span class="menu-caret"><b class="caret"></b></span>
						</a>
						<div class="menu-submenu">
							<!-- <div class="menu-item">
								<a href="page_gallery.html" class="menu-link">
									<span class="menu-text">Gallery</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="page_search_results.html" class="menu-link">
									<span class="menu-text">Search Results</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="page_coming_soon.html" class="menu-link">
									<span class="menu-text">Coming Soon Page</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="page_404_error.html" class="menu-link">
									<span class="menu-text">404 Error Page</span>
								</a>
							</div> -->
							<div class="menu-item">
								<a href="page_login.php" class="menu-link">
									<span class="menu-text">Login</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="page_register.php" class="menu-link">
									<span class="menu-text">Register</span>
								</a>
                            </div>
                            <div class="menu-item">
								<a href="index.php" class="menu-link">
									<span class="menu-text">Dashboard</span>
								</a>
							</div>
						</div>
					</div>
					<!-- <div class="menu-divider"></div>
					<div class="menu-header">Users</div>
					<div class="menu-item">
						<a href="profile.html" class="menu-link">
							<span class="menu-icon"><i class="fa fa-user-circle"></i></span>
							<span class="menu-text">Profile</span>
						</a>
					</div>
					<div class="menu-item">
						<a href="calendar.html" class="menu-link">
							<span class="menu-icon"><i class="fa fa-calendar"></i></span>
							<span class="menu-text">Calendar</span>
						</a>
					</div>
					<div class="menu-item">
						<a href="settings.html" class="menu-link">
							<span class="menu-icon"><i class="fa fa-cog"></i></span>
							<span class="menu-text">Settings</span>
						</a>
					</div>
					<div class="menu-item">
						<a href="helper.html" class="menu-link">
							<span class="menu-icon"><i class="fa fa-question-circle"></i></span>
							<span class="menu-text">Helper</span>
						</a>
					</div> -->
					<!-- <div class="p-3 px-4 mt-auto hide-on-minified">
						<a href="https://seantheme.com/studio/documentation/index.php"
							class="btn btn-block btn-secondary font-weight-600 rounded-pill">
							<i class="fa fa-code-branch mr-1 ml-n1 opacity-5"></i> Documentation
						</a>
					</div> -->
				</div>

			</div>


			<button class="app-sidebar-mobile-backdrop" data-dismiss="sidebar-mobile"></button>

		</sidebar>


		<div id="content" class="app-content">
			<h1 class="page-header mb-3">
				Transcrew <small>Courier & Delivery Service.</small>
			</h1>



			<div class="row">
				<!--FIRST ROW-->

				<!--TABLE-->
				<div class="col-xl-12" style="background-color: white;">
					<h3 style="padding: 30px;">Delivery Status</h2>
						<table class="table table-light">
							<thead>
								<tr>
								<th scope="col">S.No</th>
								<th scope="col">Desc</th>
                                
                                <th scope="col">Rec Id</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date</th>
								<th scope="col">User</th>
                                <th scope="col">Role</th>
                                <th scope="col">Lat</th>
                                <th scope="col">Lon</th>
								</tr>
							</thead>
							<tbody>
							<?php
	
	 
	 $tableQueryOnUser="SELECT * FROM user u join package p on p.u_id = u.u_id join p_status s on p.p_id = s.p_id and u.role in ('sender' , 'receiver') ";
	 $result = $conn-> query($tableQueryOnUser);
	 $res = $conn-> query($tableQueryOnUser);

	if ($res->num_rows > 0) {
		// output data of each row
		$i=0;
		while($row = $res->fetch_assoc()) {
			//$pkg_id = $row['p_id'];
		  $i++;
			
?>
								<tr>
								<th scope="row" style="border-radius: 10px;height: 10px;"><?php echo $i;?></th>
								<td ><?php echo $row['desc']; ?></td>
								<td> <?php echo $row['hash']; ?></td>
                                <td> <?php echo $row['status']; ?></td>
                                <td> <?php echo $row['timestamp']; ?></td>
								<td> <?php echo $row['userName']; ?></td>
								<td> <?php echo $row['role']; ?></td>
                                <td> <?php echo $row['latitude']; ?></td>
                                <td> <?php echo $row['longitude']; ?></td>
								<td> <button class="btn btn-danger">delete</button></td>
								</tr>
								<?php
      }
      } else {
          echo "0 results";
      }
  ?>
							</tbody>
						</table>
				</div>
			</div>

			<div class="row " style="margin-top: 50px;">
				<!--FIRST ROW-->

				<!--TABLE-->

				<div class="col-xl-6" style="background-color: white; margin-right: 15px;padding: 30px;">
					<h3>Package Info</h2>
						<div>
						<form action="" method="post">
						<select name="pkg_id" class="browser-default custom-select">
	  						<?php  while ($pkgData = mysqli_fetch_array($result)):; ?>
							  <option value="<?php echo $pkgData['p_id']; ?>" ><?php echo $pkgData['desc'] ?></option>
								<?php endwhile; ?>
						</select>
						<input type="submit" name="submit" value="Select" class="btn btn-success">
						</form>
						<?php

    if(isset($_POST['submit'])){
    if(!empty($_POST['pkg_id'])) {
        $selected = $_POST['pkg_id'];
        // echo 'You have chosen: ' . $selected;
    } else {
        // echo 'Please select the value.';
    }
	}

?>


<table class="table table-light">
							<thead>
								<tr>
								<th scope="col">S.No</th>
								<th scope="col">Desc</th>
                                <th scope="col">lenght</th>
                                <th scope="col">height</th>
                                <th scope="col">weight</th>
								<th scope="col">width</th>
                                <th scope="col">qty</th>
								</tr>
							</thead>
							<tbody>
							
<?php 




	if(isset($selected)){

		//Check Block chain


		
	$EpkgSql = " SELECT * FROM  package p where p_id = '$selected' ";
	$datarow = $conn-> query($EpkgSql);
	if ($datarow->num_rows > 0) {
		// output data of each row
		while ($EData = $datarow->fetch_assoc()){
			$desc = $EData['desc'];
			$len = $EData['length']; 
			$hei = $EData['height']; 
			$wei = $EData['weight']; 
			$wid = $EData['width']; 
			$qty = $EData['qty'];
			$rti = $EData['hash'];
			$sloc = $EData['send_loc'];
			$rloc = $EData['rec_loc'];
		}
	
		$string = $qty.$len.$wei.$hei.$wid.$desc.$rti.$sloc.$rloc;
	
		$hash_val = crypt('ripemd160', $string);
	
		//echo $hash_val;
		//$sqlEncrypt = "INSERT INTO tbl_encrypt (`id`,`hash_val`) VALUES (NULL,'.$hash_val.')";
	
		$sqlEncrypt = "SELECT * FROM tbl_encrypt ";
		$encryption = $conn->query($sqlEncrypt);
		
		echo $hash_val;
		echo "<br>";
			while($Edata = $encryption->fetch_assoc()){
	
				if(hash_equals($Edata['hash_val'], $hash_val)){
					echo $Edata['hash_val']."<br>";
					echo 'data not compromised';
					break;
				}else{
					 echo $Edata['hash_val']."<br>";
					// echo $hash_val;
					echo 'data compromised';
					break;
					//exit();
				}
				// echo $Edata['hash_val'];
				// 	echo $hash_val;
			}
		}

		//block code end


		$pkgSql="SELECT * FROM  package p where p_id = '$selected' ";
		$run = $conn-> query($pkgSql);
		if ($run->num_rows > 0) {
		// output data of each row
		$i=0;
		while($pkgdetData = $run->fetch_assoc()) {
			//$pkg_id = $row['p_id'];
	  	$i++;
	
	

	
?>
<tr>
								<th scope="row" style="border-radius: 10px;height: 10px;"><?php echo $i;?></th>
								<td ><?php echo $pkgdetData['desc']; ?></td>
								<td> <?php echo $pkgdetData['length']; ?></td>
                                <td> <?php echo $pkgdetData['height']; ?></td>
                                <td> <?php echo $pkgdetData['weight']; ?></td>
								<td> <?php echo $pkgdetData['width']; ?></td>
								<td> <?php echo $pkgdetData['qty']; ?></td>
								</tr>
								<?php
								
}
} else {
	echo "No Data Found";
}

								?>
								</tbody>
						</table>
						</div>

				</div>


				<div class="col-xl-4" style="background-color: white; padding: 30px;">
					<h3>Customer Info</h3>
					<div>
					<?php
						$userSql="SELECT * FROM  package p join user u on u.u_id = p.u_id where p.p_id = '$selected' ";
						// $userRes = $conn-> query($userSql);
						$userRes = mysqli_query($conn,$userSql);
						$userData = mysqli_fetch_array($userRes);
					?>

						<h6>Customer Name</h6>
						<p><?php echo $userData['userName']; ?></p>
						<h6>Contact Phone Number</h6>
						<p><?php echo $userData['contactNo']; ?></p>
						<h6>Address</h6>
						<p><?php echo $userData['address']; ?></p>
						<h6>CNIC</h6>
						<p><?php echo $userData['cnic']; ?></p>
						<h6>Role</h6>
						<p><?php echo $userData['role']; ?></p>
						<h6>Tracking Id</h6>
						<p><?php echo $userData['hash']; } ?></p>
					</div>
				</div>
			</div>

			<!--END FIRST ROW-->






			<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>

		</div>


		<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
		<script src="assets/js/app.min.js" type="7feb3652445ee9c1a145a29e-text/javascript"></script>


		<script src="assets/plugins/apexcharts/dist/apexcharts.min.js"
			type="7feb3652445ee9c1a145a29e-text/javascript"></script>
		<script src="assets/js/demo/dashboard.demo.js" type="7feb3652445ee9c1a145a29e-text/javascript"></script>

		<script type="7feb3652445ee9c1a145a29e-text/javascript">
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53034621-1', 'auto');
	  ga('send', 'pageview');

	</script>
		<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"
			data-cf-settings="7feb3652445ee9c1a145a29e-|49" defer=""></script>
</body>

</html>