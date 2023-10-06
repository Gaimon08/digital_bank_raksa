<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tambah Kredit KAB
      <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Kredit KAB</a></li>
      <li class="active">Tambah KAB</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">FORM PENGAJUAN KREDIT</h3>
      </div>
      <div class="box-body">
           <!-- Menampilkan pesan validasi -->
           <?php echo validation_errors(); ?>
           
        <form method="post" action="<?php echo base_url() . 'Kredit_KAB/simpan'; ?>" enctype="multipart/form-data">
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
            <label>Jenis Agunan</label>
            <select class="form-control" name="jenis_agunan">
              <option value="">Pilih Jenis Agunan</option>
              <option value="SK Pegawai Terakhir">SK Pegawai Terakhir</option>
              <option value="Surat Kuasa Potong Gaji">Surat Kuasa Potong Gaji</option>
              <option value="BPKB Kendaraan Bermotor">BPKB Kendaraan Bermotor</option>
              <option value="Deposito Berjangka RWAP">Deposito Berjangka RWAP</option>
              <option value="Sertifikat Pendidik">Sertifikat Pendidik</option>
              <option value="Sertifikat Tanah dan atau Bangunan">Sertifikat Tanah dan atau Bangunan</option>
            </select>
            <?php echo form_error('jenis_agunan'); ?>
          </div>

          <label>Agunan Atas Nama</label>
          <div class="form-group">
            <div class="radio">
              <label for="radio1">
                <input type="radio" id="radio1" name="radio_group" value="Pemohon/Pasangan">
                Pemohon/Pasangan
              </label>
            </div>
            <?php echo form_error('radio_group'); ?>
          </div>

          <div class="form-group">
            <div class="radio">
              <label for="radio2">
                <input type="radio" id="radio2" name="radio_group" value="Keluarga">
                Keluarga
              </label>
            </div>
          </div>

          <div class="form-group">
            <div class="radio">
              <label for="radio3">
                <input type="radio" id="radio3" name="radio_group" value="Orang Lain">
                Orang Lain
              </label>
            </div>
          </div>

          <div class="form-group">
            <label>Jumlah Pinjaman</label>
            <input type="text" class="form-control" id="jml_pinjaman" placeholder="Masukkan nominal pinjaman..." name="jml_pinjaman">
            <?php echo form_error('jml_pinjaman'); ?>
          </div>

          <div class="form-group">
            <label>Lama Pinjaman</label>
            <select class="form-control" name="lama_pinjaman">
              <option value="">Pilih Lama Pinjaman</option>
              <option value="1 Tahun (12 Bulan)">1 Tahun (12 Bulan)</option>
              <option value="1,5 Tahun (18 Bulan)">1,5 Tahun (18 Bulan)</option>
              <option value="2 Tahun (24 Bulan)">2 Tahun (24 Bulan)</option>
              <option value="2,5 Tahun (30 Bulan)">2,5 Tahun (30 Bulan)</option>
              <option value="3 Tahun (36 Bulan)">3 Tahun (36 Bulan)</option>
              <option value="4 Tahun (48 Bulan)">4 Tahun (48 Bulan)</option>
              <option value="4,5 Tahun (54 Bulan)">4,5 Tahun (54 Bulan)</option>
              <option value="5 Tahun (60 Bulan)">5 Tahun (60 Bulan)</option>
              <option value="6 Tahun (72 Bulan)">6 Tahun (72 Bulan)</option>
              <option value="6,5 Tahun (78 Bulan)">6,5 Tahun (78 Bulan)</option>
              <option value="7 Tahun (84 Bulan)">7 Tahun (84 Bulan)</option>
              <option value="7,5 Tahun (90 Bulan)">7,5 Tahun (90 Bulan)</option>
              <option value="8 Tahun (96 Bulan)">8 Tahun (96 Bulan)</option>
            </select>
            <?php echo form_error('lama_pinjaman'); ?>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

