<?php include 'header.php';?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Currency Exchange
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Currency Exchange</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="box box-inverse bg-dark bg-hexagons-white">
			<div class="box-body">
				<h1 class="page-header text-center no-border font-weight-600 font-size-60 mt-25"><span class="text-yellow">Buy</span> and <span class="text-danger">Sell</span> Coins at the<br> Crypto without additional fees</h1>
				<h3 class="subtitle text-center ">Buy now and get +30% extra bonus Minimum pre-sale<br> amount 50 Crypto Coin. We accept BTC crypto-currency.</h3>
				<div class="row">
					<div class="col-12">
						<div class="exchange-calculator text-center mt-35">
							<input type="text" class="form-control" name="coins-exchange" placeholder="" value="10.1548">                
							<select class="coins-exchange" name="state">
							   <option value="BTC">BTC</option>
							   <option value="BTC">Ethereum</option>
							   <option value="Ripple">Ripple</option>
							   <option value="Ripple">Bitcoin Cash</option>
							   <option value="Ripple">Cardano</option>
							   <option value="Ripple">Litecoin</option>
							   <option value="Ripple">NEO</option>
							   <option value="Ripple">Stellar</option>
							   <option value="Ripple">EOS</option>
							   <option value="Ripple">NEM</option>
							</select>
							<div class="equal"> = </div>
							<input type="text" class="form-control" name="money-exchange" placeholder="" value="125.158">                
							<select class="money-exchange" name="state">
							   <option value="USD">USD</option>
							   <option value="EURO">EURO</option>
							</select>
					   </div>
					   <div class="text-center mt-15 mb-25">
							<a href="#" class="btn btn-yellow btn-lg mx-auto">EXCHANGE NOW</a>
					   </div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6">
		    	<div class="box pull-up bg-banknote-white">
				  <div class="box-body">
					  <div class="media align-items-center p-0">
						<div class="text-center">
						  <a href="#"><i class="cc BTC mr-5" title="BTC"></i></a>
						</div>
						<div>
						  <h3 class="no-margin text-bold">Bitcoin BTC</h3>
						</div>
					  </div>
					  <div class="flexbox align-items-center mt-5">
						<div>
						  <p class="no-margin font-weight-600"><span class="text-yellow">0.00000434 </span>BTC<span class="text-info">$0.04</span></p>
						</div>
						<div class="text-right">
						  <p class="no-margin font-weight-600"><span class="text-success">+1.35%</span></p>
						</div>
					  </div>
				</div>
				<div class="box-footer p-0 no-border">
					<div class="chart"><canvas id="chartjs1" class="h-80"></canvas></div>
				</div>
			 </div>
		  </div>
			<div class="col-lg-3 col-md-6">
		    	<div class="box pull-up bg-banknote-white">
				  <div class="box-body">
					  <div class="media align-items-center p-0">
						<div class="text-center">
						  <a href="#"><i class="cc LTC mr-5" title="LTC"></i></a>
						</div>
						<div>
						  <h3 class="no-margin text-bold">Litecoin LTC</h3>
						</div>
					  </div>
					  <div class="flexbox align-items-center mt-5">
						<div>
						  <p class="no-margin font-weight-600"><span class="text-yellow">0.00000434 </span>LTC<span class="text-info">$0.04</span></p>
						</div>
						<div class="text-right">
						  <p class="no-margin font-weight-600"><span class="text-danger">-1.35%</span></p>
						</div>
					  </div>
				</div>
				<div class="box-footer p-0 no-border">
					<div class="chart"><canvas id="chartjs2" class="h-80"></canvas></div>
				</div>
			 </div>
		  </div>
			<div class="col-lg-3 col-md-6">
		    	<div class="box pull-up bg-banknote-white">
				  <div class="box-body">
					  <div class="media align-items-center p-0">
						<div class="text-center">
						  <a href="#"><i class="cc NEO mr-5" title="NEO"></i></a>
						</div>
						<div>
						  <h3 class="no-margin text-bold">Neo NEO</h3>
						</div>
					  </div>
					  <div class="flexbox align-items-center mt-5">
						<div>
						  <p class="no-margin font-weight-600"><span class="text-yellow">0.00000434 </span>NEO<span class="text-info">$0.04</span></p>
						</div>
						<div class="text-right">
						  <p class="no-margin font-weight-600"><span class="text-danger">-1.35%</span></p>
						</div>
					  </div>
				</div>
				<div class="box-footer p-0 no-border">
					<div class="chart"><canvas id="chartjs3" class="h-80"></canvas></div>
				</div>
			 </div>
		  </div>
			<div class="col-lg-3 col-md-6">
		    	<div class="box pull-up bg-banknote-white">
				  <div class="box-body">
					  <div class="media align-items-center p-0">
						<div class="text-center">
						  <a href="#"><i class="cc DASH mr-5" title="DASH"></i></a>
						</div>
						<div>
						  <h3 class="no-margin text-bold">Dash DASH</h3>
						</div>
					  </div>
					  <div class="flexbox align-items-center mt-5">
						<div>
						  <p class="no-margin font-weight-600"><span class="text-yellow">0.00000434 </span>DASH<span class="text-info">$0.04</span></p>
						</div>
						<div class="text-right">
						  <p class="no-margin font-weight-600"><span class="text-success">+1.35%</span></p>
						</div>
					  </div>
				</div>
				<div class="box-footer p-0 no-border">
					<div class="chart"><canvas id="chartjs4" class="h-80"></canvas></div>
				</div>
			 </div>
		  </div>
	   </div>
		<div class="row mt-30">
		  <div class="col-12 col-md-6 col-lg-4">
            <div class="box box-body bg-hexagons-white pull-up">
              <div class="media align-items-center p-0">
                <div class="text-center">
				  <a href="#"><i class="cc BTC mr-5" title="BTC"></i></a>
			  	</div>
			  	<div>
				  <h3 class="no-margin">Bitcoin BTC</h3>
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
		  <div class="col-12 col-md-6 col-lg-4">
            <div class="box box-body bg-hexagons-white pull-up">
              <div class="media align-items-center p-0">
                <div class="text-center">
				  <a href="#"><i class="cc LTC mr-5" title="LTC"></i></a>
			  	</div>
			  	<div>
				  <h3 class="no-margin">Litecoin LTC</h3>
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
		  <div class="col-12 col-md-6 col-lg-4">
            <div class="box box-body bg-hexagons-white pull-up">
              <div class="media align-items-center p-0">
                <div class="text-center">
				  <a href="#"><i class="cc NEO mr-5" title="NEO"></i></a>
			  	</div>
			  	<div>
				  <h3 class="no-margin">Neo NEO</h3>
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
		  <div class="col-12 col-md-6 col-lg-4">
            <div class="box box-body bg-hexagons-white pull-up">
              <div class="media align-items-center p-0">
                <div class="text-center">
				  <a href="#"><i class="cc DASH mr-5" title="DASH"></i></a>
			  	</div>
			  	<div>
				  <h3 class="no-margin">Dash DASH</h3>
			  	</div>
              </div>
              <div class="flexbox align-items-center mt-25">
                <div>
				  <p class="no-margin">0.34000434 <span class="text-gray">DASH</span> <span class="text-info">$0.54</span></p>
			  	</div>
			  	<div class="text-right">
				  <p class="no-margin"><span class="text-danger">-5.35%</span></p>
			 	</div>
              </div>
            </div>			
          </div>
		  <div class="col-12 col-md-6 col-lg-4">
            <div class="box box-body bg-hexagons-white pull-up">
              <div class="media align-items-center p-0">
                <div class="text-center">
				  <a href="#"><i class="cc ETH mr-5" title="ETH"></i></a>
			  	</div>
			  	<div>
				  <h3 class="no-margin">Ethereum ETH</h3>
			  	</div>
              </div>
              <div class="flexbox align-items-center mt-25">
                <div>
				  <p class="no-margin">0.12300434 <span class="text-gray">ETH</span> <span class="text-info">$0.12</span></p>
			  	</div>
			  	<div class="text-right">
				  <p class="no-margin"><span class="text-success">+0.35%</span></p>
			 	</div>
              </div>
            </div>			
          </div>
		  <div class="col-12 col-md-6 col-lg-4">
            <div class="box box-body bg-hexagons-white pull-up">
              <div class="media align-items-center p-0">
                <div class="text-center">
				  <a href="#"><i class="cc XRP mr-5" title="XRP"></i></a>
			  	</div>
			  	<div>
				  <h3 class="no-margin">Ripple XRP</h3>
			  	</div>
              </div>
              <div class="flexbox align-items-center mt-25">
                <div>
				  <p class="no-margin">0.00000434 <span class="text-gray">XRP</span> <span class="text-info">$0.04</span></p>
			  	</div>
			  	<div class="text-right">
				  <p class="no-margin"><span class="text-danger">-1.35%</span></p>
			 	</div>
              </div>
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


	
	<script>
		if ($('.coins-exchange').length) {
       $('.coins-exchange').select2();
    }
    if ($('.money-exchange').length) {
       $('.money-exchange').select2();
    }
	</script>
	<?php include 'scripts.php';?>