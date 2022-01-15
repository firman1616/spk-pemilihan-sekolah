<?php
foreach ($kriteria->result() as $row) {
    $kode_arr[] = $row->kode_kriteria;
    $nama_arr[] = $row->nama_kriteria;
}
$int_matrix = count($nama_arr);
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Perhitungan SAW</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Perhitungan SAW</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('admin/SAW/hasil_saw') ?>" method="post">
                <button type="submit" class="btn btn-primary" name="hitung"><i class="fa fa-calculator"></i> | Hitung</button>
                <!-- Pilih Desa -->
                <select name="desa" id="desa" class="form-control" style="width: 25%;" onchange="return autofill();" required>
                    <option value="" disabled selected>Pilih Desa</option>
                    <?php foreach ($desa->result() as $row) { ?>
                        <option value="<?= $row->id_master_desa ?>"><?= $row->nama_desa ?></option>
                    <?php  } ?>
                </select>
                <!-- End Desa -->
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="width: 30%;">Bobot Perhitungan AHP</th>
                                <?php foreach ($bobot->result() as $row) { ?>
                                    <th><?= number_format($row->r_fasilitas, 3)  ?></th>
                                    <th><?= number_format($row->r_akreditasi, 3)  ?></th>
                                    <th><?= number_format($row->r_biaya, 3)  ?></th>
                                    <th><?= number_format($row->r_beasiswa, 3)  ?></th>
                                    <th><?= number_format($row->r_jarak, 3)  ?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                    </table>
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Alternatif</th>
                                <th>Fasilitas</th>
                                <th>Akreditasi</th>
                                <th>Biaya</th>
                                <th>Beasiswa</th>
                                <th>Jarak</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $x = 1;
                            $a = 1;
                            $i = 0;
                            $j = 0;
                            $f = 0;
                            $akr = 0;
                            $bi = 0;
                            $be = 0;
                            foreach ($get_data->result() as $row) { ?>

                                <tr>
                                    <td><?= $x++; ?></td>
                                    <td><?= $row->nama_alt ?></td>
                                    <td><input type="number" class="form-control" name="fas<?= $f++ ?>" value="<?= $row->fasilitas ?>" readonly> </td>
                                    <td><input type="number" class="form-control" name="akr<?= $akr++ ?>" value="<?= $row->akreditasi ?>" readonly> </td>
                                    <td><input type="number" class="form-control" name="bia<?= $bi++; ?>" value="<?= $row->biaya ?>" readonly> </td>
                                    <td><input type="number" class="form-control" name="bea<?= $be++; ?>" value="<?= $row->beasiswa ?>" readonly> </td>
                                    <td><input type="number" class="form-control" name="jarak<?= $j++ ?>" id="jarak<?= $i++ ?>" readonly></td>
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
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


<?php
$y = 1;
foreach ($get_data->result() as $row) { ?>
    <div class="modal fade" id="editModal<?= $y++; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url('admin/SAW/update_saw/' . $row->id_master_saw) ?>" method="post">
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