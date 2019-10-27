<div class="content-wrapper">
	<section class="content-header">
		<h1><?= $title;?></h1>
	</section>
	<section class="content">
		<div class="col-lg-6">
			<div class="row justify-content-center">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-borderless">
									<tr>
										<th>Tanggal Order</th>
										<th>: <?php $timestamp = strtotime($data['tgl_order']); echo date('d/m/Y', $timestamp);?></th>
									</tr>
									<tr>
										<th>Jenis Kaca</th>
										<th>: <?= $data['jenis_kaca'];?></th>
									</tr>
									<tr>
										<th>Ukuran Kaca</th>
										<th>: <?= $data['ukuran'];?></th>
									</tr>
									<tr>
										<th>Ketebalan Kaca</th>
										<th>: <?= $data['ketebalan'];?></th>
									</tr>
									<tr>
										<th>Quantity</th>
										<th>: <?= $data['qty'];?></th>
									</tr>
									<tr>
										<th>Harga</th>
										<th>: <?= $data['harga'];?></th>
									</tr>
									<tr>
										<th>Keterangan</th>
										<th>: <?= $data['keterangan'];?></th>
									</tr>
							</table><hr>
							<a href="<?= base_url();?>admin/dataOrder" class="btn btn-warning"><i class="fas fa-undo"></i> Kembali</a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
</div>