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
              <form action="<?= base_url();?>admin/tambahOrder" method="post">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <label>Tanggal Order</label>
                    <input type="date" name="tgl_order" class="form-control" required="yes">
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="jenis"><strong>Jenis Kaca</strong></label>
                    <select class="form-control" name="jenis_kaca" required="yes">
                      <option value="">-- Pilih Jenis Kaca --</option>
                      <option value="Polos">Polos</option>
                      <option value="Rayben">Rayben</option>
                      <option value="Black">Black</option>
                      <option value="Cermin">Cermin</option>
                      <option value="Es">Es</option>
                    </select>        
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="ketebalan"><strong>Ketebalan Kaca</strong></label>
                    <select class="form-control" name="ketebalan" required="yes">
                      <option value="">-- Pilih Ketebalan Kaca --</option>
                      <option value="3mm">3mm</option>
                      <option value="4mm">4mm</option>
                      <option value="5mm">5mm</option>
                      <option value="6mm">6mm</option>
                      <option value="8mm">8mm</option>
                      <option value="10mm">10mm</option>
                    </select>        
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="ukuran"><strong>Ukuran Kaca</strong></label>
                    <input type="text" name="ukuran" placeholder="ukuran" class="form-control" value="<?= set_value('ukuran'); ?>">
                    <?= form_error('ukuran', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="qty"><strong>Quantity</strong></label>
                    <input type="number" name="qty" placeholder="qty" class="form-control" value="<?= set_value('qty'); ?>">
                    <?= form_error('qty', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="harga"><strong>Total Harga</strong></label>
                    <input type="text" name="harga" placeholder="harga" class="form-control" value="<?= set_value('harga'); ?>">
                    <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group col-lg">
                    <label for="keterangan"><strong>Keterangan Order</strong></label>
                    <textarea class="form-control" name="keterangan" value="<?= set_value('keterangan'); ?>" style="height: 150px;" placeholder="Masukkan keterangan order"></textarea>
                    <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group col-lg">
                    <button type="submit" class="btn btn-primary" ><i class="far fa-paper-plane"></i> Submit</button>                                       
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