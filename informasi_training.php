<?php
include 'koneksi.php';
$query = mysql_query("SELECT * FROM  `m_paket` ORDER BY  `m_paket`.`kode_paket` DESC ");
echo "$data2[nama_paket]";
while($data = mysql_fetch_array($query)){
$query_jadwal = mysql_query("SELECT * FROM  `m_jadwal` where nama_paket='$data[nama_paket]'");
$data3 = mysql_fetch_array($query_jadwal);
?>
<br>
<table border="1" class="table btn-info">
    <tr>
        <td colspan="2">
            Paket <?php echo $data[nama_paket]; ?>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            Jadwal Training : <br><?php echo $data3[tanggal]; ?>
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
    <p><strong>Informasi Space Peserta Training :</strong></p>
  <p>1. Training Java Desktop</p>
  <p>- Jumlah peserta : 7 orang</p>
  <p>- Sisa space&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 3 orang</p><br>
  <p>2. Training PHP</p>
  <p>- Jumlah peserta : 6 orang</p>
  <p>- Sisa space&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 4 orang</p>
</div>