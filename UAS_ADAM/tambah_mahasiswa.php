<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <from action="proses_tambah.php" method="POST">
        <label>Nama:</label>
        <input type="text" name="Nama" required><br>

        <label>NIM:</label>
        <input type="text" name="NIM" required><br>

        <label>Email:</label>
        <input type="Email" name="Email" required><br>

        <label>Nomor:</label>
        <input type="text" name="Nomor" required><br>

        <label>Jurusan:</label>
        <input type="text" name="Jurusan" required><br>
       
        <input type="submit"  value="tambah">

     </form>
</body>
</html>