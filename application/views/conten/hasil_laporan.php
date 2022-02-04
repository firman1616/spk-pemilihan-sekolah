<?php
foreach ($kriteria->result() as $row) {
    $c11 = $row->C11;
    $c12 = $row->C12;
    $c13 = $row->C13;
    $c14 = $row->C14;
    $c15 = $row->C15;

    $c21 = $row->C21;
    $c22 = $row->C22;
    $c23 = $row->C23;
    $c24 = $row->C24;
    $c25 = $row->C25;

    $c31 = $row->C31;
    $c32 = $row->C32;
    $c33 = $row->C33;
    $c34 = $row->C34;
    $c35 = $row->C35;

    $c41 = $row->C41;
    $c42 = $row->C42;
    $c43 = $row->C43;
    $c44 = $row->C44;
    $c45 = $row->C45;

    $c51 = $row->C51;
    $c52 = $row->C52;
    $c53 = $row->C53;
    $c54 = $row->C54;
    $c55 = $row->C55;

    $jum1 = $c11 + $c21 + $c31 + $c41 + $c51;
    $jum2 = $c12 + $c22 + $c32 + $c42 + $c52;
    $jum3 = $c13 + $c23 + $c33 + $c43 + $c53;
    $jum4 = $c14 + $c24 + $c34 + $c44 + $c54;
    $jum5 = $c15 + $c25 + $c35 + $c45 + $c55;

    // eigan1
    $e11 = $c11 / $jum1;
    $e21 = $c21 / $jum1;
    $e31 = $c31 / $jum1;
    $e41 = $c41 / $jum1;
    $e51 = $c51 / $jum1;
    // eigan2
    $e12 = $c12 / $jum2;
    $e22 = $c22 / $jum2;
    $e32 = $c32 / $jum2;
    $e42 = $c42 / $jum2;
    $e52 = $c52 / $jum2;
    // eigan3
    $e13 = $c13 / $jum3;
    $e23 = $c23 / $jum3;
    $e33 = $c33 / $jum3;
    $e43 = $c43 / $jum3;
    $e53 = $c53 / $jum3;
    // eigan4
    $e14 = $c14 / $jum4;
    $e24 = $c24 / $jum4;
    $e34 = $c34 / $jum4;
    $e44 = $c44 / $jum4;
    $e54 = $c54 / $jum4;
    // eigan5
    $e15 = $c15 / $jum5;
    $e25 = $c25 / $jum5;
    $e35 = $c35 / $jum5;
    $e45 = $c45 / $jum5;
    $e55 = $c55 / $jum5;

    // rata2
    $rata1 = ($e11 + $e12 + $e13 + $e14 + $e15) / 5;
    $rata2 = ($e21 + $e22 + $e23 + $e24 + $e25) / 5;
    $rata3 = ($e31 + $e32 + $e33 + $e34 + $e35) / 5;
    $rata4 = ($e41 + $e42 + $e43 + $e44 + $e45) / 5;
    $rata5 = ($e51 + $e52 + $e53 + $e54 + $e55) / 5;
}

foreach ($bobot_saw->result() as $row) {
    $jarak1 = $row->jarak_1;
    $jarak2 = $row->jarak_2;
    $jarak3 = $row->jarak_3;
    $jarak4 = $row->jarak_4;
    $jarak5 = $row->jarak_5;
    $jarak6 = $row->jarak_6;
    $ref1 = $row->ref1;
    $ref2 = $row->ref2;
    $ref3 = $row->ref3;
    $ref4 = $row->ref4;
    $ref5 = $row->ref5;
    $ref6 = $row->ref6;
    $desa = $row->nama_desa;
}

foreach ($tampil_user->result() as $key => $value) {
    $nama = $value->nama_user;
}
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Hasil Laporan Perhitungan <?= $nama ?></h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Perhitungan Kriteria</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="background-color: red;">Kriteria</th>
                            <th>Fasilitas</th>
                            <th>Akreditasi</th>
                            <th>Biaya</th>
                            <th>Beasiswa</th>
                            <th>Jarak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Fasilitas</td>
                            <?php
                            $arr_1 = array($c11, $c12, $c13, $c14, $c15);
                            foreach ($arr_1 as $row) { ?>
                                <td><?= $row ?></td>
                            <?php }
                            ?>
                        </tr>
                        <tr>
                            <td>Akreditasi</td>
                            <?php
                            $arr_2 = array($c21, $c22, $c23, $c24, $c25);
                            foreach ($arr_2 as $row) { ?>
                                <td><?= $row ?></td>
                            <?php }
                            ?>
                        </tr>
                        <tr>
                            <td>Biaya</td>
                            <?php
                            $arr_3 = array($c31, $c32, $c33, $c34, $c35);
                            foreach ($arr_3 as $row) { ?>
                                <td><?= $row ?></td>
                            <?php }
                            ?>
                        </tr>
                        <tr>
                            <td>Beasiswa</td>
                            <?php
                            $arr_4 = array($c41, $c42, $c43, $c44, $c45);
                            foreach ($arr_4 as $row) { ?>
                                <td><?= $row ?></td>
                            <?php }
                            ?>
                        </tr>
                        <tr>
                            <td>Jarak</td>
                            <?php
                            $arr_5 = array($c51, $c52, $c53, $c54, $c55);
                            foreach ($arr_5 as $row) { ?>
                                <td><?= $row ?></td>
                            <?php }
                            ?>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <?php
                            $jum = array($jum1, $jum2, $jum3, $jum4, $jum5);
                            foreach ($jum as $row) { ?>
                                <td><?= number_format($row, 3) ?></td>
                            <?php }
                            ?>
                        </tr>
                    </tbody>
                </table>

                <h2>Nilai Eigan</h2>
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="background-color: red;">Kriteria</th>
                            <th>Fasilitas</th>
                            <th>Akreditasi</th>
                            <th>Biaya</th>
                            <th>Beasiswa</th>
                            <th>Jarak</th>
                            <th>Bobot Kriteria</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Fasilitas</td>
                            <?php
                            $arr_1 = array($e11, $e12, $c13, $e14, $e15, $rata1);
                            foreach ($arr_1 as $row) { ?>
                                <td><?= $row ?></td>
                            <?php }
                            ?>
                        </tr>
                        <tr>
                            <td>Akreditasi</td>
                            <?php
                            $arr_2 = array($e21, $e22, $e23, $e24, $e25, $rata2);
                            foreach ($arr_2 as $row) { ?>
                                <td><?= $row ?></td>
                            <?php }
                            ?>
                        </tr>
                        <tr>
                            <td>Biaya</td>
                            <?php
                            $arr_3 = array($e31, $e32, $e33, $e34, $e35, $rata3);
                            foreach ($arr_3 as $row) { ?>
                                <td><?= $row ?></td>
                            <?php }
                            ?>
                        </tr>
                        <tr>
                            <td>Beasiswa</td>
                            <?php
                            $arr_4 = array($e41, $e42, $e43, $e44, $e45, $rata4);
                            foreach ($arr_4 as $row) { ?>
                                <td><?= $row ?></td>
                            <?php }
                            ?>
                        </tr>
                        <tr>
                            <td>Jarak</td>
                            <?php
                            $arr_5 = array($e51, $e52, $e53, $e54, $e55, $rata5);
                            foreach ($arr_5 as $row) { ?>
                                <td><?= $row ?></td>
                            <?php }
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Perhitungan Kriteria</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <h4>Jarak Sekolah dari Desa <b><?= $desa ?></b> adalah sebagai Berikut</h4>
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <tr>
                        <th>Nama Sekolah</th>
                        <th>Jarak Sekolah</th>
                    </tr>
                    <?php $arr_j = array($jarak1 => 'SMA Jati Agung', $jarak2 => 'SMA Dharma Wanita 4', $jarak3 => 'SMA Muhammadiyah 1', $jarak4 => 'SMA Ulul Albab', $jarak5 => 'SMA Wachid Hasyim 2', $jarak6 => 'SMA Yayasan Taman');
                    foreach ($arr_j as $key => $value) { ?>
                        <tr>
                            <td><?= $value ?></td>
                            <td><?= $key ?>KM</td>


                        </tr>
                    <?php }
                    ?>
                </table>
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="background-color: red;"></th>
                            <th>Fasilitas</th>
                            <th>Akreditasi</th>
                            <th>Biaya</th>
                            <th>Beasiswa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($master_saw->result() as $row) {
                            $alt = $row->nama_alt;
                            $a = $row->fasilitas;
                            $b = $row->akreditasi;
                            $c = $row->biaya;
                            $d = $row->beasiswa;

                        ?>
                            <tr>
                                <td><?= $alt ?></td>
                                <td><?= $a ?></td>
                                <td><?= $b ?></td>
                                <td><?= $c ?></td>
                                <td><?= $d ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Hasil Perangkingan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" width="100%" cellspacing="0">

                    <tbody>
                        <?php
                        $x = 1;


                        $ref = array($ref1 => 'SMA Jati Agung', $ref2 => 'SMA Dharma Wanita 4', $ref3 => 'SMA Muhammadiyah 1', $ref4 => 'SMA Ulul Albab', $ref5 => 'SMA Wachid Hasyim 2', $ref6 => 'SMA Yayasan Taman');

                        krsort($ref);
                        foreach ($ref as $kunci => $nilai) { ?>
                            <tr>
                                <td><?= number_format($kunci, 3) ?></td>
                                <td><?= $nilai ?></td>
                                <td><?= $x++; ?></td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>