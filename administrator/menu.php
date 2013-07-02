<ul class="nav ukuran-font" >
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Master <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="?link=master_user">Master User</a></li>
            <li><a href="?link=master_paket">Master Paket Training</a></li>
            <li><a href="?link=master_jadwal">Master Jadwal</a></li>
        </ul>
    </li>
    <li><a href="?link=daftar_peserta">Daftar Peserta</a></li>
    <li><a href="?link=approval">Approval</a></li>
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