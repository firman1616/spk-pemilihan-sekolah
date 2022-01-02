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
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
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
                            <th>Kode</th>
                            <th>Nama Alternatif</th>
                            <?php
                            foreach ($kriteria->result() as $row) { ?>
                                <th><?= $row->nama_kriteria ?></th>
                            <?php }
                            ?>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($alternatif->result() as $row) { ?>
                            <tr>
                                <td><?= $row->kode_alt ?></td>
                                <td><?= $row->nama_alt ?></td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button></td>
                            </tr>
                        <?php   }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->