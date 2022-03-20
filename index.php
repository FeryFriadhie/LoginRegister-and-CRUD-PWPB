<?php
require 'functions.php';
$pengguna = query("SELECT * FROM users");


//tombol cari di tekan 
if (isset($_POST{"Cari"})) {
  $pengguna = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Data Pengguna</h1>
    <a href="tambah.php">Tambah data pengguna</a>
    <br><br>

    <form action="" method="post">
      <input type="text" name="keyword" size="40" autofocus placeholder="Masukan keyword pencarian.."autocomplete="off">
      <button type="submit" name="Cari">Cari</button>   
    </form>
    
    
    
    
    
<br>
    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>username</th>
            <th>email</th>
            <th>password</th>

        </tr>
        <?php $i = 1; ?>
        <?php foreach ($pengguna as $row) : ?>
        <tr>
            <td><?= $i; ?> </td>
            <!--cara kedua jika id tidak berurutan $row["id"];-->
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
            </td>
                <td><?= $row["username"]; ?> </td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["password"]; ?> </td>
            </td>
        </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
    </table>
</body>
</html>
