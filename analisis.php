
<!DOCTYPE html>
<html>
<head>
  <?php
require('conn.php');
include("auth.php");
?>
  <title>PKG SYSTEM</title>

  <script type="text/javascript" charset="utf8" src="js/jquery.js"></script>



<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/hover.css">
  <link rel="stylesheet" href="css/bs.css">
  <script src="js/bs.js"></script>
   <script src="js/bootstrap-datepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="css/jquery.css"/>
   <script type="text/javascript" charset="utf8" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquerydt.js"></script>
<link rel="stylesheet" type="text/css" href="css/dt.css">
<script type="text/javascript" language="javascript" src="js/dt.js"></script>
<style type="text/css">

th, td {
    padding: 5px;
    font-size: 12px;
    text-align: left;
}

input:focus,
select:focus,
textarea:focus,
button:focus {
    outline: none;
}

@media print {
  body{

    visibility: hidden;
  
  }

  input{
    border: 0;
  }
  




    div.a{
      visibility: visible;
        width: 29cm;
        height: 25cm;
        margin: 0mm 0mm 0mm -50mm; 
        transform: scale(1.25,1.2);
        /* change the margins as you want them to be. */
        max-height: 100% !important;
        overflow: hidden !important;
        page-break-after: always;
        position:absolute;
   } 
}

</style>

</head>
<body>

<div class="container">
  <h2>PKG SYSTEM</h2>
  <ul class="nav nav-pills">
    <li><a href="permohonan.php">Permohonan</a></li>
    <li><a href="kelulusan.php">Diluluskan</a></li>
    <li><a href="ketidaklulusan.php">Tidak diluluskan</a></li>
    <li><a href="carian.php">Carian</a></li>
    <li><a href="laporan.php">Laporan Bulanan</a></li>
    <li class="active"><a href="analisis.php">Analisis Tahunan</a></li>
    <li><a href="logout.php">Log Out</a></li>
  </ul>
     <div>
        <form method="POST">
          <label>Tahun: </label><input type="number" min="2017" max="2050" name="year" step="1"/>
          <input type="submit" value="Get Data" name="submit">
        </form>
      </div>
      </br>
      <div class="a">

      <table style="width:75%; border-collapse: collapse;" align="center" border="1">
            <thead>
              <tr>
              <th rowspan="2">BULAN</th>
              <th colspan="5" style="text-align: center;">Nama Bilik</th>
              <th rowspan="2" style="text-align: center;">JUMLAH</th>
              </tr>
              <tr>
              <th style="text-align: center;">BILIK DELIMA</th>
              <th style="text-align: center;">BILIK ZAMRUD</th>
              <th style="text-align: center;">BILIK MUTIARA</th>
              <th style="text-align: center;">RUANG PSP</th>
              <th style="text-align: center;">LAIN-LAIN</th>
              </tr>
            </thead>
            <tbody>
        <?php
        if (isset($_POST['submit'])){       
          require('conn.php');
          //$count=1;
           $year=date($_POST['year']);
           //echo $month;
           //echo $year;
          //$sel_query="Select * from office ORDER BY id desc;";?>
           <h4 align="center">REKOD TEMPAHAN BILIK DAN RUANG PKG DALAT</h4>
<h5 align="center">JANUARI-DISEMBER <?php echo $year ?></h5>
          <?php 
          //$count=1;
          
          //$sel_query="SELECT * FROM book WHERE (MONTH(tm) = '$month' AND YEAR(tm) = '$year');";
          
          //$result = mysqli_query($conn,$sel_query);
          //while($row = mysqli_fetch_assoc($result)) { 
            ?>

          <tr id="Jan">
            <td width="5%" align="left"><?php echo "<b>JANUARI</b>"; ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '1' AND YEAR(tm) = '$year' AND cont = '2' AND room = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '1' AND YEAR(tm) = '$year' AND cont = '2' AND room1 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '1' AND YEAR(tm) = '$year' AND cont = '2' AND room2 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '1' AND YEAR(tm) = '$year' AND cont = '2' AND room3 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php echo "0";?></td>
            <td style="text-align: center;"><?php
            require('conn.php');
            $a="SELECT * FROM book WHERE (MONTH(tm) = '1' AND YEAR(tm) = '$year' AND cont = '2' AND room = '1')";
            $b="SELECT * FROM book WHERE (MONTH(tm) = '1' AND YEAR(tm) = '$year' AND cont = '2' AND room1 = '1')";
            $c="SELECT * FROM book WHERE (MONTH(tm) = '1' AND YEAR(tm) = '$year' AND cont = '2' AND room2 = '1')";
            $d="SELECT * FROM book WHERE (MONTH(tm) = '1' AND YEAR(tm) = '$year' AND cont = '2' AND room3 = '1')";
            $result1 = mysqli_query($conn,$a);
            $num_rows1 = mysqli_num_rows($result1);
             $result2 = mysqli_query($conn,$b);
            $num_rows2 = mysqli_num_rows($result2);
             $result3 = mysqli_query($conn,$c);
            $num_rows3 = mysqli_num_rows($result3);
             $result4 = mysqli_query($conn,$d);
            $num_rows4 = mysqli_num_rows($result4);

            $result=$num_rows1+$num_rows2+$num_rows3+$num_rows4;

            echo "$result \n";
            ?></td>
          </tr>
          <tr id="Feb">
            <td width="5%" align="left"><?php echo "<b>FEBRUARI</b>"; ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '2' AND YEAR(tm) = '$year' AND cont = '2' AND room = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '2' AND YEAR(tm) = '$year' AND cont = '2' AND room1 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '2' AND YEAR(tm) = '$year' AND cont = '2' AND room2 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '2' AND YEAR(tm) = '$year' AND cont = '2' AND room3 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php echo "0";?></td>
            <td style="text-align: center;"><?php
            require('conn.php');
            $a="SELECT * FROM book WHERE (MONTH(tm) = '2' AND YEAR(tm) = '$year' AND cont = '2' AND room = '1')";
            $b="SELECT * FROM book WHERE (MONTH(tm) = '2' AND YEAR(tm) = '$year' AND cont = '2' AND room1 = '1')";
            $c="SELECT * FROM book WHERE (MONTH(tm) = '2' AND YEAR(tm) = '$year' AND cont = '2' AND room2 = '1')";
            $d="SELECT * FROM book WHERE (MONTH(tm) = '2' AND YEAR(tm) = '$year' AND cont = '2' AND room3 = '1')";
            $result1 = mysqli_query($conn,$a);
            $num_rows1 = mysqli_num_rows($result1);
             $result2 = mysqli_query($conn,$b);
            $num_rows2 = mysqli_num_rows($result2);
             $result3 = mysqli_query($conn,$c);
            $num_rows3 = mysqli_num_rows($result3);
             $result4 = mysqli_query($conn,$d);
            $num_rows4 = mysqli_num_rows($result4);

            $result=$num_rows1+$num_rows2+$num_rows3+$num_rows4;

            echo "$result \n";
            ?></td>
          </tr>
          <tr id="March">
            <td width="5%" align="left"><?php echo "<b>MAC</b>"; ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '3' AND YEAR(tm) = '$year' AND cont = '2' AND room = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '3' AND YEAR(tm) = '$year' AND cont = '2' AND room1 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '3' AND YEAR(tm) = '$year' AND cont = '2' AND room2 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '3' AND YEAR(tm) = '$year' AND cont = '2' AND room3 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php echo "0";?></td>
            <td style="text-align: center;"><?php
            require('conn.php');
            $a="SELECT * FROM book WHERE (MONTH(tm) = '3' AND YEAR(tm) = '$year' AND cont = '2' AND room = '1')";
            $b="SELECT * FROM book WHERE (MONTH(tm) = '3' AND YEAR(tm) = '$year' AND cont = '2' AND room1 = '1')";
            $c="SELECT * FROM book WHERE (MONTH(tm) = '3' AND YEAR(tm) = '$year' AND cont = '2' AND room2 = '1')";
            $d="SELECT * FROM book WHERE (MONTH(tm) = '3' AND YEAR(tm) = '$year' AND cont = '2' AND room3 = '1')";
            $result1 = mysqli_query($conn,$a);
            $num_rows1 = mysqli_num_rows($result1);
             $result2 = mysqli_query($conn,$b);
            $num_rows2 = mysqli_num_rows($result2);
             $result3 = mysqli_query($conn,$c);
            $num_rows3 = mysqli_num_rows($result3);
             $result4 = mysqli_query($conn,$d);
            $num_rows4 = mysqli_num_rows($result4);

            $result=$num_rows1+$num_rows2+$num_rows3+$num_rows4;

            echo "$result \n";
            ?></td>
          </tr>
          <tr id="April">
            <td width="5%" align="left"><?php echo "<b>APRIL</b>"; ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '4' AND YEAR(tm) = '$year' AND cont = '2' AND room = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '4' AND YEAR(tm) = '$year' AND cont = '2' AND room1 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '4' AND YEAR(tm) = '$year' AND cont = '2' AND room2 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '4' AND YEAR(tm) = '$year' AND cont = '2' AND room3 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php echo "0";?></td>
            <td style="text-align: center;"><?php
            require('conn.php');
            $a="SELECT * FROM book WHERE (MONTH(tm) = '4' AND YEAR(tm) = '$year' AND cont = '2' AND room = '1')";
            $b="SELECT * FROM book WHERE (MONTH(tm) = '4' AND YEAR(tm) = '$year' AND cont = '2' AND room1 = '1')";
            $c="SELECT * FROM book WHERE (MONTH(tm) = '4' AND YEAR(tm) = '$year' AND cont = '2' AND room2 = '1')";
            $d="SELECT * FROM book WHERE (MONTH(tm) = '4' AND YEAR(tm) = '$year' AND cont = '2' AND room3 = '1')";
            $result1 = mysqli_query($conn,$a);
            $num_rows1 = mysqli_num_rows($result1);
             $result2 = mysqli_query($conn,$b);
            $num_rows2 = mysqli_num_rows($result2);
             $result3 = mysqli_query($conn,$c);
            $num_rows3 = mysqli_num_rows($result3);
             $result4 = mysqli_query($conn,$d);
            $num_rows4 = mysqli_num_rows($result4);

            $result=$num_rows1+$num_rows2+$num_rows3+$num_rows4;

            echo "$result \n";
            ?></td>
          </tr>
<tr id="May">
            <td width="5%" align="left"><?php echo "<b>MEI</b>"; ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '5' AND YEAR(tm) = '$year' AND cont = '2' AND room = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '5' AND YEAR(tm) = '$year' AND cont = '2' AND room1 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '5' AND YEAR(tm) = '$year' AND cont = '2' AND room2 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '5' AND YEAR(tm) = '$year' AND cont = '2' AND room3 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php echo "0";?></td>
            <td style="text-align: center;"><?php
            require('conn.php');
            $a="SELECT * FROM book WHERE (MONTH(tm) = '5' AND YEAR(tm) = '$year' AND cont = '2' AND room = '1')";
            $b="SELECT * FROM book WHERE (MONTH(tm) = '5' AND YEAR(tm) = '$year' AND cont = '2' AND room1 = '1')";
            $c="SELECT * FROM book WHERE (MONTH(tm) = '5' AND YEAR(tm) = '$year' AND cont = '2' AND room2 = '1')";
            $d="SELECT * FROM book WHERE (MONTH(tm) = '5' AND YEAR(tm) = '$year' AND cont = '2' AND room3 = '1')";
            $result1 = mysqli_query($conn,$a);
            $num_rows1 = mysqli_num_rows($result1);
             $result2 = mysqli_query($conn,$b);
            $num_rows2 = mysqli_num_rows($result2);
             $result3 = mysqli_query($conn,$c);
            $num_rows3 = mysqli_num_rows($result3);
             $result4 = mysqli_query($conn,$d);
            $num_rows4 = mysqli_num_rows($result4);

            $result=$num_rows1+$num_rows2+$num_rows3+$num_rows4;

            echo "$result \n";
            ?></td>
          </tr>

          <tr id="Jun">
            <td width="5%" align="left"><?php echo "<b>JUN</b>"; ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '6' AND YEAR(tm) = '$year' AND cont = '2' AND room = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '6' AND YEAR(tm) = '$year' AND cont = '2' AND room1 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '6' AND YEAR(tm) = '$year' AND cont = '2' AND room2 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '6' AND YEAR(tm) = '$year' AND cont = '2' AND room3 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php echo "0";?></td>
            <td style="text-align: center;"><?php
            require('conn.php');
            $a="SELECT * FROM book WHERE (MONTH(tm) = '6' AND YEAR(tm) = '$year' AND cont = '2' AND room = '1')";
            $b="SELECT * FROM book WHERE (MONTH(tm) = '6' AND YEAR(tm) = '$year' AND cont = '2' AND room1 = '1')";
            $c="SELECT * FROM book WHERE (MONTH(tm) = '6' AND YEAR(tm) = '$year' AND cont = '2' AND room2 = '1')";
            $d="SELECT * FROM book WHERE (MONTH(tm) = '6' AND YEAR(tm) = '$year' AND cont = '2' AND room3 = '1')";
            $result1 = mysqli_query($conn,$a);
            $num_rows1 = mysqli_num_rows($result1);
             $result2 = mysqli_query($conn,$b);
            $num_rows2 = mysqli_num_rows($result2);
             $result3 = mysqli_query($conn,$c);
            $num_rows3 = mysqli_num_rows($result3);
             $result4 = mysqli_query($conn,$d);
            $num_rows4 = mysqli_num_rows($result4);

            $result=$num_rows1+$num_rows2+$num_rows3+$num_rows4;

            echo "$result \n";
            ?></td>
          </tr>
          <tr id="July">
            <td width="5%" align="left"><?php echo "<b>JULAI</b>"; ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '7' AND YEAR(tm) = '$year' AND cont = '2' AND room = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '7' AND YEAR(tm) = '$year' AND cont = '2' AND room1 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '7' AND YEAR(tm) = '$year' AND cont = '2' AND room2 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '7' AND YEAR(tm) = '$year' AND cont = '2' AND room3 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php echo "0";?></td>
            <td style="text-align: center;"><?php
            require('conn.php');
            $a="SELECT * FROM book WHERE (MONTH(tm) = '7' AND YEAR(tm) = '$year' AND cont = '2' AND room = '1')";
            $b="SELECT * FROM book WHERE (MONTH(tm) = '7' AND YEAR(tm) = '$year' AND cont = '2' AND room1 = '1')";
            $c="SELECT * FROM book WHERE (MONTH(tm) = '7' AND YEAR(tm) = '$year' AND cont = '2' AND room2 = '1')";
            $d="SELECT * FROM book WHERE (MONTH(tm) = '7' AND YEAR(tm) = '$year' AND cont = '2' AND room3 = '1')";
            $result1 = mysqli_query($conn,$a);
            $num_rows1 = mysqli_num_rows($result1);
             $result2 = mysqli_query($conn,$b);
            $num_rows2 = mysqli_num_rows($result2);
             $result3 = mysqli_query($conn,$c);
            $num_rows3 = mysqli_num_rows($result3);
             $result4 = mysqli_query($conn,$d);
            $num_rows4 = mysqli_num_rows($result4);

            $result=$num_rows1+$num_rows2+$num_rows3+$num_rows4;

            echo "$result \n";
            ?></td>
          </tr>
          <tr id="August">
            <td width="5%" align="left"><?php echo "<b>OGOS</b>"; ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '8' AND YEAR(tm) = '$year' AND cont = '2' AND room = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '8' AND YEAR(tm) = '$year' AND cont = '2' AND room1 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '8' AND YEAR(tm) = '$year' AND cont = '2' AND room2 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '8' AND YEAR(tm) = '$year' AND cont = '2' AND room3 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php echo "0";?></td>
            <td style="text-align: center;"><?php
            require('conn.php');
            $a="SELECT * FROM book WHERE (MONTH(tm) = '8' AND YEAR(tm) = '$year' AND cont = '2' AND room = '1')";
            $b="SELECT * FROM book WHERE (MONTH(tm) = '8' AND YEAR(tm) = '$year' AND cont = '2' AND room1 = '1')";
            $c="SELECT * FROM book WHERE (MONTH(tm) = '8' AND YEAR(tm) = '$year' AND cont = '2' AND room2 = '1')";
            $d="SELECT * FROM book WHERE (MONTH(tm) = '8' AND YEAR(tm) = '$year' AND cont = '2' AND room3 = '1')";
            $result1 = mysqli_query($conn,$a);
            $num_rows1 = mysqli_num_rows($result1);
             $result2 = mysqli_query($conn,$b);
            $num_rows2 = mysqli_num_rows($result2);
             $result3 = mysqli_query($conn,$c);
            $num_rows3 = mysqli_num_rows($result3);
             $result4 = mysqli_query($conn,$d);
            $num_rows4 = mysqli_num_rows($result4);

            $result=$num_rows1+$num_rows2+$num_rows3+$num_rows4;

            echo "$result \n";
            ?></td>
          </tr>
<tr id="Sept">
            <td width="5%" align="left"><?php echo "<b>SEPTEMBER</b>"; ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '9' AND YEAR(tm) = '$year' AND cont = '2' AND room = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '9' AND YEAR(tm) = '$year' AND cont = '2' AND room1 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '9' AND YEAR(tm) = '$year' AND cont = '2' AND room2 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '9' AND YEAR(tm) = '$year' AND cont = '2' AND room3 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php echo "0";?></td>
            <td style="text-align: center;"><?php
            require('conn.php');
            $a="SELECT * FROM book WHERE (MONTH(tm) = '9' AND YEAR(tm) = '$year' AND cont = '2' AND room = '1')";
            $b="SELECT * FROM book WHERE (MONTH(tm) = '9' AND YEAR(tm) = '$year' AND cont = '2' AND room1 = '1')";
            $c="SELECT * FROM book WHERE (MONTH(tm) = '9' AND YEAR(tm) = '$year' AND cont = '2' AND room2 = '1')";
            $d="SELECT * FROM book WHERE (MONTH(tm) = '9' AND YEAR(tm) = '$year' AND cont = '2' AND room3 = '1')";
            $result1 = mysqli_query($conn,$a);
            $num_rows1 = mysqli_num_rows($result1);
             $result2 = mysqli_query($conn,$b);
            $num_rows2 = mysqli_num_rows($result2);
             $result3 = mysqli_query($conn,$c);
            $num_rows3 = mysqli_num_rows($result3);
             $result4 = mysqli_query($conn,$d);
            $num_rows4 = mysqli_num_rows($result4);

            $result=$num_rows1+$num_rows2+$num_rows3+$num_rows4;

            echo "$result \n";
            ?></td>
          </tr>
<tr id="Oct">
            <td width="5%" align="left"><?php echo "<b>OKTOBER</b>"; ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '10' AND YEAR(tm) = '$year' AND cont = '2' AND room = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '10' AND YEAR(tm) = '$year' AND cont = '2' AND room1 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '10' AND YEAR(tm) = '$year' AND cont = '2' AND room2 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '10' AND YEAR(tm) = '$year' AND cont = '2' AND room3 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php echo "0";?></td>
            <td style="text-align: center;"><?php
            require('conn.php');
            $a="SELECT * FROM book WHERE (MONTH(tm) = '10' AND YEAR(tm) = '$year' AND cont = '2' AND room = '1')";
            $b="SELECT * FROM book WHERE (MONTH(tm) = '10' AND YEAR(tm) = '$year' AND cont = '2' AND room1 = '1')";
            $c="SELECT * FROM book WHERE (MONTH(tm) = '10' AND YEAR(tm) = '$year' AND cont = '2' AND room2 = '1')";
            $d="SELECT * FROM book WHERE (MONTH(tm) = '10' AND YEAR(tm) = '$year' AND cont = '2' AND room3 = '1')";
            $result1 = mysqli_query($conn,$a);
            $num_rows1 = mysqli_num_rows($result1);
             $result2 = mysqli_query($conn,$b);
            $num_rows2 = mysqli_num_rows($result2);
             $result3 = mysqli_query($conn,$c);
            $num_rows3 = mysqli_num_rows($result3);
             $result4 = mysqli_query($conn,$d);
            $num_rows4 = mysqli_num_rows($result4);

            $result=$num_rows1+$num_rows2+$num_rows3+$num_rows4;

            echo "$result \n";
            ?></td>
          </tr>
          <tr id="Nov">
            <td width="5%" align="left"><?php echo "<b>NOVEMBER</b>"; ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '11' AND YEAR(tm) = '$year' AND cont = '2' AND room = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '11' AND YEAR(tm) = '$year' AND cont = '2' AND room1 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '11' AND YEAR(tm) = '$year' AND cont = '2' AND room2 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '11' AND YEAR(tm) = '$year' AND cont = '2' AND room3 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php echo "0";?></td>
            <td style="text-align: center;"><?php
            require('conn.php');
            $a="SELECT * FROM book WHERE (MONTH(tm) = '11' AND YEAR(tm) = '$year' AND cont = '2' AND room = '1')";
            $b="SELECT * FROM book WHERE (MONTH(tm) = '11' AND YEAR(tm) = '$year' AND cont = '2' AND room1 = '1')";
            $c="SELECT * FROM book WHERE (MONTH(tm) = '11' AND YEAR(tm) = '$year' AND cont = '2' AND room2 = '1')";
            $d="SELECT * FROM book WHERE (MONTH(tm) = '11' AND YEAR(tm) = '$year' AND cont = '2' AND room3 = '1')";
            $result1 = mysqli_query($conn,$a);
            $num_rows1 = mysqli_num_rows($result1);
             $result2 = mysqli_query($conn,$b);
            $num_rows2 = mysqli_num_rows($result2);
             $result3 = mysqli_query($conn,$c);
            $num_rows3 = mysqli_num_rows($result3);
             $result4 = mysqli_query($conn,$d);
            $num_rows4 = mysqli_num_rows($result4);

            $result=$num_rows1+$num_rows2+$num_rows3+$num_rows4;

            echo "$result \n";
            ?></td>
          </tr>
<tr id="Dec">
            <td width="5%" align="left"><?php echo "<b>DISEMBER</b>"; ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '12' AND YEAR(tm) = '$year' AND cont = '2' AND room = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '12' AND YEAR(tm) = '$year' AND cont = '2' AND room1 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '12' AND YEAR(tm) = '$year' AND cont = '2' AND room2 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (MONTH(tm) = '12' AND YEAR(tm) = '$year' AND cont = '2' AND room3 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php echo "0";?></td>
            <td style="text-align: center;"><?php
            require('conn.php');
            $a="SELECT * FROM book WHERE (MONTH(tm) = '12' AND YEAR(tm) = '$year' AND cont = '2' AND room = '1')";
            $b="SELECT * FROM book WHERE (MONTH(tm) = '12' AND YEAR(tm) = '$year' AND cont = '2' AND room1 = '1')";
            $c="SELECT * FROM book WHERE (MONTH(tm) = '12' AND YEAR(tm) = '$year' AND cont = '2' AND room2 = '1')";
            $d="SELECT * FROM book WHERE (MONTH(tm) = '12' AND YEAR(tm) = '$year' AND cont = '2' AND room3 = '1')";
            $result1 = mysqli_query($conn,$a);
            $num_rows1 = mysqli_num_rows($result1);
             $result2 = mysqli_query($conn,$b);
            $num_rows2 = mysqli_num_rows($result2);
             $result3 = mysqli_query($conn,$c);
            $num_rows3 = mysqli_num_rows($result3);
             $result4 = mysqli_query($conn,$d);
            $num_rows4 = mysqli_num_rows($result4);

            $result=$num_rows1+$num_rows2+$num_rows3+$num_rows4;

            echo "$result \n";
            ?></td>
          </tr>

<tr id="Total">
            <td width="5%" align="left"><?php echo "<b>JUMLAH</b>"; ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (YEAR(tm) = '$year' AND cont = '2' AND room = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (YEAR(tm) = '$year' AND cont = '2' AND room1 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (YEAR(tm) = '$year' AND cont = '2' AND room2 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php
            require('conn.php'); 
            $result = mysqli_query($conn, "SELECT * FROM book WHERE (YEAR(tm) = '$year' AND cont = '2' AND room3 = '1')");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows \n";
            ?></td>
            <td style="text-align: center;"><?php echo "0";?></td>
            <td style="text-align: center;"><?php
            require('conn.php');
            $a="SELECT * FROM book WHERE (YEAR(tm) = '$year' AND cont = '2' AND room = '1')";
            $b="SELECT * FROM book WHERE (YEAR(tm) = '$year' AND cont = '2' AND room1 = '1')";
            $c="SELECT * FROM book WHERE (YEAR(tm) = '$year' AND cont = '2' AND room2 = '1')";
            $d="SELECT * FROM book WHERE (YEAR(tm) = '$year' AND cont = '2' AND room3 = '1')";
            $result1 = mysqli_query($conn,$a);
            $num_rows1 = mysqli_num_rows($result1);
             $result2 = mysqli_query($conn,$b);
            $num_rows2 = mysqli_num_rows($result2);
             $result3 = mysqli_query($conn,$c);
            $num_rows3 = mysqli_num_rows($result3);
             $result4 = mysqli_query($conn,$d);
            $num_rows4 = mysqli_num_rows($result4);

            $result=$num_rows1+$num_rows2+$num_rows3+$num_rows4;

            echo "<b>$result</b> \n";
            ?></td>
          </tr>
















          <?php 
          //$count++; 
        } 
        //}
          ?>
          </tbody>
            
      </table>
    </div>
<br />
        <input type="submit" onclick="window.print();" value=" Print " class="btn btn-primary" id="sub" name="submit"  style="margin-left: 50%;" /><br/>
      <br/><br/>
   


  

</body>
<script type="text/javascript">
  $(document).ready(function() {
    $('table.display').DataTable();
} );

$("#datepicker").datepicker({
        viewMode: 'years',
         format: 'mm-yyyy'
    });
</script>
</html>