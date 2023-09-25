  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">FORM INPUT TEAM</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">TEAM</a></li>
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
          TEAM
        </div>
        <form action="<?= base_url('team/simpan_data_team')?>"method="post">
          <div class="card-body">
            <?php 
            $message = $this->session->flashdata('message');

            if ($message == "success"){
            ?>
              <script>alert('berhasil memasukan data')</script>
              <?php
              };
            ?>
              <label for="">NAME TEAM</label>
              <input required type="text" class="form-control" name="name_team">
              <label for="">JUMLAH PEMAIN</label>
              <input required type="text" class="form-control" name="jumlah_pemain">
              <label for="">CREATE TIME</label>
              <input required class="form-control" type="time" name="create_time">

          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary". >SIMPAN</button>
            </div>
        </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->