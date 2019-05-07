<?php include 'header.php';?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cryptocurrency Market Capitalizations
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Reports</a></li>
        <li class="breadcrumb-item active">Market Capitalizations</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-solid bg-dark">
        <div class="box-header with-border">
          <h3 class="box-title">Market Capitalizations</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
			<div class="table-responsive">
				<table class="table table-bordered dataTable no-footer table-striped" id="dataTable_crypto" role="grid">
                  <thead>
                     <tr role="row">
                        <th colspan="2" rowspan="1">Currency</th>
                        <th class="text-right">Price</th>
                        <th class="text-right">Market Cap</th>
                        <th class="text-right">Volume 24H</th>
                        <th class="text-right">Change % (1H)</th>
                        <th class="text-right">Change % (24H)</th>
                        <th class="text-right">Change % (7D)</th>
                        <th class="text-right">Chart</th>
                     </tr>
                  </thead>
                   <tbody>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc BTC" title="BTC"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Bitcoin</a></small>
                            <h6 class="text-muted">BTC</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 12,723.40</p></td>
                         <td class="text-right"><p><span>$</span> 312,078,267,295</p></td>
                         <td class="text-right"><p><span>$</span> 123,950,900,000</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -1.82%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 17.96%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -15.20%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc ETH" title="ETH"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Ethereum</a></small>
                            <h6 class="text-muted">ETH</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 123,070.39</p></td>
                         <td class="text-right"><p><span>$</span> 123,892,495,504</p></td>
                         <td class="text-right"><p><span>$</span> 7,123,310,000</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -1.28%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 26.13%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -11.74%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,5,5,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc XRP" title="XRP"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Ripple</a></small>
                            <h6 class="text-muted">XRP</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 1123.64</p></td>
                         <td class="text-right"><p><span>$</span> 132,391,183,730</p></td>
                         <td class="text-right"><p><span>$</span> 132,143,400,000</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -0.12%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 66.62%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -16.44%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,20,20,10,10,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc ADA" title="ADA"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Cardano</a></small>
                            <h6 class="text-muted">ADA</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 123.68</p></td>
                         <td class="text-right"><p><span>$</span> 123,643,890,043</p></td>
                         <td class="text-right"><p><span>$</span> 123,687,430,000</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -2.40%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 40.76%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -5.91%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,20,20,10,10,14,16,15,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc LTC" title="LTC"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Litecoin</a></small>
                            <h6 class="text-muted">LTC</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 123.88</p></td>
                         <td class="text-right"><p><span>$</span> 123,901,285,520</p></td>
                         <td class="text-right"><p><span>$</span> 123,235,390,000</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -2.56%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 26.96%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -15.74%</label></td>
                         <td><a href="#"><span class="sparklines">18,14,10,10,11,14,14,20,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc XEM" title="XEM"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> NEM</a></small>
                            <h6 class="text-muted">XEM</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 123.11</p></td>
                         <td class="text-right"><p><span>$</span> 45,996,569,999</p></td>
                         <td class="text-right"><p><span>$</span> 45543,335,000</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -1.35%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 43.32%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -19.62%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,20,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc NEO" title="NEO"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> NEO</a></small>
                            <h6 class="text-muted">NEO</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 544.15</p></td>
                         <td class="text-right"><p><span>$</span> 543,694,490,000</p></td>
                         <td class="text-right"><p><span>$</span> 453,304,130,000</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -4.32%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 36.90%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 31.05%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,20,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc DASH" title="DASH"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Dash</a></small>
                            <h6 class="text-muted">DASH</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 5435.27</p></td>
                         <td class="text-right"><p><span>$</span> 5435,771,308,110</p></td>
                         <td class="text-right"><p><span>$</span> 4535,439,000</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -0.94%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 30.83%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -16.47%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,20,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc EOS" title="EOS"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> EOS</a></small>
                            <h6 class="text-muted">EOS</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 354.57</p></td>
                         <td class="text-right"><p><span>$</span> 4534,460,354,540</p></td>
                         <td class="text-right"><p><span>$</span> 543,566,560,000</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -4.17%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 25.84%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -6.43%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,20,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc XMR" title="XMR"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Monero</a></small>
                            <h6 class="text-muted">XMR</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 543.11</p></td>
                         <td class="text-right"><p><span>$</span> 453,249,235,883</p></td>
                         <td class="text-right"><p><span>$</span> 4534,650,000</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -1.92%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 28.27%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -9.78%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,20,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc ETC" title="ETC"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Ethereum Classic</a></small>
                            <h6 class="text-muted">ETC</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 453.35</p></td>
                         <td class="text-right"><p><span>$</span> 453,109,936,842</p></td>
                         <td class="text-right"><p><span>$</span> 434,273,000</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -4.03%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 24.92%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -8.33%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,20,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc QTUM" title="QTUM"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Qtum</a></small>
                            <h6 class="text-muted">QTUM</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 453.18</p></td>
                         <td class="text-right"><p><span>$</span> 453,817,991,874</p></td>
                         <td class="text-right"><p><span>$</span> 453,043,000</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -3.16%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 26.87%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -21.11%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,20,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc LSK" title="LSK"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Lisk</a></small>
                            <h6 class="text-muted">LSK</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 453.77</p></td>
                         <td class="text-right"><p><span>$</span> 453,784,607,027</p></td>
                         <td class="text-right"><p><span>$</span> 453,214,400</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -1.97%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 38.82%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -9.49%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,20,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc OMG" title="OMG"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> OmiseGO</a></small>
                            <h6 class="text-muted">OMG</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 453.79</p></td>
                         <td class="text-right"><p><span>$</span> 543,916,950,969</p></td>
                         <td class="text-right"><p><span>$</span> 453,669,000</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -2.55%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 38.28%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -17.04%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,20,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc USDT" title="USDT"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Tether</a></small>
                            <h6 class="text-muted">USDT</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 4534.03</p></td>
                         <td class="text-right"><p><span>$</span> 543,672,345,408</p></td>
                         <td class="text-right"><p><span>$</span> 453,941,850,000</p></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 0.78%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 1.93%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 3.13%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc XVG" title="XVG"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Verge</a></small>
                            <h6 class="text-muted">XVG</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 0.11</p></td>
                         <td class="text-right"><p><span>$</span> 1,663,900,911</p></td>
                         <td class="text-right"><p><span>$</span> 261,147,000</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -6.63%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 70.25%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -25.29%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,20,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc ZEC" title="ZEC"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Zcash</a></small>
                            <h6 class="text-muted">ZEC</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 453.40</p></td>
                         <td class="text-right"><p><span>$</span> 534,636,048,635</p></td>
                         <td class="text-right"><p><span>$</span> 453,861,000</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -0.95%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 25.30%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -20.25%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,20,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc STRAT" title="STRAT"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Stratis</a></small>
                            <h6 class="text-muted">STRAT</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 867.53</p></td>
                         <td class="text-right"><p><span>$</span> 786,532,582,626</p></td>
                         <td class="text-right"><p><span>$</span> 786,016,000</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -1.87%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 34.40%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -8.87%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc ARDR" title="ARDR"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Ardor</a></small>
                            <h6 class="text-muted">ARDR</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 867.48</p></td>
                         <td class="text-right"><p><span>$</span> 786,482,804,960</p></td>
                         <td class="text-right"><p><span>$</span> 786,149,000</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -4.61%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 29.43%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 7.45%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc BCN" title="BCN"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Bytecoin</a></small>
                            <h6 class="text-muted">BCN</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 456.01</p></td>
                         <td class="text-right"><p><span>$</span> 1546,465,618,587</p></td>
                         <td class="text-right"><p><span>$</span> 45,811,700</p></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 0.63%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 54.15%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -21.15%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc STEEM" title="STEEM"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Steem</a></small>
                            <h6 class="text-muted">STEEM</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 4456.45</p></td>
                         <td class="text-right"><p><span>$</span> 1546,100,959,745</p></td>
                         <td class="text-right"><p><span>$</span> 25465,037,000</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -1.88%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 42.02%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -6.83%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc BTS" title="BTS"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> BitShares</a></small>
                            <h6 class="text-muted">BTS</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 546.36</p></td>
                         <td class="text-right"><p><span>$</span> 546,934,004</p></td>
                         <td class="text-right"><p><span>$</span> 546,824,700</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -3.65%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 35.07%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -39.46%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc DOGE" title="DOGE"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Dogecoin</a></small>
                            <h6 class="text-muted">DOGE</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 456.01</p></td>
                         <td class="text-right"><p><span>$</span> 941,142,659</p></td>
                         <td class="text-right"><p><span>$</span> 63,248,100</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -2.44%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 39.99%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -30.79%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc WAVES" title="WAVES"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Waves</a></small>
                            <h6 class="text-muted">WAVES</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 53.78</p></td>
                         <td class="text-right"><p><span>$</span> 35,976,000</p></td>
                         <td class="text-right"><p><span>$</span> 654,506,800</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -2.76%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 22.61%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -23.42%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc REP" title="REP"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Augur</a></small>
                            <h6 class="text-muted">REP</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 567.95</p></td>
                         <td class="text-right"><p><span>$</span> 789,479,700</p></td>
                         <td class="text-right"><p><span>$</span> 345,136,300</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -2.58%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 31.27%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -36.46%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc KMD" title="KMD"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Komodo</a></small>
                            <h6 class="text-muted">KMD</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 532.81</p></td>
                         <td class="text-right"><p><span>$</span> 35,469,055</p></td>
                         <td class="text-right"><p><span>$</span> 567,785,800</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -2.38%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 48.65%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -11.35%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc DGB" title="DGB"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> DigiByte</a></small>
                            <h6 class="text-muted">DGB</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 567.07</p></td>
                         <td class="text-right"><p><span>$</span> 235,577,239</p></td>
                         <td class="text-right"><p><span>$</span> 35,695,200</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -2.55%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 40.31%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -30.83%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc ARK" title="ARK"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Ark</a></small>
                            <h6 class="text-muted">ARK</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 35.65</p></td>
                         <td class="text-right"><p><span>$</span> 56,050,748</p></td>
                         <td class="text-right"><p><span>$</span> 568,076,300</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -0.91%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 42.48%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -24.47%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc SALT" title="SALT"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> SALT</a></small>
                            <h6 class="text-muted">SALT</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 768.99</p></td>
                         <td class="text-right"><p><span>$</span> 685,586,223</p></td>
                         <td class="text-right"><p><span>$</span> 586,684,300</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -0.53%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 35.98%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -24.19%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc BAT" title="BAT"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Basic Attention Token</a></small>
                            <h6 class="text-muted">BAT</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 456.63</p></td>
                         <td class="text-right"><p><span>$</span> 5435,186,000</p></td>
                         <td class="text-right"><p><span>$</span> 435,758,900</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -4.29%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 63.56%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -10.68%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc GNT" title="GNT"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Golem</a></small>
                            <h6 class="text-muted">GNT</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 235.73</p></td>
                         <td class="text-right"><p><span>$</span> 235,448,133</p></td>
                         <td class="text-right"><p><span>$</span> 235,969,100</p></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 2.46%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 39.84%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -15.94%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc DCR" title="DCR"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Decred</a></small>
                            <h6 class="text-muted">DCR</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 463.31</p></td>
                         <td class="text-right"><p><span>$</span> 346,798,364</p></td>
                         <td class="text-right"><p><span>$</span> 346,615,730</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -2.64%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 26.37%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -15.64%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc GBYTE" title="GBYTE"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Byteball Bytes</a></small>
                            <h6 class="text-muted">GBYTE</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 436.48</p></td>
                         <td class="text-right"><p><span>$</span> 436,397,493</p></td>
                         <td class="text-right"><p><span>$</span> 2346505,740</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -1.06%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 54.71%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 24.96%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>

                      <tr role="row">
                         <td><span><a href="#"><i class="cc PIVX" title="PIVX"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> PIVX</a></small>
                            <h6 class="text-muted">PIVX</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 67.66</p></td>
                         <td class="text-right"><p><span>$</span> 567,842,023</p></td>
                         <td class="text-right"><p><span>$</span> 435,726,770</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -2.13%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 22.92%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -22.99%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc FCT" title="FCT"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Factom</a></small>
                            <h6 class="text-muted">FCT</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 435.78</p></td>
                         <td class="text-right"><p><span>$</span> 23,580,828</p></td>
                         <td class="text-right"><p><span>$</span> 43,881,500</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -1.58%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 38.03%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -21.28%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc RDD" title="RDD"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> ReddCoin</a></small>
                            <h6 class="text-muted">RDD</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 756.01</p></td>
                         <td class="text-right"><p><span>$</span> 567,219,857</p></td>
                         <td class="text-right"><p><span>$</span> 12439,938,500</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -3.70%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 71.16%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -24.34%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc DGD" title="DGD"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> DigixDAO</a></small>
                            <h6 class="text-muted">DGD</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 234.04</p></td>
                         <td class="text-right"><p><span>$</span> 324,070,000</p></td>
                         <td class="text-right"><p><span>$</span> 234,433,200</p></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 0.25%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 18.68%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -3.47%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc SYS" title="SYS"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Syscoin</a></small>
                            <h6 class="text-muted">SYS</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 234.70</p></td>
                         <td class="text-right"><p><span>$</span> 234,041,676</p></td>
                         <td class="text-right"><p><span>$</span> 7654089,720</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -2.43%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 37.39%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -10.68%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc MONA" title="MONA"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> MonaCoin</a></small>
                            <h6 class="text-muted">MONA</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 56.53</p></td>
                         <td class="text-right"><p><span>$</span> 546,827,916</p></td>
                         <td class="text-right"><p><span>$</span> 34,624,600</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -0.56%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 27.45%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -17.58%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc MAID" title="MAID"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> MaidSafeCoin</a></small>
                            <h6 class="text-muted">MAID</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 234.76</p></td>
                         <td class="text-right"><p><span>$</span> 24,003,814</p></td>
                         <td class="text-right"><p><span>$</span> 546,891,280</p></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 0.18%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 26.44%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -21.25%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc NXT" title="NXT"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Nxt</a></small>
                            <h6 class="text-muted">NXT</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 546.34</p></td>
                         <td class="text-right"><p><span>$</span> 57,585,059</p></td>
                         <td class="text-right"><p><span>$</span> 543,466,200</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -3.02%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 39.71%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -19.76%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc XZC" title="XZC"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> ZCoin</a></small>
                            <h6 class="text-muted">XZC</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 534.10</p></td>
                         <td class="text-right"><p><span>$</span> 7567,352,936</p></td>
                         <td class="text-right"><p><span>$</span> 235,700,890</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -1.86%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 27.82%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -19.19%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc GAME" title="GAME"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> GameCredits</a></small>
                            <h6 class="text-muted">GAME</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 325.83</p></td>
                         <td class="text-right"><p><span>$</span> 352,078,970</p></td>
                         <td class="text-right"><p><span>$</span> 756,081,870</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -2.93%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 34.00%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -18.16%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc PART" title="PART"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Particl</a></small>
                            <h6 class="text-muted">PART</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 567.83</p></td>
                         <td class="text-right"><p><span>$</span> 5678,053,213</p></td>
                         <td class="text-right"><p><span>$</span> 53,687</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -1.80%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 32.53%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 32.35%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc GNO" title="GNO"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Gnosis</a></small>
                            <h6 class="text-muted">GNO</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 45.20</p></td>
                         <td class="text-right"><p><span>$</span> 3,783,464</p></td>
                         <td class="text-right"><p><span>$</span> 567,359,600</p></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 0.95%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 53.11%</label></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -26.89%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
                      </tr>
                      <tr role="row">
                         <td><span><a href="#"><i class="cc EMC" title="EMC"></i></a></span></td>
                         <td>
                            <small><a href="#" class="text-yellow hover-warning"> Emercoin</a></small>
                            <h6 class="text-muted">EMC</h6>
                         </td>
                         <td class="text-right"><p><span>$</span> 567.52</p></td>
                         <td class="text-right"><p><span>$</span> 435,738,319</p></td>
                         <td class="text-right"><p><span>$</span> 543,293,630</p></td>
                         <td class="no-wrap text-right"><label class="label label-danger"><i class="fa fa-chevron-down"></i> -2.01%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 30.30%</label></td>
                         <td class="no-wrap text-right"><label class="label label-success"><i class="fa fa-chevron-up"></i> 2.43%</label></td>
                         <td><a href="#"><span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span></a></td>
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

<?php include 'scripts.php';?>