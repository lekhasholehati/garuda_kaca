<div class="content-wrapper">
	<section class="content-header">
		<h1 class="text-center mb-4"><?= $title;?></h1>
		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>">
       </section>
       <section class="content">
        <div class="container">
            <div class="col-lg">
               <div class="row">
                   <div class="panel panel-default">
                      <div class="panel-body">
                         <a href="<?= base_url();?>admin/tambahOrder" class="btn btn-primary mb-4"><i class="fas fa-plus"></i> Tambah Order</a>
                         <a target="_blank" href="<?= base_url();?>admin/export" class="btn btn-success pull-right"><i class="fas fa-file-export"></i> Export to Excel</a>
                         <hr>
                         <div class="table-responsive">
                            <table class="table table-hover mt-4" id="data_table">
                                <thead>
                                   <tr>
                                      <th>#</th>
                                      <th>Tanggal Order</th>
                                      <th>Jenis Kaca<th>
                                          <th class="text-center">Ukuran Kaca</th>
                                          <th >Ketebalan Kaca</th>
                                          <th>Quantity</th>
                                          <th>Harga/cm</th>
                                          <th class="text-center">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($data as $d) : ?>
                                       <tr>
                                          <th scope="row"><?= $i; ?></th>
                                          <td><?= $d['tgl_order']; ?></td>
                                          <td><?= $d['jenis_kaca']; ?></td>
                                          <td colspan="2" class="text-center"><?=$d['ukuran']; ?></td>
                                          <td><?= $d['ketebalan']; ?></td>
                                          <td><?= $d['qty']; ?></td>
                                          <td><?= $d['harga']; ?></td>

                                          <td class="text-center">
                                            <a href="<?= base_url(); ?>admin/editOrder/<?= $d['id_order']; ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                            <a href="<?= base_url(); ?>admin/deleteOrder/<?= $d['id_order']; ?>" class="btn btn-danger tombol-hapus"><i class="fas fa-trash"></i></a>
                                            <a href="<?= base_url(); ?>admin/detailOrder/<?= $d['id_order']; ?>" class="btn btn-success"><i class="fas fa-eye"></i></a>
                                        </td>
                                        
                                    </tr>
                                    <?php $i++ ?>
                                <?php endforeach; ?>
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