<?php

include 'koneksi.php';

if ($_GET[rubah] == "masterUser") {
    $query = mysql_query("UPDATE  `tugas_akhir_12101020`.`register` SET  `username` =  '$_POST[username]', `password` =  '$_POST[password]', `email` =  '$_POST[email]', `no_hp` =  '$_POST[no_hp]', `akses` =  '$_POST[akses]' WHERE  `register`.`username` =  '$_POST[id]'");
    if ($query) {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data berhasil dirubah.\")
                location='../index.php?link=master_user';
            </script>
        ";
    } else {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data gagal dirubah..!!\")
                location='../index.php?link=master_user';
            </script>
        ";
    }
} if ($_GET[rubah] == "masterPaket") {
    $query = mysql_query("UPDATE  `tugas_akhir_12101020`.`m_paket` SET  `kode_paket` =  '$_POST[kodePaket]', `nama_paket` =  '$_POST[namaPaket]', `isi_materi` =  '$_POST[isiMateri]', `harga` =  '$_POST[harga]' WHERE  `m_paket`.`kode_paket` =  '$_POST[id]'");
    if ($query) {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data berhasil dirubah.\")
                location='../index.php?link=master_paket';
            </script>
        ";
    } else {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data gagal dirubah..!!\")
                location='../index.php?link=master_paket';
            </script>
        ";
    }

} if ($_GET[rubah] == "masterJadwal") {
    $tanggal = "$_POST[startdate] - $_POST[enddate]";
    
    $query = mysql_query("UPDATE  `tugas_akhir_12101020`.`m_jadwal` SET  `start_date` =  '$_POST[startdate]', `end_date`='$_POST[enddate]', `nama_paket` =  '$_POST[nama_paket]' WHERE  `m_jadwal`.`id_jadwal` ='$_POST[id]'");
    if ($query) {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data berhasil dirubah. $tanggal \")
                location='../index.php?link=master_jadwal';
            </script>
        ";
    } else {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data gagal dirubah..!!\")
                location='../index.php?link=master_jadwal';
            </script>
        ";
    }
}
?>
