<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sekolah Vokasi IPB</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
    <!-- Icons -->
    <link rel="icon" type="image/png" href="images/logo_ipb.png">
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link rel="stylesheet" type="text/css" href="vendor/css/search-box.css">
    <link rel="stylesheet" type="text/css" href="vendor/css/search-box2.css">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
var x = new Date()

function display_c(){
x.setSeconds(x.getSeconds() + 1);
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function padzero(num,count) {
var num = num + '';
while(num.length < count) {
num = "0" + num;
}
return num;
}

function display_ct() {
var weekday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
var monthname=new Array("Jan","Feb","March","April","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec")

var y;

y = monthname[x.getMonth()] + " "
y = y + padzero(x.getDate(), 2)
y = y + ", "
y = y + x.getFullYear()
y = y + " "
y = y + padzero(x.getHours(), 2)
y = y + ":"
y = y + padzero(x.getMinutes(), 2)
y = y + ":"
y = y + padzero(x.getSeconds(), 2)

document.getElementById('ct').innerHTML = y
tt=display_c();
}
</script>
<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  text-align: center;
}
</style>
</head>
<body onload=display_ct(); style="background-color: #002235">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary static-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="logoipb">
            SiCeMet
        </a>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item text-white">
                <h5><span id='ct' ></span></h5>
            </li>
        </ul>
    </div>
    </div>
    </nav>

    <!--container-->
    <div class="container" style="margin-top:20px">
        <div class="row" style="background-color: #112d3d">
            <div class="col-md-6 col-sm-3 col-xs-12">
                <img src="images/bg.png">
            </div>
            <div class="col-md-6 col-sm-4 col-xs-12 text-white">
                <br><br><br><br><br><br><br><br>
                <h2>SiCeMet merupakan aplikasi simulasi untuk cek metodologi agar sesuai dengan karakteristik proyek dalam pengembangan sistem</h2>
            </div>
        </div>
    <div class="row rounded" style="background-color: #4c6371">
        <div class="col-md-3 col-sm-3 col-xs-6"></div>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- form start-->
            <form action="hasil.php" class="form-conatiner text-white">
                <center>
                    <h1>Kenali Projek Anda</h1>
                    <h6>Isi Sesuai Keperluan</h6>
                </center>
                <hr>
                <div class="form-group">
                    <p>Kebutuhan Awal
                        <select class="form-control" name="1">
                            <option value="#">---Pilih---</option>
                            <option value="1">Dapat Dijelaskan</option>
                            <option value="2">Belum jelas</option>
                        </select>
                    </p>
                </div>
                <div class="form-group">
                    <p>Waktu Delivery
                        <select class="form-control" name="2">
                            <option value="">---Pilih---</option>
                            <option value="1">Kurang dari 1 bulan</option>
                            <option value="2">1-3 bulan</option>
                            <option value="3">4-6 bulan</option>
                            <option value="4">6-12 bulan</option>
                        </select>
                    </p>
                </div>
                <div class="form-group">
                    <p>Jumlah Tim (SDM)
                        <select class="form-control" name="3">
                            <option value="">---Pilih---</option>
                            <option value="1">Kurang dari 12 orang</option>
                            <option value="2">Lebih dari 12 orang</option>
                        </select>
                    </p>
                </div>
                <div class="form-group">
                    <p>Keterampilan Tim
                        <select class="form-control" name="4">
                            <option value="">---Pilih---</option>
                            <option value="1">Tidak Berpengalaman</option>
                            <option value="2">Campur</option>
                            <option value="3">Berpengalaman</option>
                        </select>
                    </p>
                </div>
                <div class="form-group">
                    <p>Kompleksitas Project
                        <select class="form-control" name="5">
                            <option value="">---Pilih---</option>
                            <option value="1">Sederhana</option>
                            <option value="2">Kompleks</option>
                            <option value="3">Sangat Kompleks</option>
                        </select>
                    </p>
                </div>
                <div class="form-group">
                    <p>Kontak Langsung Client
                        <select class="form-control" name="6">
                            <option value="">---Pilih---</option>
                            <option value="1">Ya</option>
                            <option value="2">Tidak</option>
                        </select>
                    </p>
                </div>
                  <input type="submit" class="btn btn-success btn-block rounded" name="Choices" value="Submit">
                  <input type="reset" class="btn btn-danger btn-block rounded" name="submit" value="Reset">
                  <br>
              </form>
            <!-- form end-->
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6"></div>
        </div>
    </div>
    <br><br><br><br>
    <!-- Footer -->
    <footer class="footer bg-primary text-white">
        <br>
        <center>Copyright &copy;2020 - Teknik Komputer All rights reserved.</center>
        <br>
    </footer>
</body>
</html>