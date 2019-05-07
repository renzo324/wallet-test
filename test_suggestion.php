
<?php include 'header.php';?>
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
						<li><img src="../images/logo-deroulant.png"></i> INF <span class="text-yellow"> $0.0002</span></li> 
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
								 <td><p class="font-size-18 no-margin">INF</p> </td>
								 <td><p class="no-margin"><span>$</span> 0.0002</p></td>
                 <td class="no-wrap"><span class="badge badge-success"><i class="fa fa-chevron-up"></i> +0.0%</span></td>
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
          <a href="#"><img src="../images/logo-simple2.png"><title="Infinity"></i></a>
				</div>
				<div>
				  <h2 class="no-margin">Infinity INF</h2>
				</div>
			  </div>
			  <div class="flexbox align-items-center mt-25">
				<div>
				  <p class="no-margin">0.0002 <span class="text-gray">INF</span> <span class="text-info">$0.0000</span></p>
				</div>
				<div class="text-right">
				  <p class="no-margin"><span class="text-success">+0%</span></p>
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
			
		  <div class="col-lg-0 col-12">
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

	
</body>
</html>