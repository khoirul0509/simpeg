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
                       src="<?php echo base_url('upload/').$datajenjang[0]->foto ?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $datajenjang[0]->nama ?></h3>

               <?php if ($level == '1') { ?>
                <!-- <a href="<?php echo base_url('Daftar_pegawai/update_pendidikan/'.$d->id_pegawai); ?>" class="btn btn-primary btn-block"><b>Update</b></a> -->
                 
               <?php } else { ?>
                 
                   <center><p>Data Pribadi</p></center>
              <?php } ?>

              
              <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                      with font-awesome or any other icon font library -->
                  <li class="nav-item menu-open">
                    <a href="<?= site_url("daftar_pegawai/detail/utama/$id_pegawai") ?>" class="nav-link" class="nav-link">
                      <p>
                        Data utama
                        <i class="fas fa-Dashboard"></i>
                      </p>
                    </a>
                  </li>

                  <li class="nav-item menu-open">
                    <a href="<?= site_url("daftar_pegawai/detail/pendidikan/$id_pegawai") ?>" class="nav-link" class="nav-link">
                      <p>
                        Riwayat Pendidikan
                        <i class="fas fa-alipay"></i>
                      </p>
                    </a>
                  </li>

                  <li class="nav-item menu-open">
                    <a href="<?= site_url("daftar_pegawai/detail_kontrak/kontrak/$id_pegawai") ?>" class="nav-link">
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
                <h3 class="card-title">Tambah Data Pendidikan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo site_url("daftar_pegawai/proses_tambah_riwayat_pendidikan")?>" method="post"> 
                
             
                <div class="card-body">

                <input type="hidden" name="id_pegawai" >
                    <div class="form-group">
                        <label for="Jenjang Pendidikan">Jenjang Pendidikan</label>
                        <select type="text" name="jenjang_pendidikan"   class="form-control col-md-6">
                          <option value="SD">SD</option>
                          <option value="SMP">SMP</option>
                          <option value="SMA">SMA</option>
                          <option value="D-I">D-I</option>
                          <option value="D-II">D-II</option>
                          <option value="D-III">D-III</option>
                          <option value="D-IV">D-IV</option>
                          <option value="S-1">S-1</option>
                          <option value="S-2">S-2</option>
                          <option value="S-3">S-3</option>
                      </select>
                      </div>


                  <div class="form-group">
                    <label for="Nama Pendidikan">Nama Pendidikan</label>
                    <input type="text" name="pendidikan"  class="form-control col-md-6"  placeholder="Nama Pendidikan">
                  </div>
                   <div class="form-group">
                    <label for="Nama Sekolah">Nama Sekolah </label>"
                    <input type="text" name="nama_sekolah"  class="form-control col-md-6"  placeholder="Nama sekolah">
                  </div>
                  <div class="form-group">
                    <label >Tahun Lulus </label>
                    <input type="text" name="tahun_lulus"   class="form-control col-md-6"  placeholder="Tahun Lulus">
                  </div>

                 
               <!-- /.card-body -->
                  <button type="submit" class="btn btn-primary">Tambah</button>
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

