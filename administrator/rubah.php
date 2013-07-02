<?php
include 'koneksi.php';

if ($_GET[edit] == "masterUser") {
    $query = mysql_query("SELECT * FROM `register` where username = '$_GET[id]'");
    $data = mysql_fetch_array($query);
    ?>
    <div class="span7 well-large">
        <h3 align="center">Rubah Master User</h3><br>
        <form class="form_user btn-primary form-horizontal form-actions" method="post" action="administrator/edit.php?rubah=masterUser">
            <div class="control-group">
                <label class="control-label" for="username">Username : &nbsp;</label>
                <input type="hidden" name="id" value="<?php echo $data['username']; ?>">
                <input type="text" name="username" value="<?php echo $data['username']; ?>">
            </div>
            <div class="control-group">
                <label class="control-label" for="password">Password : &nbsp;</label>
                <input type="password" name="password" value="<?php echo $data['password']; ?>">
            </div>
            <div class="control-group">
                <label class="control-label" for="email">Email : &nbsp;</label>
                <input type="email" name="email" value="<?php echo $data['email']; ?>">
            </div>
            <div class="control-group">
                <label class="control-label" for="no_hp">No HP : &nbsp;</label>
                <input type="text" name="no_hp" value="<?php echo $data['no_hp']; ?>">
            </div>
            <div class="control-group form-inline">
                <label class="control-label" for="akses">Akses : &nbsp;</label>
                <label>
                    <select name="akses">
                        <option value="<?php echo $data['akses']; ?>"><?php echo $data['akses']; ?></option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </label>
            </div>
            <div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-danger" onclick="window.location='index.php'">Batal</button>
            </div>  
        </form>
    </div>

    <?php
} if ($_GET[edit] == "masterJadwal") {

    $query = mysql_query("SELECT * FROM  `m_jadwal` where id = '$_GET[id]'");
    $data = mysql_fetch_array($query);
    ?>
    <div class="span7 well-large" style="text-align: center">
        <h3 align="center">Rubah Daftar Training</h3>
        <form class="form_rjadwal btn-primary form-horizontal form-actions" action="administrator/edit.php?rubah=masterJadwal" method="post">
            <div class="control-group">
                <div>
                    <label for="tanggalAwal" style="text-align: left">Periode : <?php echo $data[tanggal]; ?></label>
                    <input type="hidden" name="id" value="<?php echo $data[id]; ?>">
                </div>
                <br>
                <div class="input-append date datepicker" data-date-format="dd-mm-yyyy">
                    <label for="dpd1">StartDate : &nbsp;</label>
                    <input size="5" type="text" id="dpd1" name="startdate"><span class="add-on"><i class="icon-th"></i></span>
                    <label for="dpd2">EndDate : &nbsp;</label>
                    <input size="5" type="text" id="dpd2" name="enddate"><span class="add-on"><i class="icon-th"></i></span>
                </div>
                <label for="nama_paket">Nama Paket : &nbsp;</label>
                <!--<select id="nama_paket" name="nama_paket" onchange="location.href='?link=master_jadwal&&selected=' + this.options[this.selectedIndex].value;">-->
                <select id="nama_paket" name="nama_paket">
                    <option selected value="<?php echo $data['nama_paket']; ?>"><?php echo $data['nama_paket']; ?></option>
                    <?php
                    include 'koneksi.php';
                    $data1 = mysql_query("SELECT * FROM m_paket");
                    while ($quer = mysql_fetch_array($data1)) {
                        ?>
                        <option value="<?php echo $quer['nama_paket']; ?>"><?php echo $quer['nama_paket']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-primary" ng-click="simpan()" ng-disabled="isClean() || formEdit.$invalid">Simpan</button>
                <button type="button" class="btn" onclick="window.location='index.php'">Batal</button>
            </div>  
        </form> 
    </div>

    <?php
} if ($_GET[edit] == "masterPaket") {

    $query = mysql_query("SELECT * FROM  `m_paket` where kode_paket = '$_GET[id]'");
    $data = mysql_fetch_array($query);
    ?>
    <div class="span7 well-large">
        <h3 align="center">Rubah Master Paket</h3><br>
        <form method="post" action="administrator/edit.php?rubah=masterPaket" class="form_paket btn-primary form-horizontal form-actions">
            <div class="control-group">
                <label class="control-label" for="kodePaket">Kode Paket : &nbsp;</label>
                <input type="hidden" placeholder="kode paket"
                       name="id" value="<?php echo $data[kode_paket]; ?>">
                <input type="text" placeholder="kode paket"
                       name="kodePaket" value="<?php echo $data[kode_paket]; ?>">
            </div>
            <div class="control-group">
                <label class="control-label" for="namaPaket">Nama Paket : &nbsp;</label>
                <input type="text" placeholder="nama paket"
                       name="namaPaket" value="<?php echo $data[nama_paket]; ?>">
            </div>
            <div class="control-group">
                <label class="control-label" for="isiMateri">Isi Materi : &nbsp;</label>
                <textarea rows="3"
                          name="isiMateri"><?php echo $data[isi_materi]; ?></textarea>
            </div>
            <div class="control-group">
                <label class="control-label" for="harga">Harga : &nbsp;</label>
                <input type="text" placeholder="harga"
                       name="harga"  value="<?php echo $data[harga]; ?>">
            </div>
            <div align="center">
                <button type="submit" class="btn btn-primary" ng-click="simpan()" ng-disabled="isClean() || formEdit.$invalid">Simpan</button>
                <button type="button" class="btn" onclick="window.location='index.php'">Batal</button>
            </div>  
        </form>
    </div>
<?php } ?>