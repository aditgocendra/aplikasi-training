<?php

include 'koneksi.php';

if ($_GET[link] == "simpanUser") {
    if ($_POST[username] != null && $_POST[password] != null && $_POST[email] != null && $_POST[no_hp] != null && $_POST[akses]) {
        $query = mysql_query("INSERT INTO `tugas_akhir_12101020`.`register` (`username`, `password`, `email`, `no_hp`, `akses`) VALUES ('$_POST[username]', '$_POST[password]', '$_POST[email]', '$_POST[no_hp]', '$_POST[akses]')");
        if ($query) {
            echo"
            <script type=\"text/javascript\">
                alert(\"Data berhasil disimpan.\")
                location='../index.php?link=master_user';
            </script>
        ";
        } else {
            echo"
            <script type=\"text/javascript\">
                alert(\"Data gagal disimpan..!!\")
                location='../index.php?link=master_user';
            </script>
        ";
        }
    } else {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data Tidak Lengkap.\")
                location='../index.php?link=master_user';
            </script>
        ";
    }
} if ($_GET[link] == "simpanPaket") {
    if ($_POST[kodePaket] != null && $_POST[namaPaket] != null && $_POST[isiMateri] != null && $_POST[harga]) {
        $query = mysql_query("INSERT INTO `tugas_akhir_12101020`.`m_paket` (`kode_paket`, `nama_paket`, `isi_materi`, `harga`) VALUES ('$_POST[kodePaket]', '$_POST[namaPaket]', '$_POST[isiMateri]', '$_POST[harga]')");
        if ($query) {
            echo"
            <script type=\"text/javascript\">
                alert(\"Data berhasil disimpan.\")
                location='../index.php?link=master_paket';
            </script>
        ";
        } else {
            echo"
            <script type=\"text/javascript\">
                alert(\"Data gagal disimpan..!!\")
                location='../index.php?link=master_paket';
            </script>
        ";
        }
    } else {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data Tidak Lengkap.\")
                location='../index.php?link=master_paket';
            </script>
        ";
    }
} if ($_GET[link] == "simpanTraining") {
    $nama_paket = "$_POST[nama_paket]";
    $harga = "$_POST[harga]";
    $data = mysql_query("INSERT INTO `tugas_akhir_12101020`.`daftar_training` (`id`, `nama_paket`, `harga`) VALUES (NULL, '$nama_paket', '$harga')");
    if ($data) {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data berhasil disimpan.\")
                location='../index.php?link=master_paket';
            </script>
        ";
    } else {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data gagal disimpan..!!\")
                location='../index.php?link=master_paket';
            </script>
        ";
    }
}

if ($_GET[link] == "simpanJadwal") {
    if ($_POST[startdate] != null && $_POST[enddate] != null && $_POST[nama_paket] != null) {
    $tanggal = "$_POST[startdate] - $_POST[enddate]";
    echo"$tanggal";
    $nama_paket = "$_POST[nama_paket]";
    $data = mysql_query("INSERT INTO `tugas_akhir_12101020`.`m_jadwal` (`id` ,`tanggal` ,`nama_paket`) VALUES (NULL ,'$tanggal', '$nama_paket')");
    if ($data) {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data berhasil disimpan.\")
                location='../index.php?link=master_jadwal';
            </script>
        ";
    } else {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data gagal disimpan..!!\")
                location='../index.php?link=master_jadwal';
            </script>
        ";
    }
}else {
     echo"
            <script type=\"text/javascript\">
                alert(\"Data Tidak Lengkap.\")
                location='../index.php?link=master_jadwal';
            </script>
        ";
}
}
if ($_GET[link] == "approved") {

    $data = mysql_query("UPDATE  `daftar_training` SET  `status` =  'SUDAH_LUNAS' WHERE  `daftar_training`.`id` =  '$_POST[id]'");
    if ($data) {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data berhasil di konfirmasi.\")
                location='../index.php?link=approved';
            </script>
        ";
    } else {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data gagal disimpan..!!\")
                location='../index.php?link=approved';
            </script>
        ";
    }
}
?>
