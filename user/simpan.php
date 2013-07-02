<?php

include 'koneksi.php';
switch ($_GET[link]) {
    case "simpanTraining":
    if ($_POST[nama_peserta] != null && $_POST[nama_paket] != null && $_POST[harga] != null) {
        $data = mysql_query("SELECT * FROM  `register` where username = '$_POST[nama_peserta]'");
        $isi = mysql_fetch_array($data);
        $query = mysql_query("INSERT INTO `tugas_akhir_12101020`.`daftar_training` (`id`, `nama_peserta`, `nama_paket`, `harga`, `status`) VALUES (NULL, '$isi[nama_lengkap]', '$_POST[nama_paket]', '$_POST[harga]', 'BELUM_LUNAS')");
        if ($query) {
            echo"
                <script type=\"text/javascript\">
                    alert(\"Data berhasil disimpan.\")
                    location='../index.php?link=daftar_training';
                </script>
            ";
        } else {
            echo"
                <script type=\"text/javascript\">
                    alert(\"Data gagal disimpan..!!\")
                    location='../index.php?link=daftar_training';
                </script>
            ";
        }
    } else {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data Tidak Lengkap.\")
                location='../index.php?link=daftar_training';
            </script>
        ";
    }
    break;
    case "simpanLain":
    echo "simpan lain";
    break;
}
?>
