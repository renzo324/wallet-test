<?php require 'header.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Support
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Support</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
		<div class="col-lg-3 col-12">
		  <div class="box box-body h-p100">
			  <a href="mailbox.html" class="btn btn-success btn-block btn-shadow margin-bottom p-15">Back to Inbox</a>

			  <div class="box no-shadow">
				<div class="box-body no-padding mailbox-nav">
				  <ul class="nav nav-pills flex-column">
					<li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-ios-email-outline"></i> Inbox
					  <span class="label label-success pull-right">12</span></a></li>
					<li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-paper-airplane"></i> Sent</a></li>
					<li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-email-unread"></i> Drafts</a></li>
					<li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-star"></i>  Starred <span class="label label-warning pull-right">14</span></a>
					</li>
					<li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-trash-a"></i> Trash</a></li>
				  </ul>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /. box -->
			  <div class="box no-shadow b-1">
				<div class="box-body no-padding mailbox-nav">
				  <ul class="nav nav-pills flex-column">
					<li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
					<li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
					<li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
				  </ul>
				</div>
				<!-- /.box-body -->
			  </div>
			
		  </div>
          <!-- /.box -->
        </div> 
        <!-- /.col -->
        <div class="col-lg-9 col-12">			
		  
			<div class="box box-solid bg-dark">
			  <div class="box-header no-border">
				<h3 class="box-title">Message Admins</h3>
			  </div>
        <form method="post">
			  <div class="box-body bg-dark">
				  <div class="form-group">
					<input class="form-control" placeholder="To:">
				  </div>
				  <div class="form-group">
					<input class="form-control" placeholder="Subject:">
				  </div>
				  <div class="form-group">
						<textarea id="compose-textarea" placeholder="Your Message Here ..." class="form-control h-300"></textarea>
				  </div>
				  <div class="form-group">
					<div class="btn btn-info btn-file">
					  <i class="fa fa-paperclip"></i> Attachment
					  <input type="file" name="attachment">
					</div>
					<p class="help-block">Max. 32MB</p>
				  </div>
        </div>
        </form>			  
				<div class="box-footer bg-dark">
				  <div class="pull-right">
					<button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
					<button type="submit" class="btn btn-success"><i class="fa fa-envelope-o"></i> Send</button>
				  </div>
				  <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> Discard</button>				  
				</div>
			</div> 
			
          <!-- /. box -->
        </div>        
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   
  
  <!-- Control Sidebar -->
  
</div>

	<script>
	  $(function () {
		//Add text editor
		$("#compose-textarea").wysihtml5();
	  });
	</script>
	
<?php require 'scripts.php';?>
