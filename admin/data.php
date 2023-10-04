<?php
include_once 'top.php';
include_once 'menu.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3 PHP</title>
</head>
<style>
    h1{
        text-align: center;
        cursor: default;
    }
    tr{
        text-align: center;
    }
    tbody{
        cursor: text;
    }
    thead{
        background-color: #2E4374;
    }
    tfoot{
        background-color: #2E4374;
    }
</style>

<body>
    <?php
        $nm1 = ['nim' => '20219876', 'nama' => 'Agil', 'nilai' => 85];
        $nm2 = ['nim' => '20216754', 'nama' => 'Bunga', 'nilai' => 90];
        $nm3 = ['nim' => '20211234', 'nama' => 'Cinta', 'nilai' => 95];
        $nm4 = ['nim' => '20212345', 'nama' => 'Danang', 'nilai' => 75];
        $nm5 = ['nim' => '20213456', 'nama' => 'Elsa', 'nilai' => 80];
        $nm6 = ['nim' => '20214567', 'nama' => 'fitri', 'nilai' => 90];
        $nm7 = ['nim' => '20215678', 'nama' => 'Gina', 'nilai' => 95];
        $nm8 = ['nim' => '20216789', 'nama' => 'Haifa', 'nilai' => 65];
        $nm9 = ['nim' => '20217890', 'nama' => 'M. Rizky', 'nilai' => 90];
        $nm10 =['nim' => '20218901', 'nama' => 'Suci', 'nilai' => 100];
        
        $ar_title = ['NO', 'NIM', 'NAMA MAHASISWA', 'NILAI', 'KET', 'GRADE', 'PREDIKAT'];
        $mahasiswa = [$nm1, $nm2, $nm3, $nm4, $nm5, $nm6, $nm7, $nm8, $nm9, $nm10];
        
        $jumlah_keseluruhan = count($mahasiswa);
        $jumlah_nilai = array_column($mahasiswa, 'nilai');
        $nilai_total = array_sum($jumlah_nilai);
        $nilai_tinggi = max($jumlah_nilai);
        $nilai_rendah = min($jumlah_nilai);
        $nilai_rata_rata = $nilai_total / $jumlah_keseluruhan;
        
        $keterangan = [
        'Nilai Tertinggi' => $nilai_tinggi,
        'Nilai Terendah' => $nilai_rendah,
        'Nilai Rata Rata' => $nilai_rata_rata,
        'Jumlah Mahasiswa' => $jumlah_keseluruhan,
        'Jumlah Keseluruhan Nilai' => $nilai_total,
        ];
    ?>

    <h1>DAFTAR MAHASISWA DAN NILAI</h1>
    <table border="1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr>
            <?php
                foreach ($ar_title as $title) { ?>
                    <th>
                        <?= $title ?>
                    </th>
            <?php } ?>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1;
            foreach ($mahasiswa as $mhs) {
                // Keterangan ternary nilai 60
                $keterangan_mhs = ($mhs['nilai'] >= 60) ? "Lulus" : "Tidak Lulus";

                // Grade if multikondisi
                if ($mhs['nilai'] >= 90) {
                    $grade = "A";
                } elseif ($mhs['nilai'] >= 80) {
                    $grade = "B";
                } elseif ($mhs['nilai'] >= 70) {
                    $grade = "C";
                } elseif ($mhs['nilai'] >= 60) {
                    $grade = "D";
                } else {
                    $grade = "E";
                }

                // Predikat switch case
                switch ($grade) {
                    case 'A':
                        $predikat = "Sangat Baik";
                        break;
                    case 'B':
                        $predikat = "Baik";
                        break;
                    case 'C':
                        $predikat = "Cukup";
                        break;
                    case 'D':
                        $predikat = "Kurang";
                        break;
                    case 'E':
                        $predikat = "Sangat Kurang";
                        break;
                    default:
                        $predikat = "Tidak Valid";
                        break;
                }

            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nilai'] ?></td>
                    <td><?= $keterangan_mhs ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <?php
                foreach ($keterangan as $ket => $hasil) {
                    ?>
                    <tr>
                        <td colspan="3"><?= $ket ?></td>
                        <td colspan="4"><?= $hasil ?></td>
                    </tr>
            <?php } ?>
        </tfoot>
    </table>
</body>
</html>