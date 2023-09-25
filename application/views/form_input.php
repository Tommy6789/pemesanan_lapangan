  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">FORM INPUT PEMESANAN</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PEMESANAN</a></li>
              <li class="breadcrumb-item active">INPUT</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="card">
        <div class="card-header">
          PEMESANAN
        </div>
        <form action="<?= base_url('pemesanan/simpan_data')?>"method="post">
          <div class="card-body">
            <?php 
            $message = $this->session->flashdata('message');

            if ($message == "success"){
            ?>
              <script>alert('berhasil memasukan data')</script>
              <?php
              };
            ?>
              <label for="">NAMA LAPANGAN</label>
              <input required type="text" class="form-control" name="nama_lapangan">
              <label for="">LEBAR LAPANGAN</label>
              <input required type="text" class="form-control" name="lebar_lapangan">
              <label for="">BOLA</label>
              <input required type="text" class="form-control" name="bola">
              <label for="">JENIS RUMPUT</label>
              <select required class="form-control" name="jenis_rumput" id="">
                <option value="">Pilih Jenis Rumput</option>
                <option value="Asli">Rumput Asli</option>
                <option value="Sintesis">Rumput Sintesis</option>
              </select>
            <label for="">TANGGAL PEMESANAN</label>
            <input required class="form-control" type="date" name="tanggal_pemesanan" id="">
            <label for="">JAM PEMESANAN</label>
            <input required class="form-control" type="time" name="jam_pemesanan" id="">

          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary". >SIMPAN</button>
            </div>
        </form>
    </section>
    <section class="content">
    <div class="container-fluid">
        <div class="card">
        <div class="card-header">
          TEAM
        </div>
        <form action="<?= base_url('pemesanan/simpan_data')?>"method="post">
          <div class="card-body">
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->