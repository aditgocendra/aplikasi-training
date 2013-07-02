<?php

include 'koneksi.php';

if ($_GET[link] == "del_user") {
    $query = mysql_query("delete from register where username = '$_GET[username]'");
    if ($query) {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data berhasil dihapus.\")
                location='../index.php?link=master_user';
            </script>
        ";
    } else {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data gagal dihapus..!!\")
                location='../index.php?link=master_user';
            </script>
        ";
    }
    
} if ($_GET[link] == "del_jadwal") {
    $query = mysql_query("delete from m_jadwal where id = '$_GET[id]'");
    if ($query) {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data berhasil dihapus.\")
                location='../index.php?link=master_jadwal';
            </script>
        ";
    } else {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data gagal dihapus..!!\")
                location='../index.php?link=master_jadwal';
            </script>
        ";
    }
    
} if ($_GET[link] == "del_paket") {
    $query = mysql_query("delete from m_paket where kode_paket = '$_GET[id]'");
    if ($query) {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data berhasil dihapus.\")
                location='../index.php?link=master_paket';
            </script>
        ";
    } else {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data gagal dihapus..!!\")
                location='../index.php?link=master_paket';
            </script>
        ";
    }
} if ($_GET[link] == "del_approve") {
    $query = mysql_query("delete from daftar_training where id = '$_GET[id]'");
    if ($query) {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data berhasil dihapus.\")
                location='../index.php?link=approved';
            </script>
        ";
    } else {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data gagal dihapus..!!\")
                location='../index.php?link=master_paket';
            </script>
        ";
    }
}
?>
