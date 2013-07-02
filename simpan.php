<?php

include 'koneksi.php';

if ($_GET[link] == "saveRegister") {
    if ($_POST[nama_lengkap] != null && $_POST[username] != null && $_POST[password] != null && $_POST[confirm] != null && $_POST[email] != null && $_POST[no_hp] != null) {
        if ($_POST[password] == $_POST[confirm]) {
            $query = mysql_query("INSERT INTO `tugas_akhir_12101020`.`register` (`nama_lengkap`, `username`, `password`, `email`, `no_hp`, `akses`) VALUES ('$_POST[nama_lengkap]', '$_POST[username]', '$_POST[password]', '$_POST[email]', '$_POST[no_hp]', '$_POST[akses]')");
            if ($query) {
                echo"
            <script type=\"text/javascript\">
                alert(\"Data berhasil disimpan.\")
                location='index.php?link=sukses_register';
            </script>
        ";
            } else {
                echo"
            <script type=\"text/javascript\">
                alert(\"Data gagal disimpan..!!\")
                location='index.php?link=sukses_register';
            </script>
        ";
            }
        } else {
            echo"
            <script type=\"text/javascript\">
                alert(\"Sandi anda tidak falid..!!\")
                location='index.php?link=register';
            </script>
        ";
        }
    } else {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data Tidak Lengkap.\")
                location='index.php?link=register';
            </script>
        ";
    }
}if ($_GET[link] == "updateUser") {
    session_start();
    $oldpass = $_POST[oldpass];
    $newpass = $_POST[newpass];
    $confirm = $_POST[confirm];
    $query = mysql_query("SELECT * FROM  `register` where username = '$_SESSION[username]' and password='$oldpass'");
    $rows = mysql_num_rows($query);
    $data = mysql_fetch_array($query);
    $pass = "$data[password]";
    echo $rows;
    if ($rows > 0) {
        if ($newpass == $confirm) {
            $pass = "$data[password]";
            $query = mysql_query("UPDATE  `register` SET  `password` =  '$newpass' WHERE  `register`.`username` =  '$_SESSION[username]'");
            if ($query) {
                echo"
            <script type=\"text/javascript\">
                alert(\"Data berhasil dirubah.\")
                location='index.php?link=rubah_password';
            </script>
        ";
            } else {
                echo"
            <script type=\"text/javascript\">
                alert(\"Data gagal dirubah..!!\")
                location='index.php?link=rubah_password';
            </script>
        ";
            }
        } else {
            echo"
            <script type=\"text/javascript\">
                alert(\"Sandi anda tidak falid..!!\")
                location='index.php?link=rubah_password';
            </script>
        ";
        }
    } else {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data gagal dirubah..!!\")
                location='index.php?link=rubah_password';
            </script>
        ";
    }
}
?>
