<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tambah Deposito
      <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Deposito</a></li>
      <li class="active">Tambah Deposito</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">FORM Deposito</h3>
      </div>
      <div class="box-body">
           <!-- Menampilkan pesan validasi -->
           <?php echo validation_errors(); ?>
           
        <form method="post" action="<?php echo base_url() . 'Deposito/simpan'; ?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" placeholder="Masukkan Alamat Email..." name="Email">
            <?php echo form_error('Email'); ?>
          </div>
          <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap..." name="Nama">
            <?php echo form_error('Nama'); ?>
          </div>
          <div class="form-group">
            <label>No KTP</label>
            <input type="text" class="form-control" placeholder="Masukkan Nomor KTP..." name="No_KTP">
            <?php echo form_error('No_KTP'); ?>
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
            <label>Jumlah Deposito</label>
            <input type="text" class="form-control" placeholder="Masukkan nominal pinjaman..." name="jml_deposito">
            <?php echo form_error('jml_deposito'); ?>
          </div>

          <div class="form-group">
            <label>Lama Deposito</label>
            <select class="form-control" name="lama_deposito">
              <option value="">Pilih Lama Deposito</option>
              <option value="1 Bulan">1 Bulan</option>
              <option value="3 Bulan">3 Bulan</option>
              <option value="6 Bulan">6 Bulan</option>
              <option value="12 Bulan">12 Bulan</option>
            </select>
            <?php echo form_error('lama_deposito'); ?>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</
