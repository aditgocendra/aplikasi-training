<html lang="en">   
    <head>   
        <meta charset="utf-8">   
        <title>Twitter Bootstrap Version2.0 default form layout example</title>   
        <meta name="description" content="Twitter Bootstrap Version2.0 default form layout example from w3resource.com.">   
        <link href="twitter-bootstrap-v2/docs/assets/css/bootstrap.css" rel="stylesheet">  
    </head>  
    <body>
        <div class="span7 well-large">
            <h3 align="center">Register Account</h3><br>
            <form class="form_register btn-primary form-horizontal form-actions" method="post" action="simpan.php?link=saveRegister">
                <div class="control-group">
                    <label class="control-label" for="nama_lengkap">Nama Lengkap : &nbsp;</label>
                    <input type="text" name="nama_lengkap">
                </div>
                <div class="control-group">
                    <label class="control-label" for="username">Username : &nbsp;</label>
                    <input type="text" name="username">
                </div>
                <div class="control-group">
                    <label class="control-label" for="password">Password : &nbsp;</label>
                    <input type="password" name="password">
                </div>
                <div class="control-group">
                    <label class="control-label" for="confirm">Confirm : &nbsp;</label>
                    <input type="password" name="confirm">
                </div>
                <div class="control-group">
                    <label class="control-label" for="email">Email : &nbsp;</label>
                    <input type="email" name="email">
                </div>
                <div class="control-group">
                    <label class="control-label" for="no_hp">No HP : &nbsp;</label>
                    <input type="text" name="no_hp" onkeypress="return isNumberKey(event)">
                </div><br>
                <input type="hidden" name="akses" value="user">
                    <button type="submit" class="btn btn-success"><i class="icon-ok"></i>&nbsp; Simpan</button>
                    <button type="button" class="btn btn-danger" onclick="window.location='index.php'"><i class="icon-remove"></i>&nbsp; Batal</button>
            </form> 
        </div>
    </body>  
</html>