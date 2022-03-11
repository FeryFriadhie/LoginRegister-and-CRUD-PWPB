<?php
require 'functions.php';
// cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST['submit'])) {


  
      //cek apakah data berhasil ditambahkan atau tidak 
      if ( tambah($_POST) > 0 ) {
        echo "
              <script>
                  alert('data berhasil ditambahkan!');
              document.location.href = 'index.php';
              </script>
          
        ";
        
      }else{
        echo "
              <script>
              alert('data berhasil ditambahkan!');
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

  <title>Tambah data pengguna</title>
  
  <!-- HTML -->

<body>
  <h1>Tambah data pengguna</h1>
  
  <!-- Project -->
    <form action="" method="post">
      <ul>
        <li>
          <label for="username">Username: </label>
          <input type="text" name="username" id="username" required>
        </li>
        <li>
          <label for="email">Email: </label>
          <input type="text" name="email" id="email" required>
        </li>
        <li>
          <label for="password">Password: </label>
          <input type="text" name="password" id="password" required>
        </li>
        <li>
          <button type="submit" name="submit">Tambah Data</button>
        </li>
            
        
                
      </ul>
      
      
      
    </form>
</body>
</html>
