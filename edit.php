<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clone";
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$Username='';
$Email='';
$Password='';

if(isset($_POST['Username'], $_POST['Email'], $_POST['Password'])) {
	$Username=$_POST['Username'];
	$Email=$_POST['Email'];
	$Password=$_POST['Password'];
};

$sql = "UPDATE `admin` SET `Username` = '".$Username."', `Email` = '".$Email."', `Password` = '".$Password."' WHERE `admin`.`id` = ".$_GET['id'];
$conn->query($sql);

// if (isset($_POST['submit'])) header("location: view.php?id=".$_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>Crypto Admin - Members Profile</title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="css/bootstrap-extend.css">

	<!-- Theme style -->
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
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
	  <b class="logo-mini">
		  <span class="light-logo"><img src="images/logo-light.png" alt="logo"></span>
		  <span class="dark-logo"><img src="images/logo-dark.png" alt="logo"></span>
	  </b>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
		  <img src="images/logo-light-text.png" alt="logo" class="light-logo">
	  	  <img src="images/logo-dark-text.png" alt="logo" class="dark-logo">
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
                        <img src="images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
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
                        <img src="images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
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
                        <img src="images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
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
                        <img src="images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
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
                        <img src="images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
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
              <img src="images/user5-128x128.jpg" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
                <img src="images/user5-128x128.jpg" class="float-left rounded-circle" alt="User Image">

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

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
		 <div class="ulogo">
			 <a href="index.html">
			  <!-- logo for regular state and mobile devices -->
			  <span><b>Crypto </b>Admin</span>
			</a>
		</div>
        <div class="image">
          <img src="images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
        </div>
        <div class="info">
          <p>Admin Template</p>
			<a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="ion ion-gear-b"></i></a>
            <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ion ion-android-mail"></i></a>
            <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ion ion-power"></i></a>
        </div>
      </div>
      
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
		<li class="nav-devider"></li>
        <li class="header nav-small-cap">PERSONAL</li>
        <li>
          <a href="index.html">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
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
        <li class="treeview active">
          <a href="#">
            <i class="icon-people"></i>
            <span>Members</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="members.html">Members Grid</a></li>
            <li><a href="members-list.html">Members List</a></li>
            <li class="active"><a href="member-profile.html">Member Profile</a></li>			  
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
            <i class="icon-graph"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="charts/chartjs.html">ChartJS</a></li>
            <li><a href="charts/flot.html">Flot</a></li>
            <li><a href="charts/inline.html">Inline charts</a></li>
            <li><a href="charts/morris.html">Morris</a></li>
            <li><a href="charts/peity.html">Peity</a></li>
            <li><a href="charts/chartist.html">Chartist</a></li>
            <li><a href="charts/rickshaw-charts.html">Rickshaw Charts</a></li>
            <li><a href="charts/nvd3-charts.html">NVD3 Charts</a></li>
			<li><a href="charts/echart.html">eChart</a></li>
			<li><a href="amcharts/amcharts.html">amCharts Charts</a></li>
			<li><a href="amcharts/amstock-charts.html">amCharts Stock Charts</a></li>
			<li><a href="amcharts/ammaps.html">amCharts Maps</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>App</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="app/app-chat.html">Chat app</a></li>
            <li><a href="app/project-table.html">Project</a></li>
            <li><a href="app/app-contact.html">Contact / Employee</a></li>
            <li><a href="app/app-ticket.html">Support Ticket</a></li>
			<li><a href="app/calendar.html">Calendar</a></li>
            <li><a href="app/profile.html">Profile</a></li>
            <li><a href="app/userlist-grid.html">Userlist Grid</a></li>
			<li><a href="app/userlist.html">Userlist</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
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
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="UI/badges.html">Badges</a></li>
            <li><a href="UI/border-utilities.html">Border</a></li>
            <li><a href="UI/buttons.html">Buttons</a></li>
            <li><a href="UI/bootstrap-switch.html">Bootstrap Switch</a></li>
            <li><a href="UI/cards.html">User Card</a></li>
            <li><a href="UI/color-utilities.html">Color</a></li>
			<li><a href="UI/date-paginator.html">Date Paginator</a></li>
            <li><a href="UI/dropdown.html">Dropdown</a></li>
            <li><a href="UI/dropdown-grid.html">Dropdown Grid</a></li>
            <li><a href="UI/general.html">General</a></li>
            <li><a href="UI/icons.html">Icons</a></li>
            <li><a href="UI/media-advanced.html">Advanced Medias</a></li>
			<li><a href="UI/modals.html">Modals</a></li>
            <li><a href="UI/nestable.html">Nestable</a></li>
            <li><a href="UI/notification.html">Notification</a></li>
            <li><a href="UI/portlet-draggable.html">Draggable Portlets</a></li>
            <li><a href="UI/ribbons.html">Ribbons</a></li>
            <li><a href="UI/sliders.html">Sliders</a></li>
            <li><a href="UI/sweatalert.html">Sweet Alert</a></li>
            <li><a href="UI/tab.html">Tabs</a></li>
            <li><a href="UI/timeline.html">Timeline</a></li>
            <li><a href="UI/timeline-horizontal.html">Horizontal Timeline</a></li>			  
          </ul>
        </li>
        <li class="header nav-small-cap">FORMS, TABLE & LAYOUTS</li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-bars"></i>
            <span>Widgets</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="widgets/blog.html">Blog</a></li>
            <li><a href="widgets/chart.html">Chart</a></li>
            <li><a href="widgets/list.html">List</a></li>
            <li><a href="widgets/social.html">Social</a></li>
            <li><a href="widgets/statistic.html">Statistic</a></li>
            <li><a href="widgets/tiles.html">Tiles</a></li>
            <li><a href="widgets/weather.html">Weather</a></li>
            <li><a href="widgets/widgets.html">Widgets</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="layout/boxed.html">Boxed</a></li>
            <li><a href="layout/fixed.html">Fixed</a></li>
            <li><a href="layout/collapsed-sidebar.html">Collapsed Sidebar</a></li>
          </ul>
        </li>		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-square-o"></i>
            <span>Box</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="box/advanced.html">Advanced</a></li>
            <li><a href="box/basic.html">Boxed</a></li>
            <li><a href="box/color.html">Color</a></li>
			<li><a href="box/group.html">Group</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="forms/advanced.html">Advanced Elements</a></li>
            <li><a href="forms/code-editor.html">Code Editor</a></li>
            <li><a href="forms/editor-markdown.html">Markdown</a></li>
            <li><a href="forms/editors.html">Editors</a></li>
            <li><a href="forms/form-validation.html">Form Validation</a></li>
            <li><a href="forms/form-wizard.html">Form Wizard</a></li>
            <li><a href="forms/general.html">General Elements</a></li>
            <li><a href="forms/mask.html">Formatter</a></li>
            <li><a href="forms/premade.html">Pre-made Forms</a></li>
            <li><a href="forms/xeditable.html">Xeditable Editor</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="tables/simple.html">Simple tables</a></li>
            <li><a href="tables/data.html">Data tables</a></li>
            <li><a href="tables/editable-tables.html">Editable Tables</a></li>
            <li><a href="tables/table-color.html">Table Color</a></li>
          </ul>

        </li>
		<li>
          <a href="email/index.html">
            <i class="fa fa-envelope-open-o"></i> <span>Emails</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
		<li class="header nav-small-cap">EXTRA COMPONENTS</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-map"></i> <span>Map</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="map/map-google.html">Google Map</a></li>
            <li><a href="map/map-vector.html">Vector Map</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-plug"></i> <span>Extension</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="extension/fullscreen.html">Fullscreen</a></li>
          </ul>
        </li>        
		<li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i> <span>Sample Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="samplepage/blank.html">Blank</a></li>
            <li><a href="samplepage/coming-soon.html">Coming Soon</a></li>
            <li><a href="samplepage/custom-scroll.html">Custom Scrolls</a></li>
			<li><a href="samplepage/faq.html">FAQ</a></li>
			<li><a href="samplepage/gallery.html">Gallery</a></li>
			<li><a href="samplepage/invoice.html">Invoice</a></li>
			<li><a href="samplepage/lightbox.html">Lightbox Popup</a></li>
			<li><a href="samplepage/pace.html">Pace</a></li>
			<li><a href="samplepage/pricing.html">Pricing</a></li>
            <li class="treeview">
              <a href="#">Authentication 
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="samplepage/login.html">Login</a></li>
                <li><a href="samplepage/register.html">Register</a></li>
                <li><a href="samplepage/lockscreen.html">Lockscreen</a></li>
                <li><a href="samplepage/user-pass.html">Recover password</a></li>				  
              </ul>
            </li>            
			<li class="treeview">
              <a href="#">Error Pages 
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="samplepage/404.html">404</a></li>
                <li><a href="samplepage/500.html">500</a></li>
                <li><a href="samplepage/maintenance.html">Maintenance</a></li>		  
              </ul>
            </li> 
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Level One</a></li>
            <li class="treeview">
              <a href="#">Level One
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#">Level Two</a></li>
                <li class="treeview">
                  <a href="#">Level Two
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#">Level Three</a></li>
                    <li><a href="#">Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">Level One</a></li>
          </ul>
        </li>        
        
      </ul>
    </section>
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Members Profile
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Members</a></li>
        <li class="breadcrumb-item active">Members Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xl-4 col-lg-5">

          <!-- Profile Image -->
          <div class="box bg-yellow bg-deathstar-dark">
            <div class="box-body box-profile">
              <img class="profile-user-img rounded img-fluid mx-auto d-block" src="images/5.jpg" alt="User profile picture">

              <h2 class="profile-username text-center mb-0">Jhone Mical</h2>

              <h4 class="text-center mt-0"><i class="fa fa-envelope-o mr-10"></i>jhone.mical@yahoo.com</h4>
				
              <div class="row social-states">
				  <div class="col-6 text-right"><a href="#" class="link text-white"><i class="ion ion-ios-people-outline"></i> 254</a></div>
				  <div class="col-6 text-left"><a href="#" class="link text-white"><i class="ion ion-images"></i> 54</a></div>
			  </div>
            
              <div class="row">
				<div class="col-12">
					<div class="media-list media-list-hover media-list-divided w-p100 mt-30">
						<h4 class="media media-single p-15">
						  <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title">My Profile</span>
						</h4>
						<h4 class="media media-single p-15">
						  <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title">Invests</span>
						</h4>
						<h4 class="media media-single p-15">
						  <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title">The Wallet</span>
						</h4>
						<h4 class="media media-single p-15">
						  <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title">Deposit</span>
						</h4>
						<h4 class="media media-single p-15">
						  <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title">Reports</span>
						</h4>
						<h4 class="media media-single p-15">
						  <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title">Services</span>
						</h4>
						<h4 class="media media-single p-15">
						  <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title">Support</span>
						</h4>
					</div>
				</div>
				<h2 class="title w-p100 mt-10 mb-0 p-20">Last Transactions</h2>
				<div class="col-12">
					<div class="media-list media-list-hover w-p100 mt-0">
						<h5 class="media media-single py-10 px-0 w-p100 justify-content-between">
							  <p>
							  <i class="fa fa-circle text-red pr-10 font-size-12"></i>Deal number 1548
							  <span class="subtitle pl-20 mt-10">by<span class="text-red">Johen Doe</span></span>						  
							  </p>
							  <p class="text-right pull-right"><span class="badge badge-sm badge-danger mb-10">sell</span><br>0.12458921 BTC</p>
						</h5>
						<h5 class="media media-single py-10 px-0 w-p100 justify-content-between">
							  <p>
							  <i class="fa fa-circle text-success pr-10 font-size-12"></i>Deal number 1548
							  <span class="subtitle pl-20 mt-10">by<span class="text-success">Johen Doe</span></span>						  
							  </p>
							  <p class="text-right pull-right"><span class="badge badge-sm badge-success mb-10">sell</span><br>0.12458921 BTC</p>
						</h5>
						<h5 class="media media-single py-10 px-0 w-p100 justify-content-between">
							  <p>
							  <i class="fa fa-circle text-success pr-10 font-size-12"></i>Deal number 1548
							  <span class="subtitle pl-20 mt-10">by<span class="text-success">Johen Doe</span></span>						  
							  </p>
							  <p class="text-right pull-right"><span class="badge badge-sm badge-success mb-10">sell</span><br>0.12458921 BTC</p>
						</h5>
						<h5 class="media media-single py-10 px-0 w-p100 justify-content-between">
							  <p>
							  <i class="fa fa-circle text-red pr-10 font-size-12"></i>Deal number 1548
							  <span class="subtitle pl-20 mt-10">by<span class="text-red">Johen Doe</span></span>						  
							  </p>
							  <p class="text-right pull-right"><span class="badge badge-sm badge-danger mb-10">sell</span><br>0.12458921 BTC</p>
						</h5>
						<h5 class="media media-single py-10 px-0 w-p100 justify-content-between">
							  <p>
							  <i class="fa fa-circle text-success pr-10 font-size-12"></i>Deal number 1548
							  <span class="subtitle pl-20 mt-10">by<span class="text-success">Johen Doe</span></span>						  
							  </p>
							  <p class="text-right pull-right"><span class="badge badge-sm badge-success mb-10">sell</span><br>0.12458921 BTC</p>
						</h5>
					</div>
				</div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-8 col-lg-7">
          <div class="box box-solid bg-black">
			<div class="box-header with-border">
			  <h3 class="box-title">Personal details</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col-12">
					<div class="form-group row">
					  <label class="col-sm-2 col-form-label">First Name</label>
					  <div class="col-sm-10">
						<input class="form-control" type="text" placeholder="Johon">
					  </div>
					</div>
					<div class="form-group row">
					  <label class="col-sm-2 col-form-label">Last Name</label>
					  <div class="col-sm-10">
						<input class="form-control" type="text" placeholder="Doe">
					  </div>
					</div>
					<div class="form-group row">
					  <label class="col-sm-2 col-form-label">Email Adress</label>
					  <div class="col-sm-10">
						<input class="form-control" type="email" placeholder="johone@dummy.com">
					  </div>
					</div>
					<div class="form-group row">
					  <label class="col-sm-2 col-form-label">Phone Number</label>
					  <div class="col-sm-10">
						<input class="form-control" type="tel" placeholder="123 456 7890">
					  </div>
					</div>
					<div class="form-group row">
					  <label class="col-sm-2 col-form-label"></label>
					  <div class="col-sm-10">
						<button type="submit" class="btn btn-yellow">Submit</button>
					  </div>
					</div>
				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->
          <div class="box box-solid bg-black">
			<div class="box-header with-border">
			  <h3 class="box-title">Personal address</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col-12">
					<div class="form-group row">
					  <label class="col-sm-2 col-form-label">Street</label>
					  <div class="col-sm-10">
						<input class="form-control" type="text" placeholder="A-458, Lorem Ipsum, city">
					  </div>
					</div>
					<div class="form-group row">
					  <label class="col-sm-2 col-form-label">City</label>
					  <div class="col-sm-10">
						<input class="form-control" type="text" placeholder="Your City">
					  </div>
					</div>
					<div class="form-group row">
					  <label class="col-sm-2 col-form-label">State</label>
					  <div class="col-sm-10">
						<input class="form-control" type="text" placeholder="Your State">
					  </div>
					</div>
					<div class="form-group row">
					  <label class="col-sm-2 col-form-label">Post Code</label>
					  <div class="col-sm-10">
						<input class="form-control" type="number" placeholder="123456">
					  </div>
					</div>
					<div class="form-group row">
					  <label class="col-sm-2 col-form-label"></label>
					  <div class="col-sm-10">
						<button type="submit" class="btn btn-yellow">Submit</button>
					  </div>
					</div>
				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->
          <div class="box box-solid bg-black">
			<div class="box-header with-border">
			  <h3 class="box-title">Social media</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col-12">
					<div class="form-group row">
					  <label class="col-sm-2 col-form-label">Facebook</label>
					  <div class="col-sm-10">
						<input class="form-control" type="text" placeholder="facebook id">
					  </div>
					</div>
					<div class="form-group row">
					  <label class="col-sm-2 col-form-label">Instagram</label>
					  <div class="col-sm-10">
						<input class="form-control" type="text" placeholder="instagram id">
					  </div>
					</div>
					<div class="form-group row">
					  <label class="col-sm-2 col-form-label">Twitter</label>
					  <div class="col-sm-10">
						<input class="form-control" type="text" placeholder="twitter id">
					  </div>
					</div>
					<div class="form-group row">
					  <label class="col-sm-2 col-form-label">Linkedin</label>
					  <div class="col-sm-10">
						<input class="form-control" type="text" placeholder="linkedin id">
					  </div>
					</div>
					<div class="form-group row">
					  <label class="col-sm-2 col-form-label"></label>
					  <div class="col-sm-10">
						<button type="submit" class="btn btn-yellow">Submit</button>
					  </div>
					</div>
				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

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
	<script src="assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- popper -->
	<script src="assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- SlimScroll -->
	<script src="assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- FastClick -->
	<script src="assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- Crypto_Admin App -->
	<script src="js/template.js"></script>
	
	<!-- Crypto_Admin for demo purposes -->
	<script src="js/demo.js"></script>
	

</body>
</html>
