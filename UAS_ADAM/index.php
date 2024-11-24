<?php

include  'koneksi.php';

$sql = "SELECT * FROM mahasiswa baru";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <a href="tambah_mahasiswa.php">Tambah Data</a>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Nomor</th>
            <th>Jurusan</th>
        </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
               <tr>
                   <td><?php echo $row['Id']; ?></td>
                   <td><?php echo $row['Name']; ?></td>
                   <td><?php echo $row['NIM']; ?></td>
                   <td><?php echo $row['Email']; ?></td>
                   <td><?php echo $row['Nomor']; ?></td>
                   <td><?php echo $row['Jurusan']; ?></td>
                   <td>
                      <a href="edit_mahasiswa.php?id=<?php echo $row['Id']; ?>">Edit</a>
                      <a href="hapus_mahasiswa.php?id=<?php echo $row['Id']; ?>">Hapus</a>
                   </td>
                </tr>
            <?php } ?>
    </table>
          
</body>
</html>

<?php $conn->close(); ?>