<?php
include "../database/connection.php";
if(isset($_POST['submit'])){
    
  
    $nama = $_POST['nama']; 
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_scurity = password_hash($password, PASSWORD_DEFAULT);

   $query = mysqli_query($conn, "insert into user set nama = '$nama', username = '$username', password = '$password_scurity'");

   if ($query) {
    $message = "Data berhasil dibuat!";
    $message = urlencode($message);
    header("Location:../login.php?message={$message}");
    } else {
        $message = "Data gagal dibuat!";
        $message = urlencode($message);
        header("Location:../login.php?message={$message}");
    }
}

if(isset($_POST['login'])){
    
    // session_start();
    // $_SESSION = $_POST['username'];
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

   $query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
   $nums = mysqli_num_rows($query);
   

   if($nums > 0){
       while($row = mysqli_fetch_assoc($query)){
           if(password_verify($password, $row['password'])){
               $_SESSION['nama'] = $row['nama'];
               $_SESSION['username'] = $username;
                $message = "Anda berhasil Login!";
                $message = urlencode($message);
                header("Location:../dashboard.php?message={$message}");
            }else{
                $message = "Anda gagal Login!";
                $message = urlencode($message);
                header("Location:../login.php?message={$message}");
            }
       }
   }
}

?>