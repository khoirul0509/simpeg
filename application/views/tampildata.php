
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pegawai</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('dasboard');?>">Home</a></li>
              <li class="breadcrumb-item active">Data Pegawai</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <?php if ($level == '1') { ?>

      <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="<?php echo base_url('daftar_pegawai/tambah'); ?>" class="btn btn-success btn-small"><i class="fas fa-user-plus"> Tambah</i></a>

                <!-- <a href="<?php echo base_url('laporanfpdf'); ?>" class="btn btn-success btn-small"><i class="fas fa-image"> cetak</i></a> -->

              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <tr>
                      <th>No</th>
                      <th>Nik</th>
                      <th>Nama</th>
                      <!-- <th>Alamat</th> -->
                      <th>Tempat lahir</th>
                      <th>Jenis Kelamin</th>
                      <th>Pekerjaan</th>
                      <th>Status Kontrak</th>
                      <th>Unit Kerja</th>
                      <th>Action</th>
                    </tr>
                    <?php 
                    $no = 1;
                    foreach($thl as $u){ 
                    ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $u->nik ?></td>
                      <td><?php echo $u->nama ?></td>
                      <!-- <td><?php echo $u->alamat ?></td> -->
                      <td><?php echo $u->tempat_lahir ?></td>
                      <td><?php echo $u->jenis_kelamin ?></td>
                      <td><?php echo $u->pekerjaan?></td>
                      <td><?php echo $u->status_kontrak ?></td>
                      <td><?php echo $u->kdunor ?></td>
                      <td>
                          
                          <a href="<?php echo base_url('daftar_pegawai/detail/utama/'.$u->id_pegawai); ?>"><button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>Lihat Profil</button></a>
                          <!-- <a href="<?php echo base_url('home/edit/'.$u->id_pegawai); ?>"><button
                                          type="button" class="btn btn-default btn-xs"><span
                                            class="fas fa-pencil-alt"
                                            aria-hidden="true"></span>edit</button></a>
                          <a href="<?php echo base_url('home/hapus/'.$u->id_pegawai); ?>"
                                        onclick="return confirm('Anda yakin menghapus ?')"><button type="button"
                                          class="btn btn-danger btn-xs"><span
                             
                                            class="glyphicon glyphicon-remove"></span> Hapus</button></a> -->
                      </td>
    </tr>
    <?php } ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>


      
   <?php } else { ?>

     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="<?php echo base_url('home/tambah'); ?>" class="btn btn-success btn-small"><i class="fas fa-user-plus"> Tambah</i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <tr>
                      <th>No</th>
                      <th>Nik</th>
                      <th>Nama</th>
                      <!-- <th>Alamat</th> -->
                      <th>Tempat lahir</th>
                      <th>Jenis Kelamin</th>
                      <th>Pekerjaan</th>
                      <th>Status Kontrak</th>
                      <th>Unit Kerja</th>
                      <th>Action</th>
                    </tr>
                    <?php 
                    $no = 1;
                    foreach($thl as $u){ 
                    ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $u->nik ?></td>
                      <td><?php echo $u->nama ?></td>
                      <!-- <td><?php echo $u->alamat ?></td> -->
                      <td><?php echo $u->tempat_lahir ?></td>
                      <td><?php echo $u->jenis_kelamin ?></td>
                      <td><?php echo $u->pekerjaan?></td>
                      <td><?php echo $u->status_kontrak ?></td>
                      <td><?php echo $u->kdunor ?></td>
                      <td>
                          <a href="<?php echo base_url('home/detail/'.$u->id_pegawai); ?>"><button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>Detail</button></a>
                        
                      </td>


                      
    </tr>
     <?php } ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

   <?php } ?>

    <!-- Main content -->
   

</div>

  
  
</div>
<!-- ./wrapper -->

