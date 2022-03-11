<?php
require 'functions.php';


//ambil data dari URL
$id = $_GET ["id"];

//query date mahasiswa berdasarkan id
$pgn = query("SELECT * FROM users WHERE id = $id")[0];


// cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST['submit'])) {

      //cek apakah data berhasil diubah atau tidak 
      if ( ubah($_POST) > 0 ) {
        echo "
              <script>
                  alert('data berhasil diubah!');
              document.location.href = 'index.php';
              </script>
          
        ";
        
      }else{
        echo "
              <script>
                  alert('data berhasil diubah!');
              document.location.href = 'index.php';
             </script>
                  
                ";
   
      }
  }

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Ubah data pengguna</title>
  
  <!-- HTML -->

<body>
  <h1>Ubah data pengguna</h1>
  
  <!-- Project -->
    <form action="" method="post">
    <input type="hidden" name="id" value="<?= $pgn["id"]; ?>">
      <ul>
        <li>
          <label for="username">Username: </label>
          <input type="text" name="username" id="username" required value="<?= $pgn["username"]; ?>">
        </li>
        <li>
          <label for="email">Email: </label>
          <input type="text" name="email" id="email" required value="<?= $pgn["email"]; ?>">
        </li>
        <li>
          <label for="password">Password: </label>
          <input type="text" name="password" id="password" required value="<?= $pgn["password"]; ?>">
        </li>
        <li>
          <button type="submit" name="submit">Ubah Data!</button>
        </li>
      </ul>
      
      
      
    </form>
</body>
</html>
