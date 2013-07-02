<?php
include 'koneksi.php';
$query = mysql_query("SELECT * FROM  `m_paket` ORDER BY  `m_paket`.`kode_paket` DESC ");

while($data = mysql_fetch_array($query)){
?>
<br>
<table border="1" class="table btn-info">
    <tr>
        <td colspan="2">
            Paket <?php echo $data[nama_paket]; ?>
        </td>
    </tr>
    <tr>
        <td>
            Isi Materi : <br><?php echo $data[isi_materi]; ?>
        </td>
    </tr>
    <tr>
        <td>
            Biaya : <?php echo "Rp. ". number_format($data[harga]); ?>
        </td>
    </tr>
</table>
<?php
} 
?>
<div class="alert alert-info">
    <p><strong>Informasi Pembayaran Training :</strong></p>
  <p>Pembayaran training bisa langsung konfirmasi melalui telepon dengan no.telp : (021) 8798 4412, atau melalui E-mail : hrd@mediainfo.co.id.</p>
  <p>Setelah melakukan konfirmasi kepada kami, Tunggu informasi kembali dari kami selama 1x24 jam, atau bisa lihat langsung info pembayaran yang belum dan sudah lunas di halaman website kami.</p>
  <p>Terima Kasih Atas Pengertian dan Perhatian Anda.</p> 
</div>