<?php
session_start();


include("config.php");


class Block
{
	public $nonce;

	public function __construct($index, $timestamp, $data, $previousHash = null)
	{
		$this->index = $index;
		$this->timestamp = $timestamp;
		$this->data = $data;
		$this->previousHash = $previousHash;
		$this->hash = $this->calculateHash();
		$this->nonce = 0;
	}

	public function calculateHash()
	{
		return hash("ripemd160", $this->index.$this->previousHash.$this->timestamp.((string)$this->data).$this->nonce);
	}
}

/**
* A simple blockchain class with proof-of-work (mining).
*/
class BlockChain
{
/**
 * Instantiates a new Blockchain.
 */
public function __construct()
{
	$this->chain = [$this->createGenesisBlock()];
	// $this->difficulty = 4;
}

/**
 * Creates the genesis block.
 */
private function createGenesisBlock()
{
	return new Block(0, strtotime("2017-01-01"), "Genesis Block");
}

/**
 * Gets the last block of the chain.
 */
public function getLastBlock()
{
	return $this->chain[count($this->chain)-1];
}

/**
 * Pushes a new block onto the chain.
 */
public function push($block)
{
	$block->previousHash = $this->getLastBlock()->hash;
	// $this->mine($block);
	array_push($this->chain, $block);
}

/**
 * Mines a block.
 */
// public function mine($block)
// {
//     while (substr($block->hash, 0, $this->difficulty) !== str_repeat("0", $this->difficulty)) {
//         $block->nonce++;
//         $block->hash = $block->calculateHash();
//     }

//     echo "Block mined: ".$block->hash."\n";
// }

/**
 * Validates the blockchain's integrity. True if the blockchain is valid, false otherwise.
 */
public function isValid()
{
	for ($i = 1; $i < count($this->chain); $i++) {
		$currentBlock = $this->chain[$i];
		$previousBlock = $this->chain[$i-1];

		if ($currentBlock->hash != $currentBlock->calculateHash()) {
			return false;
		}

		if ($currentBlock->previousHash != $previousBlock->hash) {
			return false;
		}
	}

	return true;
}
}


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
								data-cfemail="3d4e585c5349555850587d5a505c5451135e5250"><?php
								if($_SESSION['loginuser'] == 'undefined' || $_SESSION['loginuser'] == null || $_SESSION['loginuser'] == '' || $_SESSION['loginuser'] == 'not logged in'){ 
									 echo "<script type=\"text/javascript\">".
       									  "alert('User Not Logged In');".
											 "</script>";
											$_SESSION['loginuser'] = 'not logged in';
											echo $_SESSION['loginuser'];
											echo '<script> location.replace("page_login.php"); </script>';
											 }
										   else
										   {echo $_SESSION['loginuser'];
											}
										    ?></span>
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
						<a class="dropdown-item d-flex align-items-center" href="page_login.php">Log Out <?   session_unset(); session_destroy(); $_SESSION['loginuser'] == ''; ?> <i
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
					<div class="menu-item">
						<a href="user.php" class="menu-link">
							<span class="menu-icon"><i class="fa fa-user"></i></span>
							<span class="menu-text">Users</span>
						</a>
					</div>
                    <div class="menu-item">
						<a href="blockchain.php" class="menu-link">
							<span class="menu-icon"><i class="fa fa-chain"></i></span>
							<span class="menu-text">Block Chain process</span>
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
				<div class="col-sm-12" style="background-color: white;">
					<h3 style="padding: 30px;">Encrypted Data</h2>
						<table class="table table-light">
							<thead>
								<tr>
								<th scope="col">S.No</th>
                                <th scope="col">hash</th>
                                <th scope="col">date/time</th>
								</tr>
							</thead>
							<tbody>
							<?php
	
	 
     $tableQueryOnUser="SELECT * FROM tbl_encrypt u WHERE u.deleted <> 'deleted' ";
	 $result = $conn-> query($tableQueryOnUser);
     $res = $conn-> query($tableQueryOnUser);
     
     $tableQueryOnpkg="SELECT * FROM package ";
     $resultPkg = $conn-> query($tableQueryOnpkg);


	if ($res->num_rows > 0) {
		// output data of each row
		$i=0;
		while($row = $res->fetch_assoc()) {
			//$pkg_id = $row['p_id'];
		  $i++;
			
?>
								<tr>
								<th scope="row" style="border-radius: 10px;height: 10px;"><?php echo $i;?></th>
							
								<td> <?php echo $row['hash_val']; ?></td>
                                <td> <?php echo $row['timestamp']; ?></td>
								<td> 	<form action="" method="post">
						<select name="del" class="browser-default custom-select" style="visibility: hidden;">
							  <option value="<?php echo $row['id']; ?>" ><?php echo $row['hash_val'] ?></option>
						</select>
						<button name="delbtn" class="btn btn-danger"  style="margin-top:-10%;">Delete</button>
						</form></td>
								</tr>
								<?php
	  }
	  //soft delete
	//   if(isset($_POST['submit'])){
		if(!empty($_POST['del'])) {
			$delrec = $_POST['del'];
			// soft delete query

			$delSQL = "UPDATE tbl_encrypt SET `deleted` = 'deleted' WHERE `id` = ".$delrec." ";
			$conn->query($delSQL);
			
			
			echo("<meta http-equiv='refresh' content='1'>");
			 //echo 'You have chosen: ' . $delrec;
		} else {
			 //echo 'Please select the value.';
		}
	//}

      } else {
          echo "no records found";
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
					<h3>Smart Contract</h2>
						<div>
						<form action="" method="post">
						<select name="pkg_id" class="browser-default custom-select">
	  						<?php  while ($pkgData = mysqli_fetch_array($resultPkg)):; ?>
							  <option value="<?php echo $pkgData['p_id']; ?>" ><?php echo $pkgData['p_id'] ?></option>
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


<!-- <table class="table table-light">
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
							<tbody> -->
							
<?php 




	if(isset($selected)){

		//Check Block chain


	$countForBC = 1;
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

			$stringForBlockchain = $qty.$len.$wei.$hei.$wid.$desc.$rti.$sloc.$rloc;
			$hash_valForBC = hash('ripemd160', $stringForBlockchain);
			$testCoin = new BlockChain();
			$testCoin->push(new Block($countForBC, strtotime("now"), $hash_valForBC));
			echo 'Chain :'.$testCoin->chain[$countForBC]->data."<br>";
			$countForBC++;

		}
	
		$string = $qty.$len.$wei.$hei.$wid.$desc.$rti.$sloc.$rloc;
	
		$hash_val = hash('ripemd160', $string);
	
		//echo $hash_val;
		//$sqlEncrypt = "INSERT INTO tbl_encrypt (`id`,`hash_val`) VALUES (NULL,'.$hash_val.')";
	
		$sqlEncrypt = "SELECT * FROM tbl_encrypt ";
		$encryption = $conn->query($sqlEncrypt);
		
		// echo $hash_val;
        // echo "<br>";
        $int = 1;
		// echo $hash_val;
		// echo "<br>";
		//echo "<h3>Smart Contract</h3><br>";
			while($Edata = $encryption->fetch_assoc()){
    
                echo "<span style='font-size:25px;'>Record :$int</span><br>";
				echo 'treversing chain:'.$Edata['hash_val']."<br><br>";
					echo 'package hash :'.$hash_val."<br><br>";
					echo 'time/date :'.$Edata['timestamp']."<br><br>";
					$int++;	

				if(hash_equals($Edata['hash_val'], $hash_val)){
                    echo "<br><br><br>";
                    echo "<h5>Matched Block chain</h5>";
					echo 'treversing chain:'.$Edata['hash_val']."<br><br>";
                    echo 'package hash :'.$hash_val."<br><br>";
                    echo 'Block chain secured';
                    
					$pkgSql="SELECT * FROM  package p where p_id = '$selected' ";
		$run = $conn-> query($pkgSql);
		if ($run->num_rows > 0) {
		// output data of each row
		$i=0;
		$Bcflag = true;
		while($pkgdetData = $run->fetch_assoc()) {
			//$pkg_id = $row['p_id'];
	  	$i++;
	
?>

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
					<h3>Contract Detail</h3>
					<div>
					<?php
                        $userSql="SELECT * FROM  package p join user u on u.u_id = p.rec_id where p.p_id = '$selected' ";
                        $senSql="SELECT * FROM  package p join user u on u.u_id = p.u_id where p.p_id = '$selected' ";
						// $userRes = $conn-> query($userSql);
						$userRes = mysqli_query($conn,$userSql);
                        $userData = mysqli_fetch_array($userRes);
                        
                        $userSen = mysqli_query($conn,$senSql);
						$userSenData = mysqli_fetch_array($userSen);
					?>
                        <h6>Package Desc</h6>
						<p><?php echo $userData['desc']; ?></p>
			
                        <h6>Sender Name</h6>
						<p><?php echo $userSenData['userName']; ?></p>
						<h6>Contact Phone Number</h6>
						<p><?php echo $userSenData['contactNo']; ?></p>
						<h6>Address</h6>
						<p><?php echo $userSenData['address']; ?></p>
						<h6>CNIC</h6>
						<p><?php echo $userSenData['cnic']; ?></p>
						<h6>Role</h6>
						<p><?php echo $userSenData['role']; ?></p>
                        <h6>Tracking Id</h6>
						<p><?php echo $userSenData['pass']; ?></p>

                        <h6>Receiver Name</h6>
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
						<p><?php echo $userData['hash']; 
						$Bcflag = true;
						break;
					 }else{
                    
						// echo "<br>".$Edata['hash_val']."<br>";
						// echo $hash_val;
					// echo '<script language="javascript">';
					// echo 'alert("Block Chain Compromised");';
					// echo '</script>';
					$Bcflag = false;
					//exit();
				}
				// echo "<br>".$Edata['hash_val']."<br>";
				// 		echo $hash_val;
			}
			if($Bcflag){
                echo '<script language="javascript">';
					echo 'alert("Block Chain Secured Retrieving data");';
					echo '</script>';
			}else{
				echo '<script language="javascript">';
					echo 'alert("Block Chain Compromised");';
					echo '</script>';
			}
		}
	
	}
		//block code end 
		?>
		</p>
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