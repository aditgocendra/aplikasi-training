<?php

include 'koneksi.php';

if ($_GET[cari] == "masterUser") {
    $query = mysql_query("SELECT * FROM  `register` WHERE  `username` LIKE  '%$_POST[cari]%'");
    if ($query) {
        echo"
            <table align='center' style='text-align: center' class='table'>
                <tr class='btn-inverse'>
                    <td>Username</td>
                    <td>Email</td>
                    <td>No Telepon</td>
                    <td>Role</td>
                    <td colspan='2'>Action</td>
                </tr>
        ";
        while($data = mysql_fetch_array($query)){
        echo"<tr class='btn-info'>";
                    echo"<td>"; echo $data['username']; echo"</td>";
                    echo"<td>"; echo $data['email']; echo"</td>";
                    echo"<td>"; echo $data['no_hp']; echo"</td>";
                    echo"<td>"; echo $data['akses']; echo"</td>";
                    echo"<td><a href='index.php?link=rubah&&edit=masterUser&&id="; echo $data['username']; echo "'><i class='icon-edit'></i></a></td>";
                    echo"<td><a href='administrator/delete.php?link=del_user&&username="; echo $data['username']; echo"'><i class='icon-remove'></i></a></td>";
        echo"</tr>";
            }
        echo"</table>";
    } else {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data gagal disimpan..!!\")
                location='../index.php?link=master_user';
            </script>
        ";
    }
}if ($_GET[cari] == "masterPaket") {
    $query = mysql_query("SELECT * FROM  `m_paket` WHERE  `nama_paket` LIKE  '%$_POST[cari]%'");
    if ($query) {
        echo"
            <table align='center' style='text-align: center' class='table'>
                <tr class='btn-inverse'>
                    <td>Kode Paket</td>
                    <td>Nama Paket</td>
                    <td>Harga</td>
                    <td colspan='2'>Action</td>
                </tr>
        ";
        while($data = mysql_fetch_array($query)){
        echo"<tr class='btn-info'>";
                    echo"<td>"; echo $data['kode_paket']; echo"</td>";
                    echo"<td>"; echo $data['nama_paket']; echo"</td>";
                    echo"<td>"; echo $data['harga']; echo"</td>";
                    echo"<td><a href='index.php?link=rubah&&edit=masterPaket&&id="; echo $data['kode_paket']; echo "'><i class='icon-edit'></i></a></td>";
                    echo"<td><a href='administrator/delete.php?link=del_paket&&id="; echo $data['kode_paket']; echo"'><i class='icon-remove'></i></a></td>";
        echo"</tr>";
            }
        echo"</table>";
    } else {
        echo"
            <script type=\"text/javascript\">
                alert(\"Data gagal disimpan..!!\")
                location='../index.php?link=master_paket';
            </script>
        ";
    }
} if ($_GET[cari] == "masterJadwal") {
    $query = mysql_query("SELECT * FROM  `m_jadwal` WHERE  `nama_paket` LIKE  '%$_POST[cari]%'");
    if ($query) {
        echo"
            <table align='center' style='text-align: center' class='table'>
                <tr class='btn-inverse'>
                    <td>nama_paket</td>
                    <td>tanggal</td>
                    <td colspan='2'>Action</td>
                </tr>
        ";
        while($data = mysql_fetch_array($query)){
        echo"<tr class='btn-info'>";
                    echo"<td>"; echo $data['nama_paket']; echo"</td>";
                    echo"<td>"; echo $data['tanggal']; echo"</td>";
                    echo"<td><a href='index.php?link=rubah&&edit=masterJadwal&&id="; echo $data['id']; echo "'><i class='icon-edit'></i></a></td>";
                    echo"<td><a href='administrator/delete.php?link=del_jadwal&&id="; echo $data['id']; echo"'><i class='icon-remove'></i></a></td>";
        echo"</tr>";
            }
        echo"</table>";
    }else {
        echo"
                <script type=\"text/javascript\">
                    alert(\"Data gagal disimpan..!!\")
                    location='../index.php?link=master_user';
                </script>
            ";
    }
} if ($_GET[cari] == "peserta") {
    $query = mysql_query("SELECT * FROM  `daftar_training` WHERE  `nama_peserta` LIKE  '%$_POST[cari]%'");
    if ($query) {
        echo"
        <table class='table'>
        <tr class='table btn-inverse'>
            <td>Nama Peserta</td>						
            <td>Nama Paket</td>
            <td>Status</td>
        </tr>
        ";
        while($data = mysql_fetch_array($query)){
        echo"<tr class='btn-info'>";
                    echo"<td>"; echo $data['nama_peserta']; echo"</td>";
                    echo"<td>"; echo $data['nama_paket']; echo"</td>";
                    echo"<td>"; echo $data['status']; echo"</td>";
        echo"</tr>";
            }
        echo"</table>";
    }else {
        echo"
                <script type=\"text/javascript\">
                    alert(\"Data gagal ditemukan..!!\")
                    location='../index.php?link=peserta';
                </script>
            ";
    }
}
?>
