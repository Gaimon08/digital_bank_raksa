<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Halaman 
      <small>Data Kredit Pegawai</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Kredit Pegawai</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
  <?php $this->load->view('message'); ?>
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Data Kredit Pegawai</h3>
        <div class="box-tools pull-right">
          <a href="<?=site_url('kredit/kredit_pegawai/add')?>" class="btn btn-success">
            <i class="fa fa-plus"></i> Tambah Kredit Pegawai</a>
        </div>
      </div>
      <div class="box-body">
        <table class="table table-bordered table-hover table-responsive" id="table2">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Nomor KTP</th>
              <th>Alamat</th>
              <th>Jenis Agunan</th>
              <th>Agunan Atas Nama</th>
              <th>Jumlah Pinjaman</th>
              <th>Lama Pinjaman</th>
              <th class="text-center" style="width: 8%;">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($row->result() as $kamu => $data) { ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $data->Nama_Lengkap ?></td>
                <td><?= $data->No_KTP ?></td>
                <td><?= $data->Alamat_Lengkap ?></td>
                <td><?= $data->Jenis_Agunan ?></td>
                <td><?= $data->Agunan_Atas_Nama ?></td>
                <td><?= $data->Jumlah_Pinjaman ?></td>
                <td><?= $data->Lama_Pinjaman ?></td>
                <td>
                  <a href="<?= site_url('Kredit_pegawai/edit/' . $data->id_kredit_pegawai) ?>" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>
                  <a href="<?=site_url('Kredit_pegawai/hapus/' . $data->id_kredit_pegawai)?>" onclick="return confirm('Yakin Hapus data!!')" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        Footer
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
