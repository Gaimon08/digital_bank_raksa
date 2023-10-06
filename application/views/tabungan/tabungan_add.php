<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tambah Tabungan Bank Raksa
      <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Tabungan</a></li>
      <li class="active"> Tambah Tabungan Bank Raksa</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">FORM PENDAFTARAN TABUNGAN</h3>
      </div>
      <div class="box-body">
           <!-- Menampilkan pesan validasi -->
           <?php echo validation_errors(); ?>
           
        <form method="post" action="<?php echo base_url() . 'Tabungan/simpan'; ?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" placeholder="Masukkan Alamat Email..." name="Email">
            <?php echo form_error('Email'); ?>
          </div> 
          <div class="form-group">
            <label>No KTP</label>
            <input type="text" class="form-control" placeholder="Masukkan Nomor KTP..." name="No_KTP">
            <?php echo form_error('No_KTP'); ?>
          </div>
          <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap..." name="Nama">
            <?php echo form_error('Nama'); ?>
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="Jenis_Kelamin">
              <option value="">Pilih Jenis Kelamin Anda</option>
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
            <?php echo form_error('Jenis_Kelamin'); ?>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" placeholder="Masukkan Alamat Lengkap..." name="Alamat">
            <?php echo form_error('Alamat'); ?>
          </div>
          <div class="form-group">
            <label>No Handphone</label>
            <input type="text" class="form-control" placeholder="Masukkan Nomor Handphone..." name="No_HP">
            <?php echo form_error('No_HP'); ?>
          </div>
          <div class="form-group">
            <label>Pekerjaan</label>
            <input type="text" class="form-control" placeholder="Masukkan Pekerjaan Anda..." name="pekerjaan">
            <?php echo form_error('pekerjaan'); ?>
          </div>
          <div class="form-group">
            <label>Jenis Tabungan</label>
            <select class="form-control" name="Jenis_Tabungan">
              <option value="">Pilih Tabungan Anda</option>
              <option value="Tamades">Tabungan Tamades</option>
              <option value="Taprona">Tabungan Taprona</option>
              <option value="Ciremaiku">Tabungan Ciremaiku</option>
            </select>
            <?php echo form_error('Jenis_Tabungan'); ?>
          </div>
          <div class="form-group">
            <label>Jumlah Tabungan Awal</label>
            <input type="text" class="form-control" id="jml_pinjaman" placeholder="Masukkan nominal tabungan awal..." name="Tabungan_Awal" >
            <?php echo form_error('Tabungan_Awal'); ?>
          </div>

         
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
