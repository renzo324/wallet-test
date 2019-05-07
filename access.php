<?php session_start(); ?>
<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "wallet.infinitysoftware.io";
$servername = "infinitysvsoft.mysql.db";
$username = "infinitysvsoft";
$password = "puS9xu5cdP4Wnsu";
$dbname = "infinitysvsoft";
$conn = new mysqli($servername, $username, $password,$dbname);
if (!isset($_SESSION['login']))
{
	 header("location: login.php");
}
else{
	echo 'You are logged in! user number: ' .$_SESSION['login']['id'];
	$queryID = $_SESSION['login']['id'];
	$sql = "SELECT * FROM `test` WHERE `ID` LIKE '".$_SESSION['login']['id']."'"; 
	$result=  $conn->query($sql);
	if($result->num_rows > 0){
		while($row = $result-> fetch_assoc())
		$userEmail = $row['Email'];
		$userID= $row['ID'];
		echo $userEmail;
		echo $userID;
	}
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>INF Dashboard</title>
    
		<!-- Bootstrap 4.0-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
		<!-- bootstrap wysihtml5 - text editor -->
		<link rel="stylesheet" href="assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css">
			
		<!--amcharts -->
		<link href="https://www.amcharts.com/lib/3/plugins/export/export.css" rel="stylesheet" type="text/css" />
		
		<!-- Bootstrap-extend -->
		<link rel="stylesheet" href="css/bootstrap-extend.css">
		
		<!-- theme style -->
		<link rel="stylesheet" href="css/master_style.css">
		
		<!-- Crypto_Admin skins -->
		<link rel="stylesheet" href="css/skins/_all-skins.css">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/wallet.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
			
     
  </head>

<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
	  <b class="logo-mini">
		  <span class="light-logo"><img src="../images/logo-light.png" alt="logo"></span>
		  <span class="dark-logo"><img src="../images/logo-dark.png" alt="logo"></span>
	  </b>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
		  <img src="../images/logo-light-text.png" alt="logo" class="light-logo">
	  	  <img src="../images/logo-dark-text.png" alt="logo" class="dark-logo">
	  </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		  
		  <li class="search-box">
            <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
            <form class="app-search" style="display: none;">
                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
			</form>
          </li>			
		  
          <!-- Messages -->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-email"></i>
            </a>
            <ul class="dropdown-menu scale-up">
              <li class="header">You have 5 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu inner-content-div">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="../images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Lorem Ipsum
                          <small><i class="fa fa-clock-o"></i> 15 mins</small>
                         </h4>
                         <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                      </div>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Nullam tempor
                          <small><i class="fa fa-clock-o"></i> 4 hours</small>
                         </h4>
                         <span>Curabitur facilisis erat quis metus congue viverra.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Proin venenatis
                          <small><i class="fa fa-clock-o"></i> Today</small>
                         </h4>
                         <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Praesent suscipit
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                         </h4>
                         <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Donec tempor
                          <small><i class="fa fa-clock-o"></i> 2 days</small>
                         </h4>
                         <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See all e-Mails</a></li>
            </ul>
          </li>
          <!-- Notifications -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
            </a>
            <ul class="dropdown-menu scale-up">
              <li class="header">You have 7 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu inner-content-div">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> Curabitur id eros quis nunc suscipit blandit.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> In gravida mauris et nisi
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> Praesent eu lacus in libero dictum fermentum.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> Nunc fringilla lorem 
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-message"></i>
            </a>
            <ul class="dropdown-menu scale-up">
              <li class="header">You have 6 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu inner-content-div">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Lorem ipsum dolor sit amet
                        <small class="pull-right">30%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 30%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">30% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Vestibulum nec ligula
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-danger" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Donec id leo ut ipsum
                        <small class="pull-right">70%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-light-blue" style="width: 70%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">70% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Praesent vitae tellus
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Nam varius sapien
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Nunc fringilla
                        <small class="pull-right">90%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-primary" style="width: 90%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">90% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
		  <!-- User Account -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../images/user5-128x128.jpg" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
                <img src="../images/user5-128x128.jpg" class="float-left rounded-circle" alt="User Image">

                <p>
                  Romi Roy
                  <small class="mb-5">jb@gmail.com</small>
                  <a href="#" class="btn btn-danger btn-sm btn-rounded">View Profile</a>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row no-gutters">
                  <div class="col-12 text-left">
                    <a href="#"><i class="ion ion-person"></i> My Profile</a>
                  </div>
                  <div class="col-12 text-left">
                    <a href="#"><i class="ion ion-email-unread"></i> Inbox</a>
                  </div>
                  <div class="col-12 text-left">
                    <a href="#"><i class="ion ion-settings"></i> Setting</a>
                  </div>
				<div role="separator" class="divider col-12"></div>
				  <div class="col-12 text-left">
                    <a href="#"><i class="ti-settings"></i> Account Setting</a>
                  </div>
				<div role="separator" class="divider col-12"></div>
				  <div class="col-12 text-left">
                    <a href="#"><i class="fa fa-power-off"></i> Logout</a>
                  </div>				
                </div>
                <!-- /.row -->
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
		 <div class="ulogo">
			 <a href="index.php">
			  <!-- logo for regular state and mobile devices -->
			  <span><b>Wallet  </b>Admin</span>
			</a>
		</div>
        <div class="image">
          <img src="img/coin.png" class="rounded-circle" alt="User Image">
        </div>
        <div class="info">
          <p><?php echo 'user: '. $userEmail; ?></p>
			      <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ion ion-power"></i>Logout</a>
        </div>
      </div>
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
		<li class="nav-devider"></li>
        <li class="header nav-small-cap">PERSONAL</li>
        <li class="active">
          <a href="index.php">
            <i class="icon-home"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="icon-chart"></i>
            <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="reports/transactions.html">Transactions</a></li>
            <li><a href="reports/top-gainers-losers.html">Top Gainers/Losers</a></li>
            <li><a href="reports/market-capitalizations.html">Market Capitalizations</a></li>
            <li><a href="reports/crypto-stats.html">Crypto Stats</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="icon-compass"></i>
            <span>Initial Coin Offering</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="ico/ico-distribution-countdown.html">Countdown</a></li>
            <li><a href="ico/ico-roadmap-timeline.html">Roadmap/Timeline</a></li>
            <li><a href="ico/ico-progress.html">Progress Bar</a></li>
            <li><a href="ico/ico-details.html">Details</a></li>
            <li><a href="ico/ico-listing.html">ICO Listing</a></li>
            <li><a href="ico/ico-filter.html">ICO Listing - Filters</a></li>			  
          </ul>
        </li>
        <li>
          <a href="currency-ex/exchange.html">
            <i class="icon-refresh"></i> <span>Currency Exchange</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="icon-people"></i>
            <span>Members</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="members/members.html">Members Grid</a></li>
            <li><a href="members/members-list.html">Members List</a></li>
            <li><a href="members/member-profile.html">Member Profile</a></li>			  
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="icon-equalizer"></i>
            <span>Tickers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="tickers/tickers.html">Ticker</a></li>
            <li><a href="tickers/crypto-live-pricing.html">Live Crypto Prices</a></li>		  
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="icon-wallet"></i>
            <span>Transactions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="transactions/tables-transactions.html">Transactions Tables</a></li>
            <li><a href="transactions/transaction-search.html">Transactions Search</a></li>	
            <li><a href="transactions/transaction-details.html">Single Transaction</a></li>
            <li><a href="transactions/counter-transactions.html">Transactions Counter</a></li>	  
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="icon-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="mailbox/mailbox.html">Inbox</a></li>
            <li><a href="mailbox/compose.html">Compose</a></li>
            <li><a href="mailbox/read-mail.html">Read</a></li>
          </ul>
        </li>    
      </ul>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
		<div class="row">
			
			<div class="col-12">
				<div class="box box-inverse box-dark">
				  <div class="box-body tickers-block">
					  <ul id="webticker-1">
						<li><i class="cc BTC"></i> BTC <span class="text-yellow"> $11.039232</span></li> 
						<li><i class="cc ETH"></i> ETH <span class="text-yellow"> $1.2792</span></li> 
						<li><i class="cc GAME"></i> GAME <span class="text-yellow"> $11.039232</span></li> 
						<li><i class="cc LBC"></i> LBC <span class="text-yellow"> $0.588418</span></li> 
						<li><i class="cc NEO"></i> NEO <span class="text-yellow"> $161.511</span></li> 
						<li><i class="cc STEEM"></i> STE <span class="text-yellow"> $0.551955</span></li> 
						<li><i class="cc LTC"></i> LIT <span class="text-yellow"> $177.80</span></li> 
						<li><i class="cc NOTE"></i> NOTE <span class="text-yellow"> $13.399</span></li>
						<li><i class="cc MINT"></i> MINT <span class="text-yellow"> $0.880694</span></li> 
						<li><i class="cc IOTA"></i> IOT <span class="text-yellow"> $2.555</span></li> 
						<li><i class="cc DASH"></i> DAS <span class="text-yellow"> $769.22</span></li>   
					  </ul>
				  </div>
			  </div>
			</div>
			
			<div class="col-lg-6 col-12">
				<div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Bitcoin Exchange ETH/BTC</h4>

					  <ul class="box-controls pull-right">
						  <li><a class="box-btn-close" href="#"></a></li>
						  <li><a class="box-btn-slide"  href="#"></a></li>	
						  <li><a class="box-btn-fullscreen" href="#"></a></li>
					  </ul>
					</div>
					<div class="box-body">
						<div class="chart">
							<div id="chartdiv21" style="height: 500px;"></div>
						</div>
					</div>
					<!-- /.box-body -->
				  </div>
			</div>
			<div class="col-lg-6 col-12">
				<div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Stock Target</h4>

					  <ul class="box-controls pull-right">
						  <li><a class="box-btn-close" href="#"></a></li>
						  <li><a class="box-btn-slide"  href="#"></a></li>	
						  <li><a class="box-btn-fullscreen" href="#"></a></li>
					  </ul>
					</div>
					<div class="box-body">
						<div class="chart">
							<div id="chartdiv22" style="height: 500px;"></div>
						</div>
					</div>
					<!-- /.box-body -->
				  </div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xl-7 col-12">
      		<!-- quick email widget -->
			  <div class="box">
				<div class="box-header">
				  <i class="fa fa-envelope"></i>

				  <h4 class="box-title">Quick Email</h4>
					<ul class="box-controls pull-right">
					  <li><a class="box-btn-close" href="#"></a></li>
					  <li><a class="box-btn-slide" href="#"></a></li>	
					  <li><a class="box-btn-fullscreen" href="#"></a></li>
					</ul>
				</div>
				<div class="box-body">
				  <form action="#" method="post">
					<div class="form-group">
					  <input type="email" class="form-control" name="emailto" placeholder="Email to:">
					</div>
					<div class="form-group">
					  <input type="text" class="form-control" name="subject" placeholder="Subject">
					</div>
					<div>
					  <textarea class="textarea b-1 p-10 w-p100" placeholder="Message"></textarea>
					</div>
				  </form>
				</div>
				<div class="box-footer clearfix">
				  <button type="button" class="pull-right btn btn-blue" id="sendEmail"> Send <i class="fa fa-paper-plane-o"></i></button>
				</div>
			  </div>
			</div>
			
			<div class="col-lg-5 col-12">
			  <!-- DIRECT CHAT DANGER -->
			  <div class="box direct-chat direct-chat-success">
				<div class="box-header with-border">
				  <h4 class="box-title">Direct Chat</h4>

				  	<ul class="box-controls pull-right">
					  <li><a class="box-btn-close" href="#"></a></li>
					  <li><a class="box-btn-slide" href="#"></a></li>
					  <li><a class="box-btn-fullscreen" href="#"></a></li>
					  <li><a class="" data-toggle="tooltip" title="" data-widget="chat-pane-toggle" data-original-title="Contacts"><i class="fa fa-comments"></i></a></li>
					  <li><span data-toggle="tooltip" title="" class="badge badge-pill badge-success" data-original-title="1 New Messages">5</span></li>
					</ul>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <!-- Conversations are loaded here -->
				  <div class="direct-chat-messages" id="direct-chat">
					<!-- Message. Default to the left -->
					<div class="direct-chat-msg">
					  <div class="direct-chat-info clearfix">
						<span class="direct-chat-name pull-left">James Anderson</span>
						<span class="direct-chat-timestamp pull-right">April 14, 2017 18:00 </span>
					  </div>
					  <!-- /.direct-chat-info -->
					  <img class="direct-chat-img" src="../images/user1-128x128.jpg" alt="message user image">
					  <!-- /.direct-chat-img -->
					  <div class="direct-chat-text">
						Lorem Ipsum is simply dummy text industry.
					  </div>
					  <!-- /.direct-chat-text -->
					</div>
					<!-- /.direct-chat-msg -->

					<!-- Message to the right -->
					<div class="direct-chat-msg right">
					  <div class="direct-chat-info clearfix">
						<span class="direct-chat-name pull-right">Michael Jorden</span>
						<span class="direct-chat-timestamp pull-left">April 14, 2017 18:00</span>
					  </div>
					  <!-- /.direct-chat-info -->
					  <img class="direct-chat-img" src="../images/user3-128x128.jpg" alt="message user image">
					  <!-- /.direct-chat-img -->
					  <div class="direct-chat-text">
						Lorem Ipsum is...
					  </div>
					  <!-- /.direct-chat-text -->
					</div>
					<!-- /.direct-chat-msg -->
					 <!-- Message. Default to the left -->
					<div class="direct-chat-msg">
					  <div class="direct-chat-info clearfix">
						<span class="direct-chat-name pull-left">James Anderson</span>
						<span class="direct-chat-timestamp pull-right">April 14, 2017 18:00 </span>
					  </div>
					  <!-- /.direct-chat-info -->
					  <img class="direct-chat-img" src="../images/user1-128x128.jpg" alt="message user image">
					  <!-- /.direct-chat-img -->
					  <div class="direct-chat-text">
						Lorem Ipsum is simply dummy text industry.
					  </div>
					  <!-- /.direct-chat-text -->
					</div>
					<!-- /.direct-chat-msg -->

					<!-- Message to the right -->
					<div class="direct-chat-msg right">
					  <div class="direct-chat-info clearfix">
						<span class="direct-chat-name pull-right">Michael Jorden</span>
						<span class="direct-chat-timestamp pull-left">April 14, 2017 18:00</span>
					  </div>
					  <!-- /.direct-chat-info -->
					  <img class="direct-chat-img" src="../images/user3-128x128.jpg" alt="message user image">
					  <!-- /.direct-chat-img -->
					  <div class="direct-chat-text">
						Lorem Ipsum is...
					  </div>
					  <!-- /.direct-chat-text -->
					</div>
					<!-- /.direct-chat-msg -->

					  <!-- Message. Default to the left -->
					<div class="direct-chat-msg">
					  <div class="direct-chat-info clearfix">
						<span class="direct-chat-name pull-left">James Anderson</span>
						<span class="direct-chat-timestamp pull-right">April 14, 2017 18:00 </span>
					  </div>
					  <!-- /.direct-chat-info -->
					  <img class="direct-chat-img" src="../images/user1-128x128.jpg" alt="message user image">
					  <!-- /.direct-chat-img -->
					  <div class="direct-chat-text">
						Lorem Ipsum is simply dummy text industry.
					  </div>
					  <!-- /.direct-chat-text -->
					</div>
					<!-- /.direct-chat-msg -->

					<!-- Message to the right -->
					<div class="direct-chat-msg right">
					  <div class="direct-chat-info clearfix">
						<span class="direct-chat-name pull-right">Michael Jorden</span>
						<span class="direct-chat-timestamp pull-left">April 14, 2017 18:00</span>
					  </div>
					  <!-- /.direct-chat-info -->
					  <img class="direct-chat-img" src="../images/user3-128x128.jpg" alt="message user image">
					  <!-- /.direct-chat-img -->
					  <div class="direct-chat-text">
						Lorem Ipsum is...
					  </div>
					  <!-- /.direct-chat-text -->
					</div>
					<!-- /.direct-chat-msg -->

				  </div>
				  <!--/.direct-chat-messages-->

				  <!-- Contacts are loaded here -->
				  <div class="direct-chat-contacts">
					<ul class="contacts-list">
					  <li>
						<a href="#">
						  <img class="contacts-list-img" src="../images/user1-128x128.jpg" alt="User Image">

						  <div class="contacts-list-info">
								<span class="contacts-list-name">
								  Pavan kumar
								  <small class="contacts-list-date pull-right">April 14, 2017</small>
								</span>
							<span class="contacts-list-email">info@.multipurpose.com</span>
						  </div>
						  <!-- /.contacts-list-info -->
						</a>
					  </li>
					  <!-- End Contact Item -->
					  <li>
						<a href="#">
						  <img class="contacts-list-img" src="../images/user7-128x128.jpg" alt="User Image">

						  <div class="contacts-list-info">
								<span class="contacts-list-name">
								  Sonu Sud
								  <small class="contacts-list-date pull-right">March 14, 2017</small>
								</span>
							<span class="contacts-list-email">sonu@gmail.com</span>
						  </div>
						  <!-- /.contacts-list-info -->
						</a>
					  </li>
					  <!-- End Contact Item -->
					</ul>
					<!-- /.contatcts-list -->
				  </div>
				  <!-- /.direct-chat-pane -->
				</div>
				<!-- /.box-body -->
				<div class="box-footer">
				  <form action="#" method="post">
					<div class="input-group">
					  <input type="text" name="message" placeholder="Type Message ..." class="form-control">
						  <span class="input-group-btn">
							<button type="submit" class="btn btn-success">Send</button>
						  </span>
					</div>
				  </form>
				</div>
				<!-- /.box-footer-->
			  </div>
			  <!--/.direct-chat -->
			</div>
			
			
		</div>
		
		
		<div class="row">			
			<div class="col-lg-6 col-12">         
			 <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Data Tables Markets</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-striped table-bordered no-margin">
						  <thead>
							 <tr class="bg-pale-dark">
								<th>Coin</th>
								<th>Price</th>
								<th>Change %</th>
							 </tr>
						  </thead>
						   <tbody>
							  <tr>
								 <td><p class="font-size-18 no-margin">BTC</p></td>
								 <td><p class="no-margin"><span>$</span> 11,723.40</p></td>
								 <td class="no-wrap"><span class="badge badge-danger"><i class="fa fa-chevron-down"></i> -15.20%</span></td>
							  </tr>
							  <tr>
								 <td><p class="font-size-18 no-margin">ETH</p></td>
								 <td><p class="no-margin"><span>$</span> 1,070.39</p></td>
								 <td class="no-wrap"><span class="badge badge-danger"><i class="fa fa-chevron-down"></i> -11.74%</span></td>
							  </tr>
							  <tr>
								 <td><p class="font-size-18 no-margin">XRP</p> </td>
								 <td><p class="no-margin"><span>$</span> 1.64</p></td>
								 <td class="no-wrap"><span class="badge badge-danger"><i class="fa fa-chevron-down"></i> -16.44%</span></td>
							  </tr>
							  <tr>
								 <td><p class="font-size-18 no-margin">ADA</p></td>
								 <td><p class="no-margin"><span>$</span> 0.68</p></td>
								 <td class="no-wrap"><span class="badge badge-danger"><i class="fa fa-chevron-down"></i> -5.91%</span></td>
							  </tr>
							  <tr>
								 <td><p class="font-size-18 no-margin">LTC</p></td>
								 <td><p class="no-margin"><span>$</span> 198.88</p></td>
								 <td class="no-wrap"><span class="badge badge-danger"><i class="fa fa-chevron-down"></i> -15.74%</span></td>
							  </tr>
							  <tr>
								 <td><p class="font-size-18 no-margin">DASH</p></td>
								 <td><p class="no-margin"><span>$</span> 865.27</p></td>
								 <td class="no-wrap"><span class="badge badge-danger"><i class="fa fa-chevron-down"></i> -16.47%</span></td>
							  </tr>
							</tbody>
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->       
			</div>
			
		   <div class="col-lg-6 col-12">
			  <!-- Chart -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Daly Analysis</h4>
					<ul class="box-controls pull-right">
					  <li><a class="box-btn-close" href="#"></a></li>
					  <li><a class="box-btn-slide" href="#"></a></li>	
					  <li><a class="box-btn-fullscreen" href="#"></a></li>
					</ul>
				</div>
				<div class="box-body">
				  <div class="chart">
					<div id="e_chart_2" class="" style="height:480px;"></div>	
				  </div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
		   </div>
		  
		  <div class="col-12 col-lg-3">
			<div class="box box-body pull-up bg-hexagons-white">
			  <div class="media align-items-center p-0">
				<div class="text-center">
				  <a href="#"><i class="cc BTC mr-5" title="BTC"></i></a>
				</div>
				<div>
				  <h2 class="no-margin">Bitcoin BTC</h2>
				</div>
			  </div>
			  <div class="flexbox align-items-center mt-25">
				<div>
				  <p class="no-margin">2.340000434 <span class="text-gray">BTC</span> <span class="text-info">$0.04</span></p>
				</div>
				<div class="text-right">
				  <p class="no-margin"><span class="text-success">+5.35%</span></p>
				</div>
			  </div>
			</div>
           </div>
		  <div class="col-lg-3 col-12">					
			<div class="box box-body pull-up bg-hexagons-white">
			  <div class="media align-items-center p-0">
				<div class="text-center">
				  <a href="#"><i class="cc LTC mr-5" title="LTC"></i></a>
				</div>
				<div>
				  <h2 class="no-margin">Litecoin LTC</h2>
				</div>
			  </div>
			  <div class="flexbox align-items-center mt-25">
				<div>
				  <p class="no-margin">1.34000434 <span class="text-gray">LTC</span> <span class="text-info">$0.14</span></p>
				</div>
				<div class="text-right">
				  <p class="no-margin"><span class="text-danger">-2.35%</span></p>
				</div>
			  </div>
			</div>		
		  </div>
		 <div class="col-lg-3 col-12">			
			<div class="box box-body pull-up bg-hexagons-white">
			  <div class="media align-items-center p-0">
				<div class="text-center">
				  <a href="#"><i class="cc NEO mr-5" title="NEO"></i></a>
				</div>
				<div>
				  <h2 class="no-margin">Neo NEO</h2>
				</div>
			  </div>
			  <div class="flexbox align-items-center mt-25">
				<div>
				  <p class="no-margin">0.30000434 <span class="text-gray">NEO</span> <span class="text-info">$5.04</span></p>
				</div>
				<div class="text-right">
				  <p class="no-margin"><span class="text-success">+4.35%</span></p>
				</div>
			  </div>
			</div>
		 </div>
		
		 <div class="col-lg-3 col-12">
			<div class="box box-body pull-up bg-hexagons-white">
			  <div class="media align-items-center p-0">
				<div class="text-center">
				  <a href="#"><i class="cc DASH mr-5" title="DASH"></i></a>
				</div>
				<div>
				  <h2 class="no-margin">Dash DASH</h2>
				</div>
			  </div>
			  <div class="flexbox align-items-center mt-20">
				<div>
				  <p class="no-margin">0.34000434 <span class="text-gray">DASH</span> <span class="text-info">$0.54</span></p>
				</div>
				<div class="text-right">
				  <p class="no-margin"><span class="text-danger">-5.35%</span></p>
				</div>
			  </div>
			</div>
		 </div>
			
		  <div class="col-lg-6 col-12">
			<div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Latest Transactions</h4>
					<ul class="box-controls pull-right">
					  <li><a class="box-btn-close" href="#"></a></li>
					  <li><a class="box-btn-slide" href="#"></a></li>	
					  <li><a class="box-btn-fullscreen" href="#"></a></li>
					</ul>
				</div>
				<div class="box-body">
					<div class="table-responsive">
						<table class="table table-bordered no-margin">
						  <thead>					
							<tr class="bg-pale-dark">
							  <th>Transaction Hash</th>
							  <th>BTC</th>
							  <th>Time</th>
							  <th>Miner Preference</th>
							  <th>Status</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  9d2c7b06bfa0
								</a>
								...
							  </td>
							  <td>1.2126281 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:38:01Z" title="2018-02-01 13:38 GMT">2 minutes ago</time>
							  </td>
							  <td>medium</td>
							  <td><span class="label label-success">Confirmed</span></td>
							</tr>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  5de67415bfc6
								</a>
								...
							  </td>
							  <td>0.20522881 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:38:01Z" title="2018-02-01 13:38 GMT">2 minutes ago</time>
							  </td>
							  <td>high</td>
							  <td><span class="label label-warning">Unconfirmed</span></td>
							</tr>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  733de15b3cec
								</a>
								...
							  </td>
							  <td>2.02622033 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:38:01Z" title="2018-02-01 13:38 GMT">2 minutes ago</time>
							  </td>
							  <td>high</td>
							  <td><span class="label label-success">Confirmed</span></td>
							</tr>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  6793bcfa4f7f
								</a>
								...
							  </td>
							  <td>2.43220578 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:38:00Z" title="2018-02-01 13:38 GMT">2 minutes ago</time>
							  </td>
							  <td>high</td>
							  <td><span class="label label-danger">Canceled</span></td>
							</tr>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  2c66087936b5
								</a>
								...
							  </td>
							  <td>14.01099978 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:38:00Z" title="2018-02-01 13:38 GMT">2 minutes ago</time>
							  </td>
							  <td>high</td>
							  <td><span class="label label-danger">Canceled</span></td>
							</tr>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  51935e53c294
								</a>
								...
							  </td>
							  <td>0.3024534 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:38:00Z" title="2018-02-01 13:38 GMT">2 minutes ago</time>
							  </td>
							  <td>high</td>
							  <td><span class="label label-warning">Unconfirmed</span></td>
							</tr>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  a3976b73cf5e
								</a>
								...
							  </td>
							  <td>0.20518486 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:37:59Z" title="2018-02-01 13:37 GMT">2 minutes ago</time>
							  </td>
							  <td>medium</td>
							  <td><span class="label label-success">Confirmed</span></td>
							</tr>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  g011cb48c078
								</a>
								...
							  </td>
							  <td>2.08039395 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:37:59Z" title="2018-02-01 13:37 GMT">2 minutes ago</time>
							  </td>
							  <td>high</td>
							  <td><span class="label label-success">Confirmed</span></td>
							</tr>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  c6b59368635c
								</a>
								...
							  </td>
							  <td>42.99698306 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:37:58Z" title="2018-02-01 13:37 GMT">2 minutes ago</time>
							  </td>
							  <td>high</td>
							  <td><span class="label label-success">Confirmed</span></td>
							</tr>
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  a261fc1d717d
								</a>
								...
							  </td>
							  <td>1.0281818 BTC</td>
							  <td>
								<time class="timeago" datetime="2018-02-01T13:37:58Z" title="2018-02-01 13:37 GMT">2 minutes ago</time>
							  </td>
							  <td>high</td>
							  <td><span class="label label-danger">Canceled</span></td>
							</tr>
						  </tbody>
						</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

		  </div> 
		  <div class="col-lg-6 col-12">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Market Depth</h4>
					<ul class="box-controls pull-right">
					  <li><a class="box-btn-close" href="#"></a></li>
					  <li><a class="box-btn-slide" href="#"></a></li>	
					  <li><a class="box-btn-fullscreen" href="#"></a></li>
					</ul>
				</div>
				<div class="box-body">
					<div class="chart">
						<div id="e_chart_3" style="height: 680px;"></div>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
		  </div>
			
		</div>	
		
		
	</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; 2018 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-cog fa-spin"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Admin Birthday</h4>

                <p>Will be July 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>

                <p>New Email : jhone_doe@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>

                <p>disha@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Code Change</h4>

                <p>Execution time 15 Days</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Web Design
                <span class="label label-danger pull-right">40%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Data
                <span class="label label-success pull-right">75%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 75%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Order Process
                <span class="label label-warning pull-right">89%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 89%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Development 
                <span class="label label-primary pull-right">72%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 72%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="report_panel" class="chk-col-grey" >
			<label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>

            <p>
              general settings information
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="allow_mail" class="chk-col-grey" >
			<label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="expose_author" class="chk-col-grey" >
			<label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="show_me_online" class="chk-col-grey" >
			<label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="off_notifications" class="chk-col-grey" >
			<label for="off_notifications" class="control-sidebar-subheading ">Turn off notifications</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">              
              <a href="javascript:void(0)" class="text-red margin-r-5"><i class="fa fa-trash-o"></i></a>
              Delete chat history
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
  	
	 
	  
	<!-- jQuery 3 -->
	<script src="assets/vendor_components/jquery/dist/jquery.js"></script>
	
	<!-- popper -->
	<script src="assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>
	
	<!-- Bootstrap WYSIHTML5 -->
	<script src="assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>
	
	<!-- Slimscroll -->
	<script src="assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
	
	<!-- FastClick -->
	<script src="assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
    <!--amcharts charts -->
	<script src="http://www.amcharts.com/lib/3/amcharts.js" type="text/javascript"></script>
	<script src="http://www.amcharts.com/lib/3/gauge.js" type="text/javascript"></script>
	<script src="http://www.amcharts.com/lib/3/serial.js" type="text/javascript"></script>
	<script src="http://www.amcharts.com/lib/3/amstock.js" type="text/javascript"></script>
	<script src="http://www.amcharts.com/lib/3/pie.js" type="text/javascript"></script>
	<script src="https://www.amcharts.com/lib/3/plugins/dataloader/dataloader.min.js"></script>
	<script src="http://www.amcharts.com/lib/3/plugins/animate/animate.min.js" type="text/javascript"></script>
	<script src="http://www.amcharts.com/lib/3/plugins/export/export.min.js" type="text/javascript"></script>
	<script src="http://www.amcharts.com/lib/3/themes/patterns.js" type="text/javascript"></script>
	<script src="http://www.amcharts.com/lib/3/themes/dark.js" type="text/javascript"></script>	
	
	<!-- webticker -->
	<script src="assets/vendor_components/Web-Ticker-master/jquery.webticker.min.js"></script>
	
	<!-- EChartJS JavaScript -->
	<script src="assets/vendor_components/echarts-master/dist/echarts-en.min.js"></script>
	<script src="assets/vendor_components/echarts-liquidfill-master/dist/echarts-liquidfill.min.js"></script>
	
	<!-- This is data table -->
    <script src="assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>
	
	<!-- Crypto_Admin App -->
	<script src="js/template.js"></script>
	
	<!-- Crypto_Admin dashboard demo (This is only for demo purposes) -->
	<script src="js/pages/dashboard.js"></script>
	<script src="js/pages/dashboard-chart.js"></script>
	
	<!-- Crypto_Admin for demo purposes -->
	<script src="js/demo.js"></script>
	<script>
			console.log('<?php 	echo 'You are logged in! user number: ' .$_SESSION['login']['id']. 'useremail= '. $userEmail.'userid= '.$userID;?>');
			</script>
	
</body>
</html>
