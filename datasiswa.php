<?php
include_once 'atas.php';
include_once 'libfungsi.php';

$nama_siswa = $_POST['nama'];
$matkul = $_POST['matkul'];
$nilai_uts = $_POST['uts'];
$nilai_uas = $_POST['uas'];
$nilai_tugas = $_POST['tugas'];

$ns1 = ['nama' => 'Akmal Gandhi Iswara', 'matkul' => 'Dasar-Dasar Pemrograman', 'uts' => 87, 'uas' => 91, 'tugas' => 90];
$ns2 = ['nama' => 'Bimo Falih R.', 'matkul' => 'Basis Data', 'uts' => 82, 'uas' => 98, 'tugas' => 78];
$ns3 = ['nama' => 'Nazhira Alifa', 'matkul' => 'Pemrograman Web', 'uts' => 78, 'uas' => 86, 'tugas' => 70];
$ns4 = ['nama' => 'Rayhan Prasetya', 'matkul' => 'Basis Data', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
$ns5 = ['nama' => $nama_siswa, 'matkul' => $matkul, 'uts' => $nilai_uts, 'uas' => $nilai_uas, 'tugas' => $nilai_tugas];

$ar_nilai = [$ns1, $ns2, $ns3, $ns4, $ns5];

?>
<div class="container-fluid">
    <h1 class="mt-4">Data Nilai</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Nilai</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            Data Nilai Mahasiswa
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Datatable
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Mata Kuliah</th>
                            <th scope="col">Nilai UTS</th>
                            <th scope="col">Nilai UAS</th>
                            <th scope="col">Nilai Tugas</th>
                            <th scope="col">Nilai Akhir</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Grade</th>
                            <th scope="col">Predikat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($ar_nilai as $ns) {
                        ?>
                            <tr>

                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $ns['nama'] ?></td>
                                <td><?= $ns['matkul'] ?></td>
                                <td><?= $ns['uts'] ?></td>
                                <td><?= $ns['uas'] ?></td>
                                <td><?= $ns['tugas'] ?></td>
                                <?php
                                $nilai = (30 * $ns['uts'] / 100) + (35 * $ns['uas'] / 100) + (35 * $ns['tugas'] / 100);
                                ?>
                                <td><?= $nilai; ?></td>
                                <td><?= keterangan($nilai) ?></td>
                                <td><?= gradeNilai($nilai) ?></td>
                                <td><?= predikat(gradeNilai($nilai)) ?></td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'bawah.php';
?>