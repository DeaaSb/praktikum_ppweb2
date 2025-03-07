<?php
    $ns1 = ["id" => 1, "nim" => "0110124008", "uts" => 90, "uas" => 91, "tugas" => 92];
    $ns2 = ["id" => 2, "nim" => "0110124009", "uts" => 86, "uas" => 89, "tugas" => 70];
    $ns3 = ["id" => 3, "nim" => "0110124010", "uts" => 95, "uas" => 81, "tugas" => 89];
    $ns4 = ["id" => 4, "nim" => "0110124011", "uts" => 89, "uas" => 96, "tugas" => 92];

    $ar_nilai = [$ns1, $ns2, $ns3, $ns4];

    echo $ar_nilai[0]["nim"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
</head>
<body>
    <h3>Daftar Nilai Siswa</h3>
    <table border="1" width="'100%">
        <thead>
            <tr>
                <th>No</th>
                <th>nim</th>
                <th>uts</th>
                <th>uas</th>
                <th>tugas</th>
                <th>nilai akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor = 1;
                foreach ($ar_nilai as $ns){
                    echo '<tr><td>'.$nomor.'</td>';
                    echo '<td>'.$ns['nim'].'</td>';
                    echo '<td>'.$ns['uts'].'</td>';
                    echo '<td>'.$ns['uas'].'</td>';
                    echo '<td>'.$ns['tugas'].'</td>';
                    $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas'])/3;
                    echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                    echo '<tr/>';
                    $nomor++;
                }
            ?>
        </tbody>
    </table>
</body>
</html>