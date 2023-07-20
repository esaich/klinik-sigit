<?php
session_start();
//DATABASE
include_once 'config/koneksi.php';
include_once 'config/function.php';


$obj = new Log();

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $ceklogin = $obj->Login($username, $password);
    if($ceklogin) {
        echo '<script>window.location="index.php"</script>';
    }else {
        echo '<script>alert("Username atau Password salah")</script>';
    
    }
}



?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,500;1,400;1,500;1,700&family=Quicksand:wght@500&display=swap"
        rel="stylesheet">
    <title>Data/Input Pasien</title>

  </head>
  <body>
    <br><br><br><br><br><br><br><br>
    <!--HARI & JAM-->
    <h6 style="color:FFA41B; text-align: center; " id="date" ></h6>
    <h6 style="color:FFA41B; text-align: center;" id="clock" ></h6>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="text-center"><strong> Login Admin </strong></h3><hr>
                            </div>
                        </div>
                    <div class="card-body">
                    <form action="" method="POST">
                        <label>Username </label>
                        <input type="text" name="username" required placeholder="Username Admin" class="form-control">

                        <label>Password </label>
                        <input type="password" name="password" required placeholder="Password Admin" class="form-control"><br>

                        <!--<input type="submit" name="login" value="Login"  class="btn btn-warning form-control">-->
                        <button type="submit" name="login" value="Login" class="button form-control">
                        Login
                        </button>
                    </form>
                    
                    </div>
                    <h6 class="text-center"> Kelompok 8&nbsp;&nbsp;&nbsp; || &nbsp;&nbsp;&nbsp;<i>Final Project</i><b> © 2022</b></h6>
                </div>
            </div>
        </div>
    </div>
    


    
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script>
            //SET TANGGAL
            var date = new Date();
            var tahun = date.getFullYear();
            var bulan = date.getMonth();
            var tanggal = date.getDate();
            var hari = date.getDay();
            var jam = date.getHours();
            var menit = date.getMinutes();
            var detik = date.getSeconds();
            switch(hari) {
            case 0: hari = "Minggu"; break;
            case 1: hari = "Senin"; break;
            case 2: hari = "Selasa"; break;
            case 3: hari = "Rabu"; break;
            case 4: hari = "Kamis"; break;
            case 5: hari = "Jum'at"; break;
            case 6: hari = "Sabtu"; break;
            }
            switch(bulan) {
            case 0: bulan = "Januari"; break;
            case 1: bulan = "Februari"; break;
            case 2: bulan = "Maret"; break;
            case 3: bulan = "April"; break;
            case 4: bulan = "Mei"; break;
            case 5: bulan = "Juni"; break;
            case 6: bulan = "Juli"; break;
            case 7: bulan = "Agustus"; break;
            case 8: bulan = "September"; break;
            case 9: bulan = "Oktober"; break;
            case 10: bulan = "November"; break;
            case 11: bulan = "Desember"; break;
            }
            var tampilTanggal = "" + hari + ", " + tanggal + " " + bulan + " " + tahun + "";

            document.getElementById("date").innerHTML = tampilTanggal;

            //SET JAM
            function updateClock(){
                const now = new Date();
                const hours = now.getHours();
                const minutes = now.getMinutes();
                const second = now.getSeconds();
                const clock = document.getElementById("clock");
                clock.textContent = ` Jam: ${hours}:${minutes}:${second}`;
            }

            setInterval(updateClock, 1000);
        </script>
  </body>
</html>