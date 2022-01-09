<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Master SAW</h1>

    <!-- DataTales Example -->

    <div class="row">
        <div class="col col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Master SAW</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Alternatif</th>
                                    <th>Fasilitas</th>
                                    <th>Akreditasi</th>
                                    <th>Biaya</th>
                                    <th>Beasiswa</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $x = 1;
                                $a = 1;
                                foreach ($get_data->result() as $row) { ?>

                                    <tr>
                                        <td><?= $x++; ?></td>
                                        <td><?= $row->nama_alt ?></td>
                                        <td><?= $row->fasilitas ?></td>
                                        <td><?= $row->akreditasi ?></td>
                                        <td><?= $row->biaya ?></td>
                                        <td><?= $row->beasiswa ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal<?= $a++; ?>">
                                                <i class="fa fa-edit"></i>
                                            </button>

                                        </td>
                                    </tr>

                                <?php  } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambah Kriteria -->
    <!-- End Tambah Kriteria -->

</div>
<!-- /.container-fluid -->

<?php
$y = 1;
foreach ($get_data->result() as $row) { ?>
    <div class="modal fade" id="editModal<?= $y++; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url('admin/Master/update_saw/' . $row->id_master_saw) ?>" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="kriteria">Fasilitas</label>
                            <input type="number" class="form-control" id="fasilitas" name="fasilitas" value="<?= $row->fasilitas ?>">
                        </div>

                        <div class="form-group">
                            <label for="kriteria">Akreditasi</label>
                            <input type="number" class="form-control" id="akreditasi" name="akreditasi" value="<?= $row->akreditasi ?>">
                        </div>

                        <div class="form-group">
                            <label for="kriteria">Biaya</label>
                            <input type="number" class="form-control" id="biaya" name="biaya" value="<?= $row->biaya ?>">
                        </div>

                        <div class="form-group">
                            <label for="kriteria">Beasiswa</label>
                            <input type="number" class="form-control" id="beasiswa" name="beasiswa" value="<?= $row->beasiswa ?>">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $a++;
}
?>