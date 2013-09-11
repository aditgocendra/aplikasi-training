<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>PT. Jelajah Media Informatika</title>
            <link rel="shortcut icon" href="images/ico.png"></link>
            <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
                <link href="css/app.css" rel="stylesheet" media="screen">
                    <style type="text/css">
                        body{
                            background-image: url("images/back.png");
                            background-attachment: fixed; 
                        }
                        .table_muser{
                            width: 500px;
                            height: 250px;
                        }
                        .b_atas{
                            -webkit-box-shadow: 3px 3px 3px 3px black;
                            -webkit-border-radius: 2px;
                            margin: 40px auto;
                            width: 900px;
                            text-align: left;
                            vertical-align: middle;
                        }
                        .tabel_admin{
                            -webkit-box-shadow: 2px 2px 2px 2px #000000;
                            -webkit-border-radius: 5px;
                            width: 400px;
                            height: 150px;
                            margin: 0 auto;
                            text-align: left;
                            vertical-align: middle;
                            background-color: #7ab5d3;
                        }
                        .form_jadwal{
                            -webkit-box-shadow: 2px 2px 2px 2px #000000;
                            -webkit-border-radius: 5px;
                            width: 300px;
                            height: 210px;
                            margin: 0 auto;
                            text-align: left;
                            vertical-align: middle;
                            background-color: #7ab5d3;
                            text-align: center;
                        }
                        .form_register{
                            -webkit-box-shadow: 2px 2px 2px 2px #000000;
                            -webkit-border-radius: 5px;
                            width: 400px;
                            height: 430px;
                            margin: 0 auto;
                            text-align: left;
                            vertical-align: middle;
                            background-color: #7ab5d3;
                            text-align: center;
                        }
                        .form_rjadwal{
                            -webkit-box-shadow: 2px 2px 2px 2px #000000;
                            -webkit-border-radius: 5px;
                            width: 300px;
                            height: 300px;
                            margin: 0 auto;
                            text-align: left;
                            vertical-align: middle;
                            background-color: #7ab5d3;
                            text-align: center;
                        }
                        .form_rpassword{
                            -webkit-box-shadow: 2px 2px 2px 2px #000000;
                            -webkit-border-radius: 5px;
                            width: 400px;
                            height: 200px;
                            margin: 0 auto;
                            text-align: left;
                            vertical-align: middle;
                            background-color: #7ab5d3;
                            text-align: center;
                        }
                        .form_user{
                            -webkit-box-shadow: 2px 2px 2px 2px #000000;
                            -webkit-border-radius: 5px;
                            width: 400px;
                            height: 300px;
                            margin: 0 auto;
                            text-align: left;
                            vertical-align: middle;
                            background-color: #7ab5d3;
                            text-align: center;
                        }
                        .form_paket{
                            -webkit-box-shadow: 2px 2px 2px 2px #000000;
                            -webkit-border-radius: 5px;
                            width: 400px;
                            height: 280px;
                            margin: 0 auto;
                            text-align: left;
                            vertical-align: middle;
                            background-color: #7ab5d3;
                            text-align: center;
                        }
                        .tabel_jadwal{
                            -webkit-box-shadow: 2px 2px 2px 2px red;
                            -webkit-border-radius: 5px;
                            width: 500px;
                            height: 90px;
                            margin: 0 auto;
                            text-align: left;
                            vertical-align: middle;
                            background-color: navajowhite;
                        }
                        .text_banner{
                            padding-top: 20px;
                            padding-left: 20px;
                            font-size: 35px;
                            font-style: oblique;
                        }

                        .body{
                            padding: 1em;
                            margin: 0 auto;
                            margin-top: -5px;
                            -webkit-box-shadow: 0px 3px 3px 3px black;
                            -webkit-border-radius: 6px;
                            width: 868px;
                            height: 1000px;
                            background-color: #fff;
                        }
                        .samping{
                            margin-top: 20px;
                            -webkit-box-shadow: 1px 1px 1px 1px black;
                            -webkit-border-radius: 2px;
                            width: 200px;
                            height: 140px;
                            background-color: #ffffff;
                            padding: 10px 15px 10px;
                            font-size: 14px;
                        }


                        .konten{
                            margin-top: 20px;
                            margin-left: 5px;
                            width: 610px;
                            height: 975px;
                            background-color: #ffffff;
                            padding: 3px 5px 15px 15px;
                            -webkit-border-radius: 5px;
                            -webkit-box-shadow: 1px 1px 1px 1px black;
                            background-image: url("images/konten.png");
                        }
                        .menu{
                            margin-top: 5px;
                            -webkit-box-shadow: 1px 1px 1px 1px black;
                            -webkit-border-radius: 2px;
                            width: 200px;
                            height: 200px;
                            background-color: #ffffff;
                            padding: 10px 15px 10px;
                        }
                        .menu2{
                            margin-top: 5px;
                            -webkit-box-shadow: 1px 1px 1px 1px black;
                            -webkit-border-radius: 2px;
                            width: 200px;
                            height: 300px;
                            background-color: #ffffff;
                            padding: 10px 15px 10px;
                        }
                        .left{
                        }
                        .navbar-inverse .baju {
                            background-color: red;
                        }
                    </style>
                    <script src="js/jquery.js"></script>
                    <script src="js/bootstrap.min.js"></script>
                    <script src="js/bootstrap-datepicker.js"></script>
                    <script src="js/bootstrap-carousel.js"></script>
                    <script language=Javascript>
                        function isNumberKey(evt)
                        {
                            var charCode = (evt.which) ? evt.which : event.keyCode
                            if (charCode > 31 && (charCode < 48 || charCode > 57))

                            return false;
                        return true;
                    }
                    </script>
                    </head>
                    <body>
                        <div class="b_atas">
                            <div class="navbar navbar-inverse baju navbar-fixed-top">
                                <div class="navbar-inner">
                                    <div class="container">
                                        <a href="index.php"><img src="images/perusahaan.png" class="brand" /></a>
                                        <?php
                                        session_start();
                                        if (empty($_SESSION[akses])) {
                                            include "menu.php";
                                        } else {

                                            if ($_SESSION[akses] == "admin") {
                                                include "administrator/menu.php";
                                            } else {
                                                include "user/menu.php";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <table>
                                <tr>
                                    <td style="vertical-align: top">
                                        <div class="left">
                                            <div class="samping btn-info">
                                                <table style="font-size: 11px">
                                                    <tr><td>PT. JMI</td></tr>
                                                    <tr><td>(021) 8798 4412</td></tr>
                                                    <tr><td>www.mediainfo.co.id</td></tr>
                                                    <tr><td>Jl. Pangkalan Jati II, No.19</td></tr>
                                                    <tr><td>Jatiwaringin - Jakarta Timur</td></tr>
                                                    <tr><td>13620</td></tr>
                                                </table>
                                            </div>
                                            <div class="menu btn-info">
                                                <?php include 'calendar.php'; ?>
                                            </div>
                                            <div class="menu2 btn-info">
                                                <div align="center" class="btn-inverse">Daftar Peserta</div>
                                                <div class="btn-inverse"><marquee direction="up" scrolldelay="150"><?php include"daftar_peserta.php"; ?></marquee></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td style = "vertical-align: top">
                                        <div class = "konten">
                                            <div class = "container-fluid">
                                                <div>
                                                    <?php
                                                    $link = $_GET['link'];
                                                    switch ($link) {
                                                        case "pendaftaran":
                                                            include "administrator/pendaftaran.php";
                                                            break;
                                                        case "master_user":
                                                            include "administrator/masterUser.php";
                                                            break;
                                                        case "master_jadwal":
                                                            include "administrator/masterJadwal.php";
                                                            break;
                                                        case "master_paket":
                                                            include "administrator/masterPaket.php";
                                                            break;
                                                        case "about_us":
                                                            include "administrator/aboutUs.php";
                                                            break;
                                                        case "paket_training":
                                                            include "user/paket_training.php";
                                                            break;
                                                        case "daftar_training":
                                                            include "user/daftar_training.php";
                                                            break;
                                                        case "informasi_training":
                                                            include "informasi_training.php";
                                                            break;
                                                        case "daftar_peserta":
                                                            include "administrator/daftar_peserta.php";
                                                            break;
                                                        case "cari":
                                                            include "administrator/cari.php";
                                                            break;
                                                        case "rubah":
                                                            include "administrator/rubah.php";
                                                            break;
                                                        case "approval":
                                                            include "administrator/approval.php";
                                                            break;
                                                        case "peserta":
                                                            include "user/peserta.php";
                                                            break;
                                                        case "register":
                                                            include "register.php";
                                                            break;
                                                        case "info":
                                                            include "register.php";
                                                            break;
                                                        case "rubah_password":
                                                            include "rubah_password.php";
                                                            break;
                                                        case "error2":
                                                            echo "<script> alert('Tidak dapat mengakses halaman sebelum login..!!'); </script>";
                                                            break;
                                                        case "error":
                                                            echo "<script> alert('Silahkan masukkan username dan password anda dengan benar..!!'); </script>";
                                                            break;
                                                        case "sukses_register":
                                                            echo "<script> alert('Anda berhasil mendaftarkan diri, silahkan melakukan login'); </script>";
                                                            break;
                                                        case "":
                                                            include "administrator/aboutUs.php";
                                                            break;
                                                    }
                                                    ?>
                                                </div>
                                            </div> 
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                            <footer>
                                <div class="footer btn-info" style="text-align: center; text background-size: 100%; padding-top: 0px;">
                                   <div class="container narrow row-fluid">
                                       <div>
                                          <p>
                                            Copyright 2013 By <a href="http://dadangiswanto.blogspot.com">Dadang Iswanto</a> | All rights reserved: <a href=www.mediainfo.co.id>mediainfo.co.id</a>
                                        </p>
                                      </div>
                                   </div>
                                </div>
                            </footer>
                    </body>

                    <script>
                    var nowTemp = new Date();
                    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

                    var checkin = $('#dpd1').datepicker({
                        onRender: function(date) {
                            return date.valueOf() < now.valueOf() ? 'disabled' : '';
                        }
                    }).on('changeDate', function(ev) {
                        if (ev.date.valueOf() > checkout.date.valueOf()) {
                            var newDate = new Date(ev.date)
                            newDate.setDate(newDate.getDate() + 1);
                            checkout.setValue(newDate);
                        }
                        checkin.hide();
                        $('#dpd2')[0].focus();
                    }).data('datepicker');
                    var checkout = $('#dpd2').datepicker({
                        onRender: function(date) {
                            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
                        }
                    }).on('changeDate', function(ev) {
                        checkout.hide();
                    }).data('datepicker');
                    </script>
                    </html>


