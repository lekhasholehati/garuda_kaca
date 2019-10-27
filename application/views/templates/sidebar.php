<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url();?>assets/img/user/default.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $this->session->userdata('nama_admin');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div><br>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li <?php if($this->uri->segment(2) == 'dashboard'){echo 'class="active"';} ?>>
          <a href="<?= base_url();?>admin/dashboard">
            <i class="fas fa-tachometer-alt"></i> <span>Dashboard</span>
          </a>
        </li>

        <li <?php if($this->uri->segment(2) == 'dataOrder'){echo 'class="active"';} ?>>
          <a href="<?= base_url();?>admin/dataOrder">
            <i class="fa fa-book"></i> <span>Data Order</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>