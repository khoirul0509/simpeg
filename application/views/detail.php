

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
                       src="<?php echo base_url('upload/').$du[0]->foto ?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $du[0]->nama ?></h3>

               <?php if ($level == '1') { ?>
                <!-- <a href="<?php echo base_url('Daftar_pegawai/update_pendidikan/'.$du[0]->id_pegawai); ?>" class="btn btn-primary btn-block"><b>Update</b></a> -->
                 
               <?php } else { ?>
                 
                   <center><p>Data Pribadi</p></center>
              <?php } ?>

              <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
                  <li class="nav-item menu-open">
                    <a href="<?= site_url("daftar_pegawai/detail/utama/$id_pegawai") ?>" class="nav-link">
                      <p>
                        Data utama
                        <i class="fas fa-Dashboard"></i>
                      </p>
                    </a>
                  </li>

                  <li class="nav-item menu-open">
                    <a href="<?= site_url("daftar_pegawai/detail/pendidikan/$id_pegawai") ?>" class="nav-link">
                      <p>
                        Riwayat Pendidikan
                        
                      </p>
                    </a>
                  </li>

                  <li class="nav-item menu-open">
                    <a href="<?= site_url("daftar_pegawai/detail/kontrak/$id_pegawai") ?>" class="nav-link">
                      <p>
                        Riwayat Kontrak
                        
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
            <div class="card">
              <div class="card-header p-2">
                
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                                   

                     
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal" method="POST" action="<?= site_url('daftar_pegawai/simpan_data_utama') ?>">

                      <div class="form-group row">
                        <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                        <div class="col-sm-9">
                          <input type="hidden" name="id_pegawai" value="<?php echo $du[0]->id_pegawai ?>" class="form-control"  placeholder="nik">
                          <input type="text" name="nik" value="<?php echo $du[0]->nik ?>" readonly class="form-control"  placeholder="nik">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                          <input type="text" name="nama" value="<?php echo $du[0]->nama ?>" readonly class="form-control"  placeholder="Nama">
                          <input type='hidden' name='id_pegawai' value="<?= $du[0]->id_pegawai ?>">
                          
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="text" class="col-sm-3 col-form-label">Gelar Depan</label>
                        <div class="col-sm-9">
                         <input type="text" name="gelar_depan" value="<?php echo $du[0]->gelar_depan ?>" class="form-control"  placeholder="Gelar Depan">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="text" class="col-sm-3 col-form-label">Gelar Belakang</label>
                        <div class="col-sm-9">
                         <input type="text" name="gelar_belakang" value="<?php echo $du[0]->gelar_belakang ?>" class="form-control" placeholder="Gelar Belakang">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-9">
                          <input type="text" name="tempat_lahir" value="<?php echo $du[0]->tempat_lahir ?>" class="form-control" placeholder="Tempat Lahir">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-9">
                          <input type="date" name="tgl_lahir" value="<?php echo $du[0]->tgl_lahir ?>" class="form-control" placeholder="Tanggal Lahir">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-9">
                          <select  name="jenis_kelamin" class="form-control" >
                        <option value="Laki-Laki" <?= (strtoupper($du[0]->jenis_kelamin)=='LAKI-LAKI')?"selected":"" ?>>Laki-Laki</option>
                        <option value="Perempuan" <?= (strtoupper($du[0]->jenis_kelamin)=='PEREMPUAN')?"selected":"" ?> >Perempuan</option>
                       </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">Status Kawin</label>
                        <div class="col-sm-9">
                            <select  type="text" name="status_kawin" value="<?php echo $du[0]->status_kawin ?>" class="form-control" >
                          <option value="belum kawin" <?= (strtoupper($du[0]->status_kawin)=='BELUM KAWIN')?"selected":"" ?> >Belum kawin</option>
                          <option value="kawin" <?= (strtoupper($du[0]->status_kawin)=='KAWIN')?"selected":"" ?> >kawin</option>
                          <option value="cerai" <?= (strtoupper($du[0]->status_kawin)=='CERAI')?"selected":"" ?> >cerai</option>
                       </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">Agama</label>
                        <div class="col-sm-9">
                             <select type="text" name="agama" class="form-control" >
                          <option value="islam" <?= (strtoupper($du[0]->agama)=='ISLAM')?"selected":"" ?> >Islam</option>
                          <option value="kristen" <?= (strtoupper($du[0]->agama)=='KRISTEN')?"selected":"" ?>>Kristen</option>
                          <option value="katolik" <?= (strtoupper($du[0]->agama)=='KATOLIK')?"selected":"" ?>>Katolik</option>
                          <option value="hindu" <?= (strtoupper($du[0]->agama)=='HINDU')?"selected":"" ?>>Hindu</option>
                          <option value="budha" <?= (strtoupper($du[0]->agama)=='BUDHA')?"selected":"" ?>>Budha</option>
                        </select>
                        </div>
                       </div>
                       <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                          <input type="text" name="alamat" value="<?php echo $du[0]->alamat ?>" class="form-control" placeholder="Alamat">
                        </div>
                       </div>
                       <!-- <!-- <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">Jenjang Pendidikan</label>
                        <div class="col-sm-9">
                           <select type="text" name="jenjang_pendidikan" value="<?php echo $du[0]->jenjang_pendidikan ?>" class="form-control" >
                          <option value="SD" <?= (strtoupper($du[0]->jenjang_pendidikan)=='SD')?"selected":"" ?>>SD</option>
                          <option value="SMP" <?= (strtoupper($du[0]->jenjang_pendidikan)=='SMP')?"selected":"" ?>>SMP</option>
                          <option value="SMA" <?= (strtoupper($du[0]->jenjang_pendidikan)=='SMA')?"selected":"" ?>>SMA</option>
                          <option value="D-I" <?= (strtoupper($du[0]->jenjang_pendidikan)=='D-1')?"selected":"" ?>>D-I</option>
                          <option value="D-II" <?= (strtoupper($du[0]->jenjang_pendidikan)=='D-II')?"selected":"" ?>>D-II</option>
                          <option value="D-III" <?= (strtoupper($du[0]->jenjang_pendidikan)=='D-III')?"selected":"" ?>>D-III</option>
                          <option value="D-IV" <?= (strtoupper($du[0]->jenjang_pendidikan)=='D-IV')?"selected":"" ?>>D-IV</option>
                          <option value="S-1" <?= (strtoupper($du[0]->jenjang_pendidikan)=='S-1')?"selected":"" ?>>S-1</option>
                          <option value="S-2" <?= (strtoupper($du[0]->jenjang_pendidikan)=='S-2')?"selected":"" ?>>S-2</option>
                          <option value="S-3" <?= (strtoupper($du[0]->jenjang_pendidikan)=='S-3')?"selected":"" ?>>S-3</option>
                        </select>
                        </div>
                       </div> -->
                       <!-- <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">Pendidikan</label>
                        <div class="col-sm-9">
                          <input type="text" name="pendidikan" value="<?php echo $du[0]->pendidikan ?>" class="form-control" placeholder="Pendidikan">
                        </div>
                       </div> -->
                       <!-- <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">Tanggal mulai kontrak awal</label>
                        <div class="col-sm-9">
                          <input type="date" name="tgl_mulai_kontrak_awal" value="<?php echo $du[0]->tgl_mulai_kontrak_awal?>" class="form-control" placeholder="Tanggal mulai kontrak awal">
                        </div>
                       </div> -->
                      <!-- <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">NO.SK Kontrak Awal</label>
                        <div class="col-sm-9">
                          <input type="text" name="no_kontrak_awal" value="<?php echo $du[0]->no_kontrak_awal ?>" class="form-control"  placeholder="NO.SK Awal Kontrak"></input>
                        </div>
                      </div>  -->

                      <!-- <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">Tanggal Akhir kontrak awal</label>
                        <div class="col-sm-9">
                          <input type="date" name="tgl_akhir_kontrak_awal" value="<?php echo $du[0]->tgl_akhir_kontrak_awal ?>" class="form-control" placeholder="Tanggal Akhir kontrak awal"></input>
                        </div>
                      </div> -->

                       <!-- <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">Tanggal kontrak awal</label>
                        <div class="col-sm-9">
                          <input type="date" name="tgl_kontrak_awal" value="<?php echo $du[0]->tgl_kontrak_awal ?>" class="form-control"  placeholder="Tanggal kontrak awal"></input>
                        </div>
                      </div> -->


                      <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">NPWP</label>
                        <div class="col-sm-9">
                          <input type="text" name="npwp" value="<?php echo $du[0]->npwp ?>" class="form-control"  placeholder="npwp"></input>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">BPJS Ketenagakerjaan</label>
                        <div class="col-sm-9">
                          <input type="text" name="no_bpjs_tenagakerja" value="<?php echo $du[0]->no_bpjs_tenagakerja ?>" class="form-control" placeholder="BPJS Ketenagakerjaan"></input>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">BPJS Kesehatan</label>
                        <div class="col-sm-9">
                          <input type="text" name="no_bpjs_kesehatan" value="<?php echo $du[0]->no_bpjs_kesehatan ?>" class="form-control"  placeholder="BPJS Kesehatan"></input>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-3 col-form-label">Pekerjaan</label>
                        <div class="col-sm-9">
                          <input type="text" name="pekerjaan" value="<?php echo $du[0]->pekerjaan ?>" class="form-control" placeholder="Pekerjaan"></input>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-3 col-form-label">Unit Kerja</label>
                        <div class="col-sm-9">
                         <input type="text" name="kdunor" value="<?php echo $du[0]->kdunor ?>" class="form-control" placeholder="Unit Kerja"></input>
                        </div>
                    </div>

                    <input type="hidden" name="edit_at" class="form-control col-md-6"  value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d H:i:s'); ?>">

                    <div class="form-group row">
                    <label for="inputExperience" class="col-sm-3 col-form-label">Status Kontrak</label>
                      <div class="col-sm-9">
                     <select  name="status_kontrak" value="<?php echo $du[0]->status_kontrak ?>" class="form-control" >
                        <option value="aktiv">Aktiv</option>
                        <option value="Tidak Aktiv">Tidak Aktiv</option>
                       </select>
                  </div>
                 </div>

                 
                      
                   <div class="form-group row">
                    <label for="exampleInputFile" class="col-sm-3 col-form-label">Upload Foto</label>
                    <div class="col-sm-9">
                      <div class="custom-file">
                        <input input type="file" name="foto">
                        
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-4 col-sm-9">
                          <button type="submit" class="btn btn-danger">Simpan</button>
                        </div>
                      </div>
                    </div>
                  </div>
                     
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
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
 