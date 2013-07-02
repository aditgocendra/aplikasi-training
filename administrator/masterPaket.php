<html lang="en">   
    <head>   
        <meta charset="utf-8">   
        <title>Twitter Bootstrap Version2.0 default form layout example</title>   
        <meta name="description" content="Twitter Bootstrap Version2.0 default form layout example from w3resource.com.">   
        <link href="twitter-bootstrap-v2/docs/assets/css/bootstrap.css" rel="stylesheet">  
    </head>  
    <body>
        <div class="span7 well-large">
            <h3 align="center">Master Paket Training</h3><br>
            <form method="post" action="administrator/simpan.php?link=simpanPaket" class="form_paket btn-primary form-horizontal form-actions">
                <div class="control-group">
                    <label class="control-label" for="kodePaket">Kode Paket : &nbsp;</label>
                    <input type="text" placeholder="kode paket"
                           name="kodePaket">
                </div>
                <div class="control-group">
                    <label class="control-label" for="namaPaket">Nama Paket : &nbsp;</label>
                    <input type="text" placeholder="nama paket"
                           name="namaPaket">
                </div>
                <div class="control-group">
                    <label class="control-label" for="isiMateri">Isi Materi : &nbsp;</label>
                    <textarea rows="3"
                              name="isiMateri"></textarea>
                </div>
                <div class="control-group">
                    <label class="control-label" for="harga">Harga : &nbsp;</label>
                    <input type="text" placeholder="harga"
                           name="harga">
                </div>
                <div align="center">
                    <button type="submit" class="btn btn-success" ng-click="simpan()" ng-disabled="isClean() || formEdit.$invalid">Simpan</button>
                    <button type="button" class="btn btn-danger" onclick="window.location='index.php'">Batal</button>
                </div>  
            </form>
        </div>
        <br>
        <form action="index.php?link=cari&&cari=masterPaket" method="post" class="form-search" align="center">
            <input type="text" name="cari" class="search-query" placeholder="Cari paket"> <button type="submit" class="btn">Search</button>
        </form>
        <table align="center" border="1" style="text-align: center" class="table btn-warning">
            <tr class="btn-inverse">
                <td>Kode Paket</td>
                <td>Nama Paket</td>
                <td>Harga</td>
                <td colspan="2">Action</td>
            </tr>
            <?php
            include 'koneksi.php';
            $query = mysql_query("SELECT * FROM `m_paket` order by kode_paket asc");
            while ($data = mysql_fetch_array($query)) {
                ?>
            <tr class="btn-info">
                    <td><?php echo $data['kode_paket']; ?></td>
                    <td><?php echo $data['nama_paket']; ?></td>
                    <td><?php echo $data['harga']; ?></td>
                    <td><a href="index.php?link=rubah&&edit=masterPaket&&id=<?php echo $data['kode_paket']; ?>"><i class="icon-edit"></i></a></td>
                    <td><a href="administrator/delete.php?link=del_paket&&id=<?php echo $data['kode_paket']; ?>"><i class="icon-remove"></i></a></td>
                </tr>
            <?php } ?>
        </table>
    </body>  
</html>