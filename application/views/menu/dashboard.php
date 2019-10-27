<div class="content-wrapper">
	<section class="content-header">
		<!-- <h1 class="text-center">Data Penjualan</h1> -->
	</section>
	<section class="content">
		<div class="container">
			<div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $data['polos']['qty'];?><sup style="font-size: 20px"> Kaca Polos</sup></h3>

              <p>Terjual</p>

            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
      </div>
      <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $data['rayben']['qty'];?><sup style="font-size: 20px"> Kaca Rayben</sup></h3>

              <p>Terjual</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
      </div>
      <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?= $data['cermin']['qty'];?><sup style="font-size: 20px"> Kaca Cermin</sup></h3>

              <p>Terjual</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-md-offset-3">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $data['black']['qty'];?><sup style="font-size: 20px"> Kaca Black</sup></h3>

              <p>Terjual</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
      </div>
      <div class="col-lg-3 col-xs-6 ">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?= $data['es']['qty'];?><sup style="font-size: 20px"> Kaca Es</sup></h3>

              <p>Terjual</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
      </div>
			
		</div>

			<h3 class="text-center">Tabel Detail Penjualan</h3>
			 <div class="row" style="margin-bottom: 10px; margin-left: 40px;">
			 	<a target="_blank" href="<?= base_url();?>admin/exportDetail" class="btn btn-success"><i class="fas fa-file-export"></i> Export to Excel</a>
			 	
			 </div>
      <div class="container">
      	<div class="col-lg">
      	<div class="row">
      		<div class="panel panel-default">
      			<div class="panel-body">
      				<div class="table-responsive">
              <!-- <p><?php echo json_encode($this->session->userdata())?></p> -->
      					<table class="table table-hover">
      						<thead>
      							<tr>
      								<th>Jenis Kaca</th>
      								<th>3mm</th>
      								<th>4mm</th>
      								<th>5mm</th>
      								<th>6mm</th>
      								<th>8mm</th>
      								<th>10mm</th>
      								<th>Total Penjualan</th>
      							</tr>
      						</thead>
      						<tbody>
      							<tr>
      								<td>Kaca Rayben</td>
      								<td><?= $detail['rayben3']['qty']?></td>
      								<td><?= $detail['rayben4']['qty']?></td>
      								<td><?= $detail['rayben5']['qty']?></td>
      								<td><?= $detail['rayben6']['qty']?></td>
      								<td><?= $detail['rayben8']['qty']?></td>
      								<td><?= $detail['rayben10']['qty']?></td>
      								<td><strong><?= $data['rayben']['qty'];?></strong></td>
      							</tr>
      							<tr>
      								<td>Kaca Polos</td>
      								<td><?= $detail['polos3']['qty']?></td>
      								<td><?= $detail['polos4']['qty']?></td>
      								<td><?= $detail['polos5']['qty']?></td>
      								<td><?= $detail['polos6']['qty']?></td>
      								<td><?= $detail['polos8']['qty']?></td>
      								<td><?= $detail['polos10']['qty']?></td>
      								<td><strong><?= $data['polos']['qty'];?></strong></td>
      							</tr>

      							<tr>
      								<td>Kaca Cermin</td>
      								<td><?= $detail['cermin3']['qty']?></td>
      								<td><?= $detail['cermin4']['qty']?></td>
      								<td><?= $detail['cermin5']['qty']?></td>
      								<td><?= $detail['cermin6']['qty']?></td>
      								<td><?= $detail['cermin8']['qty']?></td>
      								<td><?= $detail['cermin10']['qty']?></td>
      								<td><strong><?= $data['cermin']['qty'];?></strong></td>
      							</tr>
      							<tr>
      								<td>Kaca Black</td>
      								<td><?= $detail['black3']['qty']?></td>
      								<td><?= $detail['black4']['qty']?></td>
      								<td><?= $detail['black5']['qty']?></td>
      								<td><?= $detail['black6']['qty']?></td>
      								<td><?= $detail['black8']['qty']?></td>
      								<td><?= $detail['black10']['qty']?></td>
      								<td><strong><?= $data['black']['qty'];?></strong></td>
      							</tr>
      							<tr>
      								<td>Kaca Es</td>
      								<td><?= $detail['es3']['qty']?></td>
      								<td><?= $detail['es4']['qty']?></td>
      								<td><?= $detail['es5']['qty']?></td>
      								<td><?= $detail['es6']['qty']?></td>
      								<td><?= $detail['es8']['qty']?></td>
      								<td><?= $detail['es10']['qty']?></td>
      								<td><strong><?= $data['es']['qty'];?></strong></td>
      							</tr>
      						</tbody>
      					</table>
      					
      				</div>
      				
      			</div>
      		</div>
      	</div>
      </div>
      	
      </div>
	</section>
	
</div>