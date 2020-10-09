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
    <div class="container" style="margin-top:40px">
    <div class="row rounded" style="background-color: #4c6371">
        <div class="col-md-3 col-sm-3 col-xs-6"></div>
            <div class="col-md-6 col-sm-6 col-xs-12 text-white rounded">
                <center>
                    <h1>Rekomendasi Metodologi</h1>
                </center>
                <hr>
                <?php
                    $metod=array(                   //1   2   3   4   5   6   7  
                        array("Increment"           ,"2","2","1","1","2","1"),
                        array("Vshaped"             ,"1","4","1","1","2","1"),
                        array("Spiral"              ,"1","3","2","1","1","1"),
                        array("RAD"                 ,"1","1","2","3","3","1"),
                        array("Prototyping"         ,"2","2","1","2","1","1"),
                        array("Scrum"               ,"1","2","2","2","3","1"),
                        array("Extreme Programming" ,"2","2","1","3","2","1")
                    );

                    $met=0;
                    $fls=0; 
                ?>
                <table style="width:100%">
                    <?php
                        while($met<6){
                            $ch=1;
                            $x=0;
                            while($ch<=6){
                                if($_GET[$ch]==$metod[$met][$ch]){
                                    $x++;
                                }
                                $ch++;
                            }
                            if($x>=4){
                    ?>
                    <tr>
                        <td>
                            <h4><img src="images/detail.png" style="width: 50px">&nbsp;<?php echo $metod[$met][0] ?></h4>
                        </td>
                        <td style="width: 20%">
                            <a href="detail.php?met=<?php echo $met ?>"  target="_blank" class="btn btn-info">Detail</a>
                        </td>
                            <?php 
                                $fls++;
                                }
                                $met++;
                                }
                                if($fls==0){
                            ?>
                        <td>
                            <div class="alert alert-danger" role="alert">
                                <h4 align="center">
                                <?php
                                    echo "Maaf Tidak ada metodologi yang cocok dengan spesifikasi anda";
                                    }
                                ?>
                                </h4>
                            </div>
                        </td>
                    </tr>
                    </table>
                    <br>
                <a href="index.php" class="btn btn-danger" style="float: right;">Back</a>
            <!-- form end-->
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6"></div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br>
    <!-- Footer -->
    <footer class="footer bg-primary text-white">
        <br>
        <center>Copyright &copy;2020 - Teknik Komputer All rights reserved.</center>
        <br>
    </footer>
</body>
</html>