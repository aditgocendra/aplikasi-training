<?php
include 'koneksi.php';
$result = mysql_query("SELECT * FROM  `daftar_training` order by id_daftar_training asc");
?>
<table>
    <?php
    while($query = mysql_fetch_array($result)){
        ?>
    <tr class="btn-success">
        <td>Nama </td>
        <td>:</td>
        <td><?php echo $query[nama_peserta]; ?></td>
    </tr>
    <tr>
        <td>Nama Paket</td>
        <td>:</td>
        <td><?php echo $query[nama_paket]; ?></td>
    </tr>
    <tr>
        <td>Status</td>
        <td>:</td>
        <td><?php echo $query[status]; ?></td>
    </tr>
    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>
    <?php } ?>
</table>