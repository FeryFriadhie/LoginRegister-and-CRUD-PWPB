<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "",  "login_register");

function query($query) {
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result) ){
    $rows[] = $row;
  }
  return $rows;
}


function tambah($data){
  global $conn;
  
    $username = htmlspecialchars($data ["username"]);
    $email = htmlspecialchars($data ["email"]);
    $password = htmlspecialchars($data ["password"]);

    // $hashed = 
 
    $query = "INSERT INTO users
              VALUES
              ('', '$username', '$email', '$password')
              ";
              
     mysqli_query($conn, $query);   
     
     return mysqli_affected_rows($conn);
     
}


function hapus($id){
  global $conn;
  mysqli_query($conn, "DELETE FROM users WHERE id = $id");
  return mysqli_affected_rows($conn);
  
}


  function ubah($data){
    global $conn;
      
      $id = $data["id"];
      $username = htmlspecialchars($data ["username"]);
      $email = htmlspecialchars($data ["email"]);
      $password = htmlspecialchars($data ["password"]);
   
      $query = "UPDATE users SET
                username = '$username', 
                email = '$email', 
                password = '$password'
                WHERE id = $id

                ";
                          
       mysqli_query($conn, $query);      
       return mysqli_affected_rows($conn);
}

function cari ($keyword) {
  $query = "SELECT * FROM users
                WHERE
                username LIKE '%$keyword%'OR email LIKE '%$keyword%'
                ";
  return query ($query);
  
}

?>
