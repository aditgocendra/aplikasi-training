<ul class="nav ukuran-font" >
    <li><a href="?link=informasi_training">Informasi Training</a></li>
    <li><a href="?link=daftar_training">Daftar Training</a></li>
    <li><a href="?link=peserta">Peserta Training</a></li>
    <li><a href="?link=about_us">About Us</a></li>
</ul>

<ul class="nav pull-right ukuran-font">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
            <?php
            echo "$_SESSION[username]";
            ?>
            <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
            <li><a href="?link=rubah_password">Rubah Password</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </li>
</ul>