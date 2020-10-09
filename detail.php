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
.thumbnail{
 overflow: hidden;
}
img{
 -webkit-transition:all 0.5s ease;
 -moz-transition:all 0.5s ease;
 -ms-transition:all 0.5s ease;
 o-transition:all 0.5s ease;
 transition:all 0.5s ease;
}
img:hover{
 transform: scale(1.2);
 -webkit-transform: scale(1.2);
 -moz-transform: scale(1.2);
 -ms-transform: scale(1.2);
 -o-transform: scale(1.2);
}
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
	<?php
				include'metodologi.php';
				$met= $_GET['met'];
				$detail = new metodologi($met);
	?>
    <div class="container" style="margin-top:20px">
        <div class="row text-white rounded" style="background-color: #112d3d">
            <div class="col-md-6 col-sm-3 col-xs-12">
				<br>
                <h2>&nbsp;&nbsp;Metodologi <?php echo $detail->judul;?></h2><br>
                <center>
                    <div class="thumbnail">
                        <img class="img-responsive" src="images/<?php echo $detail->gambar; ?>" width="500px" height="300px">
                        <i>Gambar Metodologi <?php echo $detail->judul;?></i>
                    </div>
                </center>
            </div>
			
            <div class="col-md-6 col-sm-4 col-xs-12 text-white">
                <br>
                <h3>Pengertian</h3>
                <p> <?php echo $detail->pengertian; ?></p>
				
				<h3>Kelebihan</h3>
				<ul> <?php echo $detail->kelebihan; ?></ul>
				<h3>Kelemahan</h3>
				<ul><?php echo $detail->kelemahan; ?></ul>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <!-- Footer -->
    <footer class="footer bg-primary text-white" > 
        <br>
        <center>Copyright &copy;2020 - Teknik Komputer All rights reserved.</center>
        <br>
	 </footer>
</body>
</html>