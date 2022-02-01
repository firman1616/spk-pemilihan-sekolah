<div class="container-fluid">
    <?php
    $ref1 = number_format(($rata[0] * $maxfa1) + ($rata[1] * $akre1) + ($rata[2] * $duit1) + ($rata[3] * $bonus1) + ($rata[4] * $jarak1), 3);
    $ref2 = number_format(($rata[0] * $maxfa2) + ($rata[1] * $akre2) + ($rata[2] * $duit2) + ($rata[3] * $bonus2) + ($rata[4] * $jarak2), 3);
    $ref3 = number_format(($rata[0] * $maxfa3) + ($rata[1] * $akre3) + ($rata[2] * $duit3) + ($rata[3] * $bonus3) + ($rata[4] * $jarak3), 3);
    $ref4 = number_format(($rata[0] * $maxfa4) + ($rata[1] * $akre4) + ($rata[2] * $duit4) + ($rata[3] * $bonus4) + ($rata[4] * $jarak4), 3);
    $ref5 = number_format(($rata[0] * $maxfa5) + ($rata[1] * $akre5) + ($rata[2] * $duit5) + ($rata[3] * $bonus5) + ($rata[4] * $jarak5), 3);
    $ref6 = number_format(($rata[0] * $maxfa6) + ($rata[1] * $akre6) + ($rata[2] * $duit6) + ($rata[3] * $bonus6) + ($rata[4] * $jarak6), 3);
    ?>
    <!-- C1 -->
    <input type="hidden" id="c11" value="<?= $c11 ?>" name="c11">
    <input type="hidden" id="c12" value="<?= $c12 ?>" name="c12">
    <input type="hidden" id="c13" value="<?= $c13 ?>" name="c13">
    <input type="hidden" id="c14" value="<?= $c14 ?>" name="c14">
    <input type="hidden" id="c15" value="<?= $c15 ?>" name="c15">

    <!-- C2 -->
    <input type="hidden" id="c21" value="<?= $c21 ?>" name="c21">
    <input type="hidden" id="c22" value="<?= $c22 ?>" name="c22">
    <input type="hidden" id="c23" value="<?= $c23 ?>" name="c23">
    <input type="hidden" id="c24" value="<?= $c24 ?>" name="c24">
    <input type="hidden" id="c25" value="<?= $c25 ?>" name="c25">

    <!-- C3 -->
    <input type="hidden" id="c31" value="<?= $c31 ?>" name="c31">
    <input type="hidden" id="c32" value="<?= $c32 ?>" name="c32">
    <input type="hidden" id="c33" value="<?= $c33 ?>" name="c33">
    <input type="hidden" id="c34" value="<?= $c34 ?>" name="c34">
    <input type="hidden" id="c35" value="<?= $c35 ?>" name="c35">

    <!-- C4 -->
    <input type="hidden" id="c41" value="<?= $c41 ?>" name="c41">
    <input type="hidden" id="c42" value="<?= $c42 ?>" name="c42">
    <input type="hidden" id="c43" value="<?= $c43 ?>" name="c43">
    <input type="hidden" id="c44" value="<?= $c44 ?>" name="c44">
    <input type="hidden" id="c45" value="<?= $c45 ?>" name="c45">

    <!-- C5 -->
    <input type="hidden" id="c51" value="<?= $c51 ?>" name="c51">
    <input type="hidden" id="c52" value="<?= $c52 ?>" name="c52">
    <input type="hidden" id="c53" value="<?= $c53 ?>" name="c53">
    <input type="hidden" id="c54" value="<?= $c54 ?>" name="c54">
    <input type="hidden" id="c55" value="<?= $c55 ?>" name="c55">

    <!-- Rata Bobot -->
    <input type="hidden" id="rata1" value="<?= $rata[0] ?>" name="rata1">
    <input type="hidden" id="rata2" value="<?= $rata[1] ?>" name="rata2">
    <input type="hidden" id="rata3" value="<?= $rata[2] ?>" name="rata3">
    <input type="hidden" id="rata4" value="<?= $rata[3] ?>" name="rata4">
    <input type="hidden" id="rata5" value="<?= $rata[4] ?>" name="rata5">

    <!-- Jarak -->
    <input type="hidden" name="jar0" id="jar0" value="<?= $dis1[0] ?>">
    <input type="hidden" name="jar1" id="jar1" value="<?= $dis1[1] ?>">
    <input type="hidden" name="jar2" id="jar2" value="<?= $dis1[2] ?>">
    <input type="hidden" name="jar3" id="jar3" value="<?= $dis1[3] ?>">
    <input type="hidden" name="jar4" id="jar4" value="<?= $dis1[4] ?>">
    <input type="hidden" name="jar5" id="jar5" value="<?= $dis1[5] ?>">

    <!-- ref -->
    <input type="hidden" name="ref1" id="ref1" value="<?= $ref1 ?>">
    <input type="hidden" name="ref2" id="ref2" value="<?= $ref2 ?>">
    <input type="hidden" name="ref3" id="ref3" value="<?= $ref3 ?>">
    <input type="hidden" name="ref4" id="ref4" value="<?= $ref4 ?>">
    <input type="hidden" name="ref5" id="ref5" value="<?= $ref5 ?>">
    <input type="hidden" name="ref6" id="ref6" value="<?= $ref6 ?>">

    <input type="hidden" name="user" id="user" value="<?= $user_id ?>">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Hasil Perhitungan</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Hasil Keputusan</h6>
        </div>
        <div class="card-body">

            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <th>Bobot</th>
                    <th>Nama Sekolah</th>
                    <th>Rank</th>
                </thead>

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

            <!-- End Perbandingan AHP -->
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>

                    </tbody>
                </table>
            </div> -->