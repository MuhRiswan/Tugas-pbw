<?php
session_start();
if(session_destroy()){
    $message = "Anda berhasil Logout!";
    $message = urlencode($message);
    header("Location:login.php?message={$message}");
}
?>