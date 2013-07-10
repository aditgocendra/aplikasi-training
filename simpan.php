<?php

include 'koneksi.php';
include 'block_xx.php';
if ($_GET[link] == "saveRegister") {
    $nama_lengkap = $_POST[nama_lengkap];
    $username = $_POST[username];
    $password = $_POST[password];
    $confirm = $_POST[confirm];
    $email = $_POST[email];
    $no_hp = $_POST[no_hp];
    if ($nama_lengkap != null && $username != null && $password != null && $confirm != null && $email != null && $no_hp != null) {
        if (cek_pesan($username)) {
            echo"
            <script type=\"text/javascript\">
            alert(\"kata kotor telah kami blokir dan tidak dapat dijadikan username.\")
            location='index.php?link=register';
            </script>";
            }
 
            else{
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
            } 
    
    }else {
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
