<?php require 'header.php';?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       KYC
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Accounts</a></li>
        <li class="breadcrumb-item active">KYC</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xl-4 col-lg-5">

          <!-- Profile Image -->
          <div class="box bg-inverse bg-banknote-dark">
            <div class="box-body box-profile">
						<div class="pImage">
        		<?php ?>  
        			<img src="img/coin.png" class="rounded-circle" alt="User Image">
        		
            <?php
            if($firstName !=='' && $lastName !== ''){
              echo '<h2 class="profile-username text-center mb-0">'.$firstName.' '. $lastName.' </h2>';}
            else{
              echo '<h2 class="profile-username text-center mb-0"> Unknown User </h2>';}?>
            <?php if($userEmail !== ''){ echo '<h4 class="text-center mt-0"><i class="fa fa-envelope-o mr-10"></i>'.$userEmail.'</h4>';}
            ?>
            </div>
            
              <div class="row">
				<div class="col-12">
					<div class="media-list media-list-hover media-list-divided w-p100 mt-30">
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
        <?php 
        if(isset($_POST['update'])){ 
           $Fname=$_POST['Fname'];
           $Lname=$_POST['Lname'];
           $Email=$_POST['Email'];
           $Tel=$_POST['Tel'];
           $Home=$_POST['Home'];
           $City=$_POST['City'];
           $State=$_POST['State'];
           $Post=$_POST['Post'];
           $sqlUpdate= "UPDATE `Users` SET `Fname` = '".$Fname."', `Lname` = '".$Lname."', `Phonenumb` = '".$Tel."', `Email` = '".$Email."' ,`Streetadr` ='".$Home."',`City` ='".$City."',`State` ='".$State."',`Post` ='".$Post."' WHERE `ID` = ".$row['ID']."";
           $conn->query($sqlUpdate);
      };          
            echo 
                '<div id="display">
                <div id="usersActive" style="display: none;">
					<form method="post">
					  <div class="row">
						<div class="col mt-1">
						  <p class="col-form-label">First Name: </p>
						  <input type="text" class="form-control" name="Fname" value="'.$row['Fname'].'" placeholder="First name">
						</div>
						<div class="col mt-1">
						  <p class="col-form-label">Last Name: </p>
						  <input type="text" name="Lname" class="form-control" value="'.$row['Lname'].'" placeholder="Last name">
						</div>
					  </div>
					  <div class="row">
						<div class="col mt-2">
						  <p class="col-form-label">Email: '.$row['Email'].'</p>
						  <input type="text" name="Email" class="form-control" placeholder="Email" value="'.$row['Email'].'" readonly>
						</div>
						<div class="col mt-2">
						  <p class="col-form-label">Phone number: </p>
						  <input type="text" name="Tel" class="form-control" value="'.$row['Phonenumb'].'" placeholder="Phone Number">
						</div>
					  </div> 
					  <div class="row">
						<div class="col mt-1">
						  <p class="col-form-label">Street address: '.$row['Streetadr'].'</p>
						  <input type="text" name="Home" class="form-control" placeholder="Street Address" value="'.$row['Streetadr'].'">
						</div>
					  </div> 
					  <div class="row">
						<div class="col mt-1">
						  <p class="col-form-label">City: '.$row['City'].'</p>
						  <input type="text" name="City" class="form-control" value="'.$row['City'].'" placeholder="City">
						</div>
						<div class="col mt-1">
						  <p class="col-form-label">State: '.$row['State'].'</p>
						  <input type="text" name="State" class="form-control" placeholder="State" value="'.$row['State'].'">
						</div>
						<div class="col mt-1">
						  <p class="col-form-label">Postcode: '.$row['Post'].'</p>
						  <input type="text" name="Post" class="form-control" placeholder="Postcode" value="'.$row['Post'].'">
						</div>
					  </div>
					  <div class="subs floatRight mt-10">
					  <button class="btn btn-success" type="submit" name="update" value="submit">Update</button>
					  <button class="btn btn-warning " id="reset" onclick="reset">Cancel</button>
					  </div>
					  <div class="clear"></div>
					</form>	</div>
                </div>
                
              ';
          echo '
          <div id="usersInactive">
                <form method="post">
                  <div class="row">
                    <div class="col mt-1">
                      <p class="col-form-label">First Name: </p>
                      <input type="text" class="form-control" name="Fname" value="'.$row['Fname'].'" placeholder="First name" readonly>
                    </div>
                    <div class="col mt-1">
                      <p class="col-form-label">Last Name: </p>
                      <input type="text" name="Lname" class="form-control" value="'.$row['Lname'].'" placeholder="Last name" readonly>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mt-2">
                      <p class="col-form-label">Email: '.$row['Email'].'</p>
                      <input type="text" name="Email" class="form-control" placeholder="Email" value="'.$row['Email'].'" readonly>
                    </div>
                    <div class="col mt-2">
                      <p class="col-form-label">Phone number: </p>
                      <input type="text" name="Tel" class="form-control" value="'.$row['Phonenumb'].'" placeholder="Phone Number" readonly>
                    </div>
                  </div> 
                  <div class="row">
                    <div class="col mt-1">
                      <p class="col-form-label">Street address: '.$row['Streetadr'].'</p>
                      <input type="text" name="Home" class="form-control" placeholder="Street Address" value="'.$row['Streetadr'].'" readonly>
                    </div>
                  </div> 
                  <div class="row">
                    <div class="col mt-1">
                      <p class="col-form-label">City: '.$row['City'].'</p>
                      <input type="text" name="City" class="form-control" value="'.$row['City'].'" placeholder="City" readonly>
                    </div>
                    <div class="col mt-1">
                      <p class="col-form-label">State: '.$row['State'].'</p>
                      <input type="text" name="State" class="form-control" placeholder="State" value="'.$row['State'].'" readonly>
                    </div>
                    <div class="col mt-1">
                      <p class="col-form-label">Postcode: '.$row['Post'].'</p>
                      <input type="text" name="Post" class="form-control" placeholder="Postcode" value="'.$row['Post'].'" readonly>
                    </div>
                  </div>
                  
                  <div class="clear"></div>
                </form>	<div class="subs floatRight mt-10">
                <button class="btn btn-warning id="edit" onclick="show()">edit</button>
					      </div></div>
          ';
        ?>
        
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->
          <div class="box box-solid bg-black">
			
			<!-- /.box-header -->
			
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
 
   
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php require 'scripts.php';?>