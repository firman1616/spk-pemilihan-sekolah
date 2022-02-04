<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Laporan</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Laporan</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('admin/Laporan/hasil_filter') ?>" method="post">
                <div class="row">
                    <div class="col-md-2 col-sm-6 col-xs-6">
                        <select name="user_id" id="user_id" class="form-control" required>
                            <option value="" disabled selected>pilih user</option>
                            <?php foreach ($id_user->result() as $row) { ?>
                                <option value="<?= $row->id_user ?>"><?= $row->nama_user ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="cari" id="cari"><i class="fa fa-search"></i> | Tampilkam</button>
                </div>
            </form>

        </div>
    </div>


</div>
<!-- /.container-fluid -->