<html lang="en">   
    <head>   
        <meta charset="utf-8">   
        <title>Twitter Bootstrap Version2.0 default form layout example</title>   
        <meta name="description" content="Twitter Bootstrap Version2.0 default form layout example from w3resource.com.">   
        <link href="twitter-bootstrap-v2/docs/assets/css/bootstrap.css" rel="stylesheet">  
    </head>  
    <body>
        <div class="span7 well-large">
            <h1>Daftar Akun</h1><br><br>
            <form class="form-horizontal form-actions" method="post" action="form/pendaftaran.php?link=simpan">
                <div class="control-group">
                    <label class="control-label" for="username">Username : &nbsp;</label>
                    <input type="text" placeholder="Username" name="username">
                    <span class="help-inline">required</span>
                </div>
                <div class="control-group">
                    <label class="control-label" for="password">Password : &nbsp;</label>
                    <input type="password" placeholder="Password" name="password">
                    <span class="help-inline">required</span>
                </div>
                <div class="control-group">
                    <label class="control-label" for="email">E-Mail : &nbsp;</label>
                    <input type="text" placeholder="E-Mail" name="email">
                    <span class="help-inline">required</span>
                </div>
                <div class="control-group">
                    <label class="control-label" for="no_hp">Telepon/HP : &nbsp;</label>
                    <input type="text" placeholder="Nomor HP" name="no_hp">
                    <span class="help-inline">required</span>
                </div>
                <div>
                    <input type="hidden" value="user" name="akses">
                </div>
                <div class="control-group" style="text-align: center">
                    <input type="submit" value="simpan" class="btn btn-primary">
                    <input type="reset" value="reset" class="btn">
                </div>
            </form>
            <?php
            if ($_GET[link] == "simpan") {

                function sukses() {
                    echo"
                                <script type=\"text/javascript\">
                                    alert(\"good\");
                                </script>
                                <script type=\"text/javascript\">
                                    window.location='../index.php';
                                </script>
                            ";
                }

                function gagal() {
                    echo"
                                <script type=\"text/javascript\">
                                    alert(\"good\");
                                </script>
                                <script type=\"text/javascript\">
                                    window.location='../index.php';
                                </script>
                            ";
                }

                mysql_connect("localhost", "root", "admin");
                mysql_select_db("tugas_akhir_12101020");
                $username = "$_POST[username]";
                $password = "$_POST[password]";
                $email = "$_POST[email]";
                $no_hp = "$_POST[no_hp]";
                $akses = "$_POST[akses]";
                $data = mysql_query("INSERT INTO `tugas_akhir_12101020`.`register` (`username` ,`password` ,`email` ,`no_hp` ,`akses`) VALUES ('$username', '$password', '$email','$no_hp','$akses')");
                if ($data) {
                    sukses();
                } else {
                    gagal();
                }
            }

            if ($_GET[link] == "delete") {
                mysql_connect("localhost", "root", "admin");
                mysql_select_db("apotek");
                $que = mysql_query("DELETE FROM barang WHERE kd_barang ='$_GET[kd_barang]'");
                if ($que) {
                    echo "berhasil";
                } else {
                    echo "gagal";
                }
            }

            if ($_GET[link] == "edit_script") {
                mysql_connect("localhost", "root", "admin");
                mysql_select_db("apotek");
                $que = mysql_query("UPDATE  `apotek`.`barang` SET  `kd_barang` =  '$_POST[kd_barang]', `nm_barang` =  '$_POST[nm_barang]', `hrg_barang` =  '$_POST[hrg_barang]' WHERE  `barang`.`kd_barang` ='$_POST[id_barang]'");
                if ($que) {
                    echo "berhasil";
                } else {
                    echo "gagal";
                }
            }
            ?>
        </div>
    </body>  
</html>