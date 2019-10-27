<div class="content-wrapper">
	<section class="content-header">
		<h1 class="text-center"><?= $title;?></h1>
	</section>
	<section class="content">
		<div class="container">
			<div class="col-lg">
				<div class="row">
					<div class="panel panel-default">
						<div class="panel-body">
							<form action="<?= base_url();?>admin/editOrder" method="post">
								<div class="form-row">
								<input type="text" name="id_order" value="<?=$data['id_order']; ?>" hidden>
									<div class="form-group col-lg-6">
										<label>Tanggal Order</label>
										<input type="date" name="tgl_order" class="form-control" required="yes" value="<?= $data['tgl_order']; ?>">
									</div>
									<div class="form-group col-lg-6">
										<label for="jenis"><strong>Jenis Kaca</strong></label>
										<select class="form-control" name="jenis_kaca" required="yes">
											<option value="Polos" <?php if ($data['jenis_kaca'] == "Polos") {
                          echo "selected=selected";
                        } ?>>Polos</option>
											<option value="Rayben" <?php if ($data['jenis_kaca'] == "Rayben") {
                          echo "selected=selected";
                        } ?>>Rayben</option>
											<option value="Black" <?php if ($data['jenis_kaca'] == "Black") {
                          echo "selected=selected";
                        } ?>>Black</option>
											<option value="Cermin" <?php if ($data['jenis_kaca'] == "Cermin") {
                          echo "selected=selected";
                        } ?>>Cermin</option>
											<option value="Es" <?php if ($data['jenis_kaca'] == "Es") {
                          echo "selected=selected";
                        } ?>>Es</option>
										</select>        
									</div>
									<div class="form-group col-lg-6">
										<label for="ketebalan"><strong>Ketebalan Kaca</strong></label>
										<select class="form-control" name="ketebalan" required="yes">
											<option value="3mm" <?php if ($data['ketebalan'] == "3mm") {
                          echo "selected=selected";
                        } ?>>3mm</option>
											<option value="4mm" <?php if ($data['ketebalan'] == "4mm") {
                          echo "selected=selected";
                        } ?>>4mm</option>
											<option value="5mm" <?php if ($data['ketebalan'] == "5mm") {
                          echo "selected=selected";
                        } ?>>5mm</option>
											<option value="6mm" <?php if ($data['ketebalan'] == "6mm") {
                          echo "selected=selected";
                        } ?>>6mm</option>
											<option value="8mm" <?php if ($data['ketebalan'] == "8mm") {
                          echo "selected=selected";
                        } ?>>8mm</option>
											<option value="10mm" <?php if ($data['ketebalan'] == "10mm") {
                          echo "selected=selected";
                        } ?>>10mm</option>
										</select>        
									</div>
									<div class="form-group col-lg-6">
										<label for="ukuran"><strong>Ukuran Kaca</strong></label>
										<input type="text" name="ukuran" placeholder="ukuran" class="form-control" value="<?= $data['ukuran']; ?>">
										<?= form_error('ukuran', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group col-lg-6">
										<label for="qty"><strong>Quantity</strong></label>
										<input type="number" name="qty" placeholder="qty" class="form-control" value="<?= $data['qty']; ?>">
										<?= form_error('qty', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group col-lg-6">
										<label for="harga"><strong>Total Harga</strong></label>
										<input type="text" name="harga" placeholder="harga" class="form-control" value="<?= $data['harga']; ?>">
										<?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group col-lg">
										<label for="keterangan"><strong>Keterangan Order</strong></label>
										<textarea class="form-control" name="keterangan" value="<?= set_value('keterangan'); ?>" style="height: 150px;" placeholder="Masukkan keterangan order"><?= $data['keterangan']; ?></textarea>
										<?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group col-lg">
										<button type="submit" class="btn btn-primary" ><i class="far fa-paper-plane"></i> Edit</button>										
										<a href="<?= base_url();?>admin/dataOrder" role="button" class="btn btn-warning"> <i class="fas fa-undo"></i> Kembali</a>

									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>