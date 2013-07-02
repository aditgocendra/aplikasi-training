<ul class="nav ukuran-font" >
    <li>
        <a href="?link=informasi_training">Informasi Training</a>
    </li>
    <li>
        <a href="?link=peserta">Peserta Training</a>
    </li>
    <li>
        <a href="?link=register">Register</a>
    </li>
    <li><a href="?link=about_us">About Us</a></li>
</ul>

<ul class="nav pull-right ukuran-font">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle ukuran-font" data-toggle="dropdown">Login<b class="caret"></b></a>

        <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
            <!-- Login form here -->
            <form action="cek_login.php" method="post" accept-charset="UTF-8">
                <label class="control-label" for="username">Username</label>
                <input type="text" name="username" id="username" style="margin-bottom: 15px;" size="30" placeholder="username" />
                <label class="control-label" for="password">Password</label>
                <input type="password" name="password" id="password" style="margin-bottom: 15px;" size="30" placeholder="password"/>
                <input id="remember_me" style="float: left; margin-right: 10px;" type="checkbox" name="remember_me" value="1" />
                <label class="string optional" for="user_remember_me"> Remember me</label>
                <input class="btn btn-primary" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In" />
            </form>
        </div>

    </li>
</ul>