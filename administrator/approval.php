<br>
<table align="center" border="1" style="text-align: center; font-size: 10" class="table btn-warning">
    <tr class="btn-inverse">
        <td>Nama Peserta</td>						
        <td>Nama Paket</td>
        <td>Harga</td>
        <td>Status</td>
        <td colspan="2">Action</td>
    </tr>
    <?php
    include 'koneksi.php';
    $query = mysql_query("SELECT * FROM  `daftar_training` order by nama_peserta desc");
    while ($data = mysql_fetch_array($query)) {
        ?>
    <form action="administrator/simpan.php?link=approval" method="post">
        <tr class="btn-info">
            <td><?php echo $data['nama_peserta']; ?></td>
            <td><?php echo $data['nama_paket']; ?></td>
            <td><?php echo "Rp. ". number_format($data['harga']); ?></td>
            <td><?php echo $data['status']; ?></td>
            <?php if ($data['status'] != "SUDAH_LUNAS"){ ?>
            <td><input type="hidden" name="id" value="<?php echo $data['id_daftar_training']; ?>"><input type="submit"  value="Approve"></td>
            <?php }else{ ?><td><?php echo "Approved"."</td>";} ?>
            <td><a href="administrator/delete.php?link=del_approve&&id=<?php echo $data['id']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="icon-remove"></i></a></td>
        </tr>
    </form>
    <?php } ?>
</table>
