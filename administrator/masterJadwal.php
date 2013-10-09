<html lang="en">   
    <head>   
        <meta charset="utf-8">   
        <title>Twitter Bootstrap Version2.0 default form layout example</title>   
        <meta name="description" content="Twitter Bootstrap Version2.0 default form layout example from w3resource.com.">   
        <link href="twitter-bootstrap-v2/docs/assets/css/bootstrap.css" rel="stylesheet">  
    </head> 
    <body>
        <div class="span7 well-large" style="text-align: center">
            <h3 align="center">Master Jadwal Training</h3>
            <form class="form_jadwal btn-primary form-horizontal form-actions" action="administrator/simpan.php?link=simpanJadwal" method="post">
                <div class="control-group">
                    <div class="input-append date datepicker" data-date-format="yyyy-mm-dd">
                    <label for="dpd1">Start Date : &nbsp;</label>
                    <input size="5" type="text" id="dpd1" name="startdate"><span class="add-on"><i class="icon-th"></i></span>
                    <label for="dpd2">End Date : &nbsp;</label>
                    <input size="5" type="text" id="dpd2" name="enddate"><span class="add-on"><i class="icon-th"></i></span>
                    </div>
                    <label for="nama_paket">Nama Paket : &nbsp;</label>
                    <!--<select id="nama_paket" name="nama_paket" onchange="location.href='?link=master_jadwal&&selected=' + this.options[this.selectedIndex].value;">-->
                    <select id="nama_paket" name="nama_paket">
                        <?php
                            include 'koneksi.php';
                            $data = mysql_query("SELECT * FROM m_paket");
                            while($quer = mysql_fetch_array($data)){
                        ?>
                        <option value="<?php echo $quer['nama_paket']; ?>"><?php echo $quer['nama_paket']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-success" ng-click="simpan()" ng-disabled="isClean() || formEdit.$invalid"><i class="icon-ok"></i>&nbsp;Simpan</button>
                    <button type="button" class="btn btn-danger" onclick="window.location='index.php'"><i class="icon-remove"></i>&nbsp;Batal</button>
                </div>  
            </form> 
            <br>
            <form action="index.php?link=cari&&cari=masterJadwal" method="post" class="form-search">
                <input type="text" name="cari" class="search-query" placeholder="Cari paket"> <button type="submit" class="btn"><i class="icon-search"></i>&nbsp;Cari</button>
            </form>
        </div>
        <table class="table btn-warning" align="center" border="1" style="text-align: center">
            <tr class="btn-inverse">
                    <td>Nama Paket</td>
                    <td>Periode</td>
                    <td colspan="2">Action</td>
                </tr>
                <?php 
                    include 'koneksi.php';
                    $query = mysql_query("SELECT * FROM `m_jadwal` order by id_jadwal asc");
                    while($data = mysql_fetch_array($query)) {
                ?>
                <tr class="btn-info">
                    <td><?php echo $data['nama_paket']; ?></td>
                    <td><?php echo $data['start_date']; ?> s/d <?php echo $data['end_date']; ?></td>
                    <td><a href="index.php?link=rubah&&edit=masterJadwal&&id=<?php echo $data['id_jadwal']; ?>"><i class="icon-edit"></i></a></td>
                    <td><a href="administrator/delete.php?link=del_jadwal&&id=<?php echo $data['id_jadwal']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="icon-remove"></i></a></td>
                </tr>
                <?php } ?>
            </table>
    </body>
</html>