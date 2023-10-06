<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Halaman
      <small>Data Deposito</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Deposito</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
  <?php $this->load->view('message'); ?>  
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Data Deposito</h3>
        <div class="box-tools pull-right">
          <a href="<?= site_url('deposito/add') ?>" class="btn btn-success">
            <i class="fa fa-plus"></i> Tambah Deposito</a>
        </div>
      </div>
      <div class="box-body">
        <table class="table table-bordered table-hover table-responsive" id="table2">
          <thead>
            <tr>
              <th>No</th>
              <th>Nomor KTP</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Alamat</th>
              <th>Jumlah Deposito</th>
              <th>Lama Deposito</th>
              <th class="text-center" style="width: 8%;">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($row->result() as $kamu => $data) { ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $data->No_KTP ?></td>
                <td><?= $data->Nama_Lengkap ?></td>
                <td><?= $data->Jenis_Kelamin ?></td>
                <td><?= $data->Alamat_Lengkap ?></td>
                <td>Rp <?= number_format($data->Jumlah_Deposito, 0, ',', '.'); ?></td>
                <td><?= $data->Lama_Deposito ?></td>
                <td>
                  <a href="<?= site_url('deposito/edit/' . $data->id_Deposito) ?>" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>
                  <a href="<?= site_url('deposito/hapus/' . $data->id_Deposito) ?>" onclick="return confirm('Yakin Hapus data!!')" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i></a>
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
