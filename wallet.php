<?php include 'header.php';
$bal = 0 ;?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Wallet Details
			</h1>
			
		
		
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Wallet</a></li>
        <li class="breadcrumb-item active">Wallet Details</li>
      </ol>
    </section>
		
    <!-- Main content -->
    <section class="content">
		
	<div class="well">
	
    <table class="table">
      <thead>
        <tr>
          <th>Wallet Name</th>
          <th>Wallet Address</th>
          <th>Balance</th>
          <th></th>
          <th style="width: 36px;"></th>
        </tr>
      </thead>
      <tbody>
		<?php 
		
		include_once 'vendor/autoload.php';
		$fullNode = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
		$solidityNode = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
		$eventServer = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
		try {
				$tron = new \IEXBase\TronAPI\Tron($fullNode, $solidityNode, $eventServer);
		} catch (\IEXBase\TronAPI\Exception\TronException $e) {
				exit($e->getMessage());
		}
		$sql= "SELECT * FROM `Wallets` WHERE `WalletOwner` = '".$userEmail."'";
		$result= $conn->query($sql);
		if($result === false){
			user_error("Query failed: ".$conn->error."<br />");
			return false;
		}
			if($result->num_rows>0){
			while($row = $result->fetch_assoc()){
				
				$tron->setAddress($row['WalletAdr']);
				$account = $tron->getAccount(null, true);
				$balance = $tron->getBalance(null, true);
		
				$bal = $bal + intval($account['assetV2']['0']['value']);
				$english_format_number = number_format($account['assetV2']['0']['value']);
				$id = $row['ID'];
				$WalletAdr=$row['WalletAdr'];
				$Name=$row['WalletName'];
				echo '
				<tr> 					
							<td>	<a href="#" data-toggle="modal" data-target="#nameEdit'.$id.'"><i class="icon-pencil"></i></a> 
							&nbsp; &nbsp;'. $row['WalletName'] .'</td>
							
							<td><a href="#">'.$row['WalletAdr'].'</a></td>
							<td>'.$english_format_number. ' INFB</td>
							<td><a href="#" data-toggle="modal" data-target="#qrmodal"><img style="width: 25px;" src="qrencoder.php?id='.$row['WalletAdr'].'" alt="QRcode" />Copy QR code</a></td>
							<td>
								<div class="modal fade" id="qrmodal" tabindex="-1" role="dialog" aria-labelledby="qrmodalTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="qrmodalTitle">Wallet Address</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
											<img style="width: 100%;" src="qrencoder.php?id='.$row['WalletAdr'].'" alt="QRcode" />
											</div>
										</div>
									</div>
								</div>
							</td>
				</tr>
				';
				
				
			}
			if(isset($_POST['updateWallet'.$id])){
				$walletUpdate= "UPDATE `Wallets` SET `WalletName`='".$_POST['walletName']."', `WalletOwner`='".$_POST['Email']."', `WalletAdr`='".$_POST['walletAdr']."' WHERE `ID` = ".$id."";
				$conn->query($walletUpdate);
				if($conn->query($walletUpdate) === TRUE){
					
				}
			};
			$usdConv = $bal * 0.01;
			echo ' <div>
			<div class="floatLeft" >
			<h2>InfinityBeta (INFB)</h2><h4>Price expected for the introduction 0.01USD/INF</h4>
			</div>
			<div class="floatRight">
			<h2>Total Balance = '.number_format($bal).' INFB</h2>
			<h4 class="floatRight">'.number_format($usdConv).' USD</h4>
			</div>
			<div class="clear"></div>
			</div>';
		}
		
		?>
				
				<?php
				
				$getWallet="SELECT * FROM `Wallets` WHERE `WalletOwner`= '".$userEmail."'";
      $fetchWallet =$conn->query($getWallet);
      if($fetchWallet->num_rows>0){
        
        while($row = $fetchWallet->fetch_assoc()){
          // $WalletOwner=$row['WalletOwner'];
          $WalletAdr=$row['WalletAdr'];
          // $WalleltName=$row['WalletName'];
          $id=$row['ID'];
          echo '
          
					<div class="modal fade" id="nameEdit'.$id.'" tabindex="-1" role="dialog" aria-labelledby="nameEditTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="nameEditTitle">Edit Wallet Name</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
							<form method="post">
							<div class="row">
									<div class="col-12">
									<div class="row">
											<div class="col-12">
											<p>Wallet Address:'.$WalletAdr.' </p>
                      <input type="text" name="walletAdr" class="form-control" value="'.$WalletAdr.'" placeholder="Wallet address" readonly>  
											</div>
											<div class="col-12">
											<p>Wallet Name: '.$row['WalletName'].'</p>
											<input type="text" name="walletName" class="form-control" placeholder="Email" value="'.$row['WalletName'].'">
											</div>
									
									</div>
											</div>
			
								</div>
									<div class="row">
									<button class="btn btn-success col-12" type="submit" id="update'.$id.'" name="updateWallet'.$id.'" value="submit">Update</button>
									
									
						
							</div>
					</form>
					
							</div>
						</div>
					</div>
				</div>
          ';
          if(isset($_POST['updateWallet'.$id])){
            $walletUpdate= "UPDATE `Wallets` SET `WalletName`='".$_POST['walletName']."', `WalletAdr`='".$_POST['walletAdr']."' WHERE `ID` = ".$id."";
            $conn->query($walletUpdate);
            if($conn->query($walletUpdate) === TRUE){
              $msg='Name updated for wallet: '.$_POST['walletAdr'].' please refresh the page to view changes';
            }
          };
				}
			}
				?>
				<?php if($msg != "") echo '<div class="alert alert-success ">'. $msg . ' <button class="btn btn-info floatRight" id="refresh" onclick="refresh()">Refresh</button><div class="clear"></div></div>';?>

      </tbody>
		</table>
		</div>
	  
	
  </div>
  <!-- /.content-wrapper -->  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php require 'scripts.php';?>