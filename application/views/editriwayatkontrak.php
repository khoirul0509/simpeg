  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Profile</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">User Profile</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-3">

                  <!-- Profile Image -->
                  <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                      <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                             src="<?php echo base_url('upload/').$upkontrak->foto ?>"
                             alt="User profile picture">
                      </div>

                     <h3 class="profile-username text-center"> <?php echo $upkontrak->nama ?></h3>

                     <?php if ($level == '1') { ?>
                      <!-- <a href="<?php echo base_url('home/edit/'.$upkontrak->id_pegawai); ?>" class="btn btn-primary btn-block"><b>Update</b></a> -->
                       
                     <?php } else { ?>
                       
                         <center><p>Data Pribadi</p></center>
                    <?php } ?>

                    <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                   <li class="nav-item menu-open">
                   <a href="<?= site_url("daftar_pegawai/detail/utama/$upkontrak->id_pegawai") ?>" class="nav-link" class="nav-link">
                        <p>
                          Data utama
                          <i class="fas fa-Dashboard"></i>
                        </p>
                     </a>
                    </li>

                    <li class="nav-item menu-open">
                      <a href="<?= site_url("daftar_pegawai/detail/pendidikan/$upkontrak->id_pegawai") ?>" class="nav-link" class="nav-link">
                        <p>
                          Riwayat Pendidikan
                          <i class="fas fa-alipay"></i>
                        </p>
                      </a>
                    </li>

                    <li class="nav-item menu-open">
                      <a href="<?= site_url("daftar_pegawai/detail_kontrak/kontrak/$upkontrak->id_pegawai") ?>" class="nav-link">
                        <p>
                          Riwayat Kontrak
                          <i class="fas fa-alipay"></i>
                        </p>
                      </a>
                    </li>
               
                    </ul>
                   </nav>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->

                
                <!-- /.card -->
              </div>
              <!-- /.col -->
            <div class="col-md-9">
                  <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Edit Data Kontrak</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <!-- <form action="<?php echo base_url(). 'home/tambah_aksi'; ?>" method="post"> -->
                  <form action="<?php echo site_url("daftar_pegawai/proses_edit_riwayat_kontrak")?>" enctype="multipart/form-data" method="post">
                  <div class="card-body">

                    <input type="hidden" name="id_r_kontrak" value="<?= $upkontrak->id_riwayat ?>">
                    <input type="hidden" name="id_pegawai" value="<?= $upkontrak->id_pegawai ?>">
                    <div class="form-group">
                      <label for="Nomor kontrak">Nomor kontrak</label>
                      <input type="text" name="nomor_kontrak" class="form-control col-md-6"  placeholder="Nomor SK" value="<?= $upkontrak->no_kontrak ?>">
                    </div>
                    <div class="form-group">
                      <label for="Tmt sk kontrak">Tmt sk kontrak</label>
                      <input type="text" name="tmt_sk_kontrak" class="form-control col-md-6"  placeholder="TMT SK Kontrak" value="<?= ubah_tanggal_indo($upkontrak->tgl_mulai_kontrak) ?>">
                    </div>
                     <div class="form-group">
                      <label for="Tmt sk kontrak akhir">Tmt sk kontrak akhir </label>
                      <input type="text" name="tmt_sk_kontrak_akhir" class="form-control col-md-6"  placeholder="Tmt sk kontrak akhir" value="<?= ubah_tanggal_indo($upkontrak->tgl_akhir_kontrak) ?>">
                    </div>
                    <div class="form-group">
                      <label >Tgl SK Kontrak </label>
                      <input type="text" name="tgl_sk_kontrak" class="form-control col-md-6"  placeholder="Tgl SK Kontrak" value="<?= ubah_tanggal_indo($upkontrak->tgl_kontrak) ?>">
                    </div>
                    <div class="form-group">
                      <label >Kontrak Pertama </label>
                      <select name="is_kontrak_awal" class="form-control col-md-6">
                          <option value="1" <?= ($upkontrak->is_kontrak_awal=="1")?"selected":""; ?>>Ya</option>
                          <option value="0" <?= ($upkontrak->is_kontrak_awal=="0")?"selected":""; ?>>Tidak</option>
                     </select>
                    </div>
                    <div class="form-group">
                          <label>Upload File Kontrak (PDF)</label>
                          <div class="col-md-6">
                              <input type="file" id="berkas" name="berkas">
                              <p class="help-block"> file scan kontrak dalam bentuk pdf. </p>
                          </div>
                      </div> 

                  <!-- /.card-body -->
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (right) -->
          </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


</div>
<!-- /.nav-tabs-custom -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

