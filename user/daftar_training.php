<html lang="en">   
    <head>   
        <meta charset="utf-8">   
        <title>Twitter Bootstrap Version2.0 default form layout example</title>   
        <meta name="description" content="Twitter Bootstrap Version2.0 default form layout example from w3resource.com.">   
        <link href="twitter-bootstrap-v2/docs/assets/css/bootstrap.css" rel="stylesheet">  
    </head>  
    <body>
        <div>
            <h3 align="center">Daftar Training</h3>
            <form method="post" action="user/simpan.php?link=simpanTraining" class="tabel_admin btn-primary form-horizontal form-actions">
                <div class="control-group">
                    <?php
                    session_start();
                    include 'koneksi.php';
                    $query = mysql_query("select * from m_paket where nama_paket = '" . $_GET[data] . "'");
                    $iki = mysql_fetch_array($query);
                    $query = mysql_query("select * from m_paket order by kode_paket desc");
                    ?>
                    <label class="control-label" for="nama_paket">Nama Paket : &nbsp;</label>
                    <input type="hidden" name="nama_peserta" value="<?php echo $_SESSION[username]; ?>">
                    <?php if ($_GET[data] == "") { ?>
                        <select name="nama_paket" onclick="window.location = '?link=daftar_training&data=' + this.value">
                        <?php } else { ?>
                            <select name="nama_paket" onchange="window.location = '?link=daftar_training&data=' + this.value">
                                <?php
                            } while ($data = mysql_fetch_array($query)) {
                                $jt = $_GET['data'];
                                $selected = "";
                                $value = $data['nama_paket'];
                                if ($jt == $value) {
                                    $selected = "selected";
                                }
                                echo "<option $selected value=\"$value\">$value</option>";
                            }
                            ?>
                        </select>
                </div>
                <div class="control-group">
                    <label class="control-label" for="harga">Harga : &nbsp;</label>
                    <input type="text" value="<?php echo $iki['harga']; ?>" 
                           name="harga" readonly>
                </div>
                <div align="center">
                    <button type="submit" class="btn btn-success" ng-click="simpan()" ng-disabled="isClean() || formEdit.$invalid"><i class="icon-ok"></i>&nbsp;Simpan</button>
                    <button type="button" class="btn btn-danger" onclick="window.location = 'index.php'"><i class="icon-remove"></i>&nbsp;Batal</button>
                </div>  
            </form>
        </div>
    </body>  
</html>