<?php

include "koneksi.php";
$username = $_POST['username']; 
$password = $_POST['password']; 

$query = mysql_query("select * from register where username='$username' and password = '$password'");
$rows = mysql_num_rows($query);
$data = mysql_fetch_array($query);

if($rows > 0){
    session_start();
    session_register(username);
    session_register(password);
    session_register(akses);
    
    $_SESSION[username] = $data[username];
    $_SESSION[password] = $data[password];
    $_SESSION[akses] = $data[akses];
    
    header("location:index.php");
}
 else {
    header("location:index.php?link=error");
}
?>
