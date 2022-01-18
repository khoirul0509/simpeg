
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dasbord.php">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Pegawai Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <!-- <form action="<?php echo base_url(). 'home/tambah_aksi'; ?>" method="post"> -->
              	<form action="<?php echo base_url(). 'daftar_pegawai/aksitambah'; ?>" enctype="multipart/form-data" method="post">
                <?php if($this->session->flashdata('msg')){ ?>
                    <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h5><i class="icon fas fa-ban"></i> Tambah Pegawai Gagal</h5>
                        <?= $this->session->flashdata('msg');?>
                    </div>
                <?php
                  } 
                ?>
                <div class="card-body">

                <input type="hidden" name="id_pegawai">

                  <div class="form-group">
                    <label for="NIK">NIK</label>
                    <input type="text" name="nik" class="form-control col-md-4"  placeholder="NIK">
                  </div>
                    <div class="form-group">
                    <label for="NAMA">NAMA</label>
                    <input type="text" name="nama" class="form-control col-md-6"  placeholder="NAMA">
                  </div>
                  <div class="form-group">
                    <label for="Gelar Depan">Gelar Depan</label>
                    <input type="text" name="gelar_depan" class="form-control col-md-6"  placeholder="Gelar Depan">
                  </div>
                  <div class="form-group">
                    <label for="Gelar Belakang">Gelar Belakang</label>
                    <input type="text" name="gelar_belakang" class="form-control col-md-6"  placeholder="Gelar Belakang">
                  </div>
                  <div class="form-group">
                    <label for="Tempat lahir">Tempat lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control col-md-6"  placeholder="Tempat lahir">
                  </div>
                  <div class="form-group">
                    <label for="Tanggal lahir">Tanggal lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control col-md-6"  placeholder="Tanggal lahir">
                  </div>

                  <div class="form-group">
                    <label for="Jenis kelamin">Jenis kelamin</label>
                    <select type="text" name="jenis_kelamin" class="form-control col-md-6">
                    	<option value="laki-laki">Laki-laki</option>
                    	<option value="perempuan">Perempuan</option>
                  	 </select>
                  </div>

                  <div class="form-group">
                    <label for="Status kawin">Status kawin</label>
                    <select type="text" name="status_kawin" class="form-control col-md-6"type="text" name="status_kawin" class="form-control col-md-6" >
                    	<option value="belum kawin">Belum kawin</option>
                    	<option value="kawin">kawin</option>
                    	<option value="cerai">cerai</option>
                  	 </select>
                  </div>

                  <div class="form-group">
                  <label for="exampleSelectBorder"> Agama <code></code></label>
                  <select type="text" name="agama" class="form-control col-md-6" class="form-control col-md-6">
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="katolik">Katolik</option>
                    <option value="hindu">Hindu</option>
                    <option value="budha">Budha</option>
                  </select>
                  </div>

                   <div class="form-group">
                    <label for="Jenjang Pendidikan">Jenjang Pendidikan</label>
                    <select type="text" name="jenjang_pendidikan" class="form-control col-md-6">
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
                    <input type="text" name="pendidikan" class="form-control col-md-6"  placeholder="Nama Pendidikan">
                  </div>
                   <div class="form-group">
                    <label for="No.SK Kontrak Pertama">No.SK Kontrak Pertama </label>
                    <input type="text" name="no_kontrak_awal" class="form-control col-md-6"  placeholder="No.SK Kontrak Pertama">
                  </div>
                  <div class="form-group">
                    <label for="Tanggal SK Awal">Tanggal SK Awal </label>
                    <input type="date" name="tgl_kontrak_awal" class="form-control col-md-6"  placeholder="Tanggal SK Awal">
                  </div>
                  <div class="form-group">
                    <label for="Tanggal mulai Kontrak">Tanggal mulai Kontrak </label>
                    <input type="date" name="tgl_mulai_kontrak_awal" class="form-control col-md-6"  placeholder="Tanggal mulai Kontrak">
                  </div>
                  <div class="form-group">
                    <label for="Tanggal akhir Kontrak">Tanggal akhir Kontrak </label>
                    <input type="date" name="tgl_akhir_kontrak_awal" class="form-control col-md-6"  placeholder="Tanggal akhir Kontrak">
                  </div>
                   <div class="form-group">
                    <label for="BPJS Ketenagakerjaan">BPJS Ketenagakerjaan </label>
                    <input type="text" name="no_bpjs_tenagakerja" class="form-control col-md-6"  placeholder="BPJS Ketenagakerjaan">
                  </div>
                   <div class="form-group">
                    <label for="BPJS Kesehatan">BPJS Kesehatan </label>
                    <input type="text" name="no_bpjs_kesehatan" class="form-control col-md-6"  placeholder="BPJS Kesehatan">
                  </div>
                  <div class="form-group">
                    <label for="NO.NPWP">NO.NPWP </label>
                    <input type="text" name="npwp" class="form-control col-md-6"  placeholder= "NO.NPWP ">
                  </div>
                  <div class="form-group">
                    <label for="Alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control col-md-6"  placeholder="Alamat">
                   </div>
                   <div class="form-group">
                    <label for="Pekerjaan">Pekerjaan</label>
                    <input type="text" name="pekerjaan" class="form-control col-md-6"  placeholder="Pekerjaan">
                   </div>
                   <div class="form-group">
                    <label for="Unit Kerja">Unit Kerja</label>
                    <input type="text" name="kdunor" class="form-control col-md-6"  placeholder="Unit Kerja">
                   </div>

                   <div class="form-group">
                 	 <label for="Status Kontrak">Status Kontrak</label>
                 	 <select type="text" name="status_kontrak" class="form-control col-md-6">
                    	<option value="aktiv">Aktiv</option>
                    	<option value="Tidak Aktiv">Tidak Aktiv</option>
                  	 </select>
                  </div>

                   <input type="hidden" name="add_at" class="form-control col-md-6"  value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d H:i:s'); ?>">

                  <div class="form-group">
                    <label for="exampleInputFile" class="cform-control col-md-6">Upload Foto</label>
                    <div class="col-sm-6">
                      <div class="custom-file">
                        <input type="file" name="foto">
                       
                      </div>
                      <!-- <div class="input-group-append">
                        <span class="input-group-text"> Upload</span>
                      </div> -->
                    </div>
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
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

