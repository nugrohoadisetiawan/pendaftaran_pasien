<?php
include("koneksi.php");?>
<html>
<head>
</head>
<body>
    <h1>Data Pasien</h1>
    <h4<a href=index.php>ke halaman utama</h4>
    <table border="1">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>alamat</th>
            <th>jenis_kelamin</th>
            <th>no_tlp</th>
            <th>agama</th>
            <th>tanggal_masuk</th>
            <th>gejala</th>
            <th>tempat_lahir</th>
            <th>tanggal_lahir</th>
            <th>no_kamar</th>
        </tr>
        <?php
        include("koneksi.php");
        $sql='SELECT*FROM tb_pendataanpasien';
        $query=mysqli_query($db,$sql);

        while($pasien=mysqli_fetch_array($query)){
            echo"<tr>";
            echo"<td>".$datapasien['id']."</td>";
            echo"<td>".$datapasien['nama']."</td>";
            echo"<td>".$datapasien['alamat']."</td>";
            echo"<td>".$datapasien['jenis_kelamin']."</td>";
            echo"<td>".$datapasien['no_tlp']."</td>";
            echo"<td>".$datapasien['agama']."</td>";
            echo"<td>".$datapasien['tanggal_masuk']."</td>";
            echo"<td>".$datapasien['gejala']."</td>";
            echo"<td>".$datapasien['tempat_lahir']."</td>";
            echo"<td>".$datapasien['tanggal_lahir']."</td>";
            echo"<td>".$datapasien['no_kamar']."</td>";
            echo"<a href='edit-pasien.php?id=".$datapasien['id']."'>edit</a>";
            echo"<a href='hapus-pasien.php?id=".$datapasien['id']."'>hapus</a>";
            echo"</tr>";
        }
        ?>
</body>
</html>