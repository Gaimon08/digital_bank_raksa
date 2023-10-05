<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Data Deposito
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Deposito</a></li>
            <li class="active">Edit Data Deposito</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">FORM EDIT DEposito</h3>
            </div>
            <div class="box-body">
                <!-- Menampilkan pesan validasi -->
                <?php echo validation_errors(); ?>

                <form method="post" action="<?php echo site_url() . 'deposito/update'; ?>" enctype="multipart/form-data">
                    <input type="hidden" name="id_Deposito" value="<?= $pengajuan_kredit->id_Deposito; ?>">

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Masukkan Alamat Email..." name="Email" value="<?= set_value('Email', $pengajuan_kredit->Email); ?>">
                        <!-- Menampilkan pesan validasi khusus untuk bidang ini -->
                        <?php echo form_error('Email'); ?>
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap..." name="Nama" value="<?= set_value('Nama', $pengajuan_kredit->Nama_Lengkap); ?>">
                        <!-- Menampilkan pesan validasi khusus untuk bidang ini -->
                        <?php echo form_error('Nama'); ?>
                    </div>
                    <div class="form-group">
                        <label>No KTP</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nomor KTP..." name="No_KTP" value="<?= set_value('No_KTP', $pengajuan_kredit->No_KTP); ?>">
                        <!-- Menampilkan pesan validasi khusus untuk bidang ini -->
                        <?php echo form_error('No_KTP'); ?>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" placeholder="Masukkan Alamat Lengkap..." name="Alamat" value="<?= set_value('Alamat', $pengajuan_kredit->Alamat_Lengkap); ?>">
                        <!-- Menampilkan pesan validasi khusus untuk bidang ini -->
                        <?php echo form_error('Alamat'); ?>
                    </div>
                    <div class="form-group">
                        <label>No Handphone</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nomor Handphone..." name="No_HP" value="<?= set_value('No_HP', $pengajuan_kredit->No_Handphone); ?>">
                        <!-- Menampilkan pesan validasi khusus untuk bidang ini -->
                        <?php echo form_error('No_HP'); ?>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" class="form-control" placeholder="Masukkan Pekerjaan Anda..." name="pekerjaan" value="<?= set_value('pekerjaan', $pengajuan_kredit->Pekerjaan); ?>">
                        <!-- Menampilkan pesan validasi khusus untuk bidang ini -->
                        <?php echo form_error('pekerjaan'); ?>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Deposito</label>
                        <input type="text" class="form-control" placeholder="Masukkan nominal pinjaman..." name="jml_deposito" value="<?= set_value('jml_deposito', $pengajuan_kredit->Jumlah_Deposito); ?>">
                        <!-- Menampilkan pesan validasi khusus untuk bidang ini -->
                        <?php echo form_error('jml_deposito'); ?>
                    </div>
                    <div class="form-group">
                        <label>Lama Deposito</label>
                        <select class="form-control" name="lama_deposito">
                            <option value="">Pilih Lama Deposito</option>
              <option value="1 Bulan" <?= set_select('lama_deposito', '1 Bulan', ($pengajuan_kredit->Lama_Deposito == '1 Bulan')); ?>>1 Bulan</option>
              <option value="3 Bulan"  <?= set_select('lama_deposito', '3 Bulan', ($pengajuan_kredit->Lama_Deposito == '3 Bulan')); ?>>3 Bulan</option>
              <option value="6 Bulan"  <?= set_select('lama_deposito', '6 Bulan', ($pengajuan_kredit->Lama_Deposito == '6 Bulan')); ?>>6 Bulan</option>
              <option value="12 Bulan" <?= set_select('lama_deposito', '12 Bulan', ($pengajuan_kredit->Lama_Deposito == '12 Bulan')); ?>>12 Bulan</option>
                        </select>
                        <!-- Menampilkan pesan validasi khusus untuk bidang ini -->
                        <?php echo form_error('lama_Deposito'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
