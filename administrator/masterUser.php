<html lang="en">   
    <head>   
        <meta charset="utf-8">   
        <title>Twitter Bootstrap Version2.0 default form layout example</title>   
        <meta name="description" content="Twitter Bootstrap Version2.0 default form layout example from w3resource.com.">   
        <link href="twitter-bootstrap-v2/docs/assets/css/bootstrap.css" rel="stylesheet">
    </head>  
    <body>
        <div class="span7 well-large">
            <h3 align="center">Form Master User</h3><br>
             <form class="form_user btn-primary form-horizontal form-actions" method="post" action="administrator/simpan.php?link=simpanUser">
                <div class="control-group">
                    <label class="control-label" for="username">Username : &nbsp;</label>
                    <input type="text" name="username">
                </div>
                <div class="control-group">
                    <label class="control-label" for="password">Password : &nbsp;</label>
                    <input type="password" name="password">
                </div>
                <div class="control-group">
                    <label class="control-label" for="email">Email : &nbsp;</label>
                    <input type="email" name="email">
                </div>
                <div class="control-group">
                    <label class="control-label" for="no_hp">No HP : &nbsp;</label>
                    <input type="text" name="no_hp" onkeypress="return isNumberKey(event)">
                </div>
                <div class="control-group form-inline">
                    <label class="control-label" for="akses">Akses : &nbsp;</label>
                    <label>
                        <select name="akses">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </label>
                </div>
                <div>
                    <button type="submit" class="btn btn-success"><i class="icon-ok"></i>&nbsp;Simpan</button>
                    <button type="button" class="btn btn-danger" onclick="window.location='index.php'"><i class="icon-remove"></i>&nbsp;Batal</button>
                </div>  
            </form> 
            <br>
            <form action="index.php?link=cari&&cari=masterUser" method="post" class="form-search" align="center">
                <input type="text" name="cari" class="search-query" placeholder="Cari user"> <button type="submit" class="btn"><i class="icon-search"></i>&nbsp;Cari</button>
            </form>
            <table border="1" class="table_muser btn-inverse" style="text-align: center">
                <tr>
                    <td>Username</td>
                    <td>Password</td>
                    <td>Email</td>
                    <td>No Telepon</td>
                    <td>Role</td>
                    <td colspan="2">Action</td>
                </tr>
                <?php 
                    include 'koneksi.php';
                    $query = mysql_query("SELECT * FROM `register` order by username asc");
                    while($data = mysql_fetch_array($query)) {
                ?>
                <tr class="btn-info">
                    <td><?php echo $data['username']; ?></td>
                    <td><?php echo $data['password']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['no_hp']; ?></td>
                    <td><?php echo $data['akses']; ?></td>
                    <td><a href="index.php?link=rubah&&edit=masterUser&&id=<?php echo $data['username']; ?>"><i class="icon-edit"></i></a></td>
                    <td><a href="administrator/delete.php?link=del_user&&username=<?php echo $data['username']; ?>"><i class="icon-remove"></i></a></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </body>  
</html>