<div class="span7 well-large">
    <h3 align="center">Change Password</h3><br>
    <form class="form_rpassword btn-primary form-horizontal form-actions" method="post" action="simpan.php?link=updateUser">
        <div class="control-group">
            <label class="control-label" for="oldpass">Old Password : &nbsp;</label>
            <input type="password" name="oldpass" required>
        </div>
        <div class="control-group">
            <label class="control-label" for="newpass">New Password : &nbsp;</label>
            <input type="password" name="newpass" required>
        </div>
        <div class="control-group">
            <label class="control-label" for="confirm">Confirm Password : &nbsp;</label>
            <input type="password" name="confirm" required>
        </div>
        <input type="hidden" name="akses" value="user">
            <button type="submit" class="btn btn-success"><i class="icon-ok"></i>&nbsp;Simpan</button>
            <button type="button" class="btn btn-danger" onclick="window.location='index.php'"><i class="icon-remove"></i>&nbsp;Batal</button>
    </form> 
</div>