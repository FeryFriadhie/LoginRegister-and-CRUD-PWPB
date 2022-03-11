<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "",  "login_register");

// ambil data dari tabel users/pengguna / query data users/pengguna
 $result = mysqli_query($conn, "SELECT * FROM users");

 // ambil data dari (fetch) users object result
 // mysqli_fetch_row() // mengembalikan array numerik
 // mysqli_fetch_assoc() // mengembalikan array associative
 // mysqli_fetch_array() // mengembalikan keduanya
 // mysqli_fetch_object() // 

//   while ( $pgn = mysqli_fetch_assoc($result) ) {
//  var_dump($pgn);
//   }
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

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>username</th>
            <th>email</th>
            <th>password</th>

        </tr>
        <?php $i = 1; ?>
        <?php while ( $row = mysqli_fetch_assoc($result) ) : ?>
        <tr>
            <td><?= $i; ?> </td>
            <!--cara kedua jika id tidak berurutan $row["id"];-->
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
                <td><?= $row["username"]; ?> </td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["password"]; ?> </td>
            </td>
        </tr>
            <?php $i++; ?>
            <?php endwhile; ?>
    </table>
</body>
</html>
