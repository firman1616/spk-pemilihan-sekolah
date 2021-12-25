<?php
// 1
$C11 = $_POST['C11'];
$C12 = $_POST['C12'];
$C13 = $_POST['C13'];
$C14 = $_POST['C14'];
$C15 = $_POST['C15'];

// 2
$C21 = $_POST['C21'];
$C22 = $_POST['C22'];
$C23 = $_POST['C23'];
$C24 = $_POST['C24'];
$C25 = $_POST['C25'];

// 3
$C31 = $_POST['C31'];
$C32 = $_POST['C32'];
$C33 = $_POST['C33'];
$C34 = $_POST['C34'];
$C35 = $_POST['C35'];

// 4
$C41 = $_POST['C41'];
$C42 = $_POST['C42'];
$C43 = $_POST['C43'];
$C44 = $_POST['C44'];
$C45 = $_POST['C45'];

// 5
$C51 = $_POST['C51'];
$C52 = $_POST['C52'];
$C53 = $_POST['C53'];
$C54 = $_POST['C54'];
$C55 = $_POST['C55'];

$jml1 = $C11 + $C21 + $C31 + $C41 + $C51;
$jml2 = $C12 + $C22 + $C32 + $C42 + $C52;
$jml3 = $C13 + $C23 + $C33 + $C43 + $C53;
$jml4 = $C14 + $C24 + $C34 + $C44 + $C54;
$jml5 = $C15 + $C25 + $C35 + $C45 + $C55;

// Eigen 1
$E11 = $C11 / $jml1;
$E21 = $C21 / $jml1;
$E31 = $C31 / $jml1;
$E41 = $C41 / $jml1;
$E51 = $C51 / $jml1;

// Eigen 2
$E12 = $C12 / $jml2;
$E22 = $C22 / $jml2;
$E32 = $C32 / $jml2;
$E42 = $C42 / $jml2;
$E52 = $C52 / $jml2;

// Eigen 3
$E13 = $C13 / $jml3;
$E23 = $C23 / $jml3;
$E33 = $C33 / $jml3;
$E43 = $C43 / $jml3;
$E53 = $C53 / $jml3;

// Eigen 4
$E14 = $C14 / $jml4;
$E24 = $C24 / $jml4;
$E34 = $C34 / $jml4;
$E44 = $C44 / $jml4;
$E54 = $C54 / $jml4;

// Eigen 5
$E15 = $C15 / $jml5;
$E25 = $C25 / $jml5;
$E35 = $C35 / $jml5;
$E45 = $C45 / $jml5;
$E55 = $C55 / $jml5;

// Rata-Rata
$R1 = ($E11 + $E12 + $E13 + $E14 + $E15) / 5;
$R2 = ($E21 + $E22 + $E23 + $E24 + $E25) / 5;
$R3 = ($E31 + $E32 + $E33 + $E34 + $E35) / 5;
$R4 = ($E41 + $E42 + $E43 + $E44 + $E45) / 5;
$R5 = ($E51 + $E52 + $E53 + $E54 + $E55) / 5;
?>

<input type="hidden" id="user" value="<?= $user_id ?>">

<input type="hidden" id="rata1" value="<?= $R1 ?>">
<input type="hidden" id="rata2" value="<?= $R2 ?>">
<input type="hidden" id="rata3" value="<?= $R3 ?>">
<input type="hidden" id="rata4" value="<?= $R4 ?>">
<input type="hidden" id="rata5" value="<?= $R5 ?>">

<!-- C1 -->
<input type="hidden" id="c11" value="<?= $C11 ?>">
<input type="hidden" id="c12" value="<?= $C12 ?>">
<input type="hidden" id="c13" value="<?= $C13 ?>">
<input type="hidden" id="c14" value="<?= $C14 ?>">
<input type="hidden" id="c15" value="<?= $C15 ?>">

<!-- C2 -->
<input type="hidden" id="c21" value="<?= $C21 ?>">
<input type="hidden" id="c22" value="<?= $C22 ?>">
<input type="hidden" id="c23" value="<?= $C23 ?>">
<input type="hidden" id="c24" value="<?= $C24 ?>">
<input type="hidden" id="c25" value="<?= $C25 ?>">

<!-- C3 -->
<input type="hidden" id="c31" value="<?= $C31 ?>">
<input type="hidden" id="c32" value="<?= $C32 ?>">
<input type="hidden" id="c33" value="<?= $C33 ?>">
<input type="hidden" id="c34" value="<?= $C34 ?>">
<input type="hidden" id="c35" value="<?= $C35 ?>">

<!-- C4 -->
<input type="hidden" id="c41" value="<?= $C41 ?>">
<input type="hidden" id="c42" value="<?= $C42 ?>">
<input type="hidden" id="c43" value="<?= $C43 ?>">
<input type="hidden" id="c44" value="<?= $C44 ?>">
<input type="hidden" id="c45" value="<?= $C45 ?>">

<!-- C5 -->
<input type="hidden" id="c51" value="<?= $C51 ?>">
<input type="hidden" id="c52" value="<?= $C52 ?>">
<input type="hidden" id="c53" value="<?= $C53 ?>">
<input type="hidden" id="c54" value="<?= $C54 ?>">
<input type="hidden" id="c55" value="<?= $C55 ?>">
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Hasil Perbandingan Kriteria</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Hasil Perbandingan Kriteria</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="background-color: red; color:white">Kriteria</th>
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
                            <td>
                                <input type="number" class="form-control" value="<?= $C11 ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $C12 ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $C13 ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $C14 ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $C15 ?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>Akreditasi</td>
                            <td>
                                <input type="number" class="form-control" value="<?= number_format($C21, 2) ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $C22 ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $C23 ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $C24 ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $C25 ?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>Biaya</td>
                            <td>
                                <input type="number" class="form-control" value="<?= number_format($C31, 3) ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= number_format($C32, 3)  ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $C33 ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $C34 ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $C35 ?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>Beasiswa</td>
                            <td>
                                <input type="number" class="form-control" value="<?= number_format($C41, 3)  ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= number_format($C42, 3)  ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= number_format($C43, 3)  ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $C44 ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $C45 ?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>Jarak</td>
                            <td>
                                <input type="number" class="form-control" value="<?= number_format($C51, 3)  ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= number_format($C52, 3)  ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= number_format($C53, 3)  ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= number_format($C54, 3)  ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $C55 ?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td><?= number_format($jml1, 3) ?></td>
                            <td><?= number_format($jml2, 3) ?></td>
                            <td><?= number_format($jml3, 3) ?></td>
                            <td><?= number_format($jml4, 3) ?></td>
                            <td><?= number_format($jml5, 3) ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Prioritas -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Hasil Prioritas Kriteria</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="background-color: red; color:white"></th>
                            <th>Fasilitas</th>
                            <th>Akreditasi</th>
                            <th>Biaya</th>
                            <th>Beasiswa</th>
                            <th>Jarak</th>
                            <th>Rata - Rata</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Fasilitas</td>
                            <td><?= number_format($E11, 3) ?></td>
                            <td><?= number_format($E12, 3) ?></td>
                            <td><?= number_format($E13, 3) ?></td>
                            <td><?= number_format($E14, 3) ?></td>
                            <td><?= number_format($E15, 3) ?></td>
                            <td><?= number_format($R1, 3) ?></td>
                        </tr>
                        <tr>
                            <td>Akreditasi</td>
                            <td><?= number_format($E21, 3) ?></td>
                            <td><?= number_format($E22, 3) ?></td>
                            <td><?= number_format($E23, 3) ?></td>
                            <td><?= number_format($E24, 3) ?></td>
                            <td><?= number_format($E25, 3) ?></td>
                            <td><?= number_format($R2, 3) ?></td>
                        </tr>
                        <tr>
                            <td>Biaya</td>
                            <td><?= number_format($E31, 3) ?></td>
                            <td><?= number_format($E32, 3) ?></td>
                            <td><?= number_format($E33, 3) ?></td>
                            <td><?= number_format($E34, 3) ?></td>
                            <td><?= number_format($E35, 3) ?></td>
                            <td><?= number_format($R3, 3) ?></td>
                        </tr>
                        <tr>
                            <td>Beasiswa</td>
                            <td><?= number_format($E41, 3) ?></td>
                            <td><?= number_format($E42, 3) ?></td>
                            <td><?= number_format($E43, 3) ?></td>
                            <td><?= number_format($E44, 3) ?></td>
                            <td><?= number_format($E45, 3) ?></td>
                            <td><?= number_format($R4, 3) ?></td>
                        </tr>
                        <tr>
                            <td>Jarak</td>
                            <td><?= number_format($E51, 3) ?></td>
                            <td><?= number_format($E52, 3) ?></td>
                            <td><?= number_format($E53, 3) ?></td>
                            <td><?= number_format($E54, 3) ?></td>
                            <td><?= number_format($E55, 3) ?></td>
                            <td><?= number_format($R5, 3) ?></td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-bordered" width="100%" cellspacing="0">
                    <tr>
                        <td>CI</td>
                        <td>
                            <?php
                            $lamda = ($jml1 * $R1) + ($jml2 * $R2) + ($jml3 * $R3) + ($jml4 * $R4) + ($jml5 * $R5);
                            echo number_format(($lamda - 5) / 4, 3);
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>CR</td>
                        <td>
                            <?php
                            $lamda = ($jml1 * $R1) + ($jml2 * $R2) + ($jml3 * $R3) + ($jml4 * $R4) + ($jml5 * $R5);
                            echo number_format((($lamda - 5) / 4) / 1.12, 3);
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->