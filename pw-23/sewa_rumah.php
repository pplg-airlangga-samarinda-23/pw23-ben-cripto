 <?php

 require 'koneksi.php';


$sql = "SELECT * FROM sewa_rumah";
$rows = $koneksi->execute_query($sql)->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>sewa_rumah</title>
</head>
<body>
    <h1>halaman sewa_rumah</h1>

    <a href="[sewa_rumah]-tambah.php">tambah data</a>
    <table>
        <thead>
            <th>No</th>
            <th>id</th>
            <th>rumah</th>
            <th>kamar</th>
            <th>fasilitas</th>
            <th>harga</th>
            <th>tanggal sewa</th>
            <th>aksi</th>
        </thead>
        <tbody>
            <?php $no=0; foreach ($rows as $row) : ?>
                <tr>
                    <td><?= $no++ ?></td> 
                    <td><?= $row['id'] ?></td> 
                    <td><?= $row['rumah'] ?></td> 
                    <td><?= $row['kamar'] ?></td> 
                    <td><?= $row['fasilitas'] ?></td> 
                    <td><?= $row['harga'] ?></td>
                    <td><?= $row['tanggal_sewa'] ?></td> 
                        <a href="[sewa_rumah]-edit.php?id=<?=$row['id']?>">edit</a>
                        <a href="[sewa_rumah]-hapus.php?id=<?=$row['id']?>">hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>