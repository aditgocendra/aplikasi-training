<br>
<form action="index.php?link=cari&&cari=peserta" method="post" class="form-search" align="center">
    <input type="text" name="cari" class="search-query" placeholder="Cari user"><button type="submit" class="btn"><i class="icon-search"></i>&nbsp; Cari</button>
</form>
<table align="center" border="1" style="text-align: center" class="table">
    <tr class="table btn-inverse">
        <td>Nama Peserta</td>						
        <td>Nama Paket</td>
        <td>Status</td>
    </tr>
    <?php
    include 'koneksi.php';
    $query = mysql_query("SELECT * FROM  `daftar_training`");
    while ($data = mysql_fetch_array($query)) {
        ?>
        <tr class="table btn-info">
            <td><?php echo $data['nama_peserta']; ?></td>
            <td><?php echo $data['nama_paket']; ?></td>
            <td><?php echo $data['status']; ?></td>
        </tr>
    <?php } ?>
</table>
