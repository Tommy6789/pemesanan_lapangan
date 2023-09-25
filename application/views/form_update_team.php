<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">FORM UPDATE PEMESANAN</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">PEMESANAN</a></li>
            <li class="breadcrumb-item active">UPDATE</li>
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
        <form action="<?= base_url('team/update_data')?>"method="post">
        <div class="card-body">
            <?php 
            $message = $this->session->flashdata('message');

            if ($message == "success"){
            ?>
            <script>alert('berhasil mengubah data')</script>
            <?php
            };
            foreach ($data as $t) :
            ?>
            <label for="">ID TRANSAKSI</label>
            <input readonly value="<?= $t->id?>" required type="text" class="form-control" name="id">
            <label for="">NAMA TEAM</label>
            <input value="<?= $t->name_team?>" required type="text" class="form-control" name="name_team">
            <label for="">JUMLAH PEMAIN</label>
            <input value="<?= $t->jumlah_pemain?>" required type="text" class="form-control" name="jumlah_pemain">
            <label for="">CREATE TIME</label>
            <input value="<?= $t->create_time?>" required class="form-control" type="time" name="create_time">
        </div>
            <?php 
            endforeach;
            ?>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary". >UPDATE</button>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->