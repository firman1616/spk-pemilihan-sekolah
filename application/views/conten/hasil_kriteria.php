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
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Hasil Perbandingan Kriteria</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Perbandingan Kriteria</h6>
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
                                <input type="number" class="form-control" value="1" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="1" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="1" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="1" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="1" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>Biaya</td>
                            <td>
                                <input type="number" class="form-control" value="1" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="1" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="1" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="1" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="1" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>Beasiswa</td>
                            <td>
                                <input type="number" class="form-control" value="1" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="1" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="1" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="1" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="1" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>Jarak</td>
                            <td>
                                <input type="number" class="form-control" value="1" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="1" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="1" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="1" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="1" readonly>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->