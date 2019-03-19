
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
        width: 24cm;
        height: 29.7cm;
        margin: -10mm -0mm 10mm -20mm; 
        transform: scale(1.40,1.30);
        /* change the margins as you want them to be. */
        max-height: 100% !important;
        overflow: hidden !important;
        page-break-after: always;
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
    <li class="active"><a href="laporan.php">Laporan Bulanan</a></li>
    <li><a href="analisis.php">Analisis Tahunan</a></li>
    <li><a href="logout.php">Log Out</a></li>
  </ul>
     <div>
      <br />
        <form method="POST">
          <label>Bulan: </label><input type="number" min="1" max="12" name="month" step="1"/><label>Tahun: </label><input type="number" min="2017" max="2050" name="year" step="1"/>
          <input type="submit" value="Get Data" name="submit">
        </form>
      </div>
      </br>
      <div class="a">

      <table style="width:75%; border-collapse: collapse;
    " align="center" border="1">
            <thead>
              <tr>
              <th rowspan="2">Bil</th>
              <th width="2000" colspan="2">TARIKH</th>
              <th rowspan="2">AKTIVITI/PROGRAM</th>
              <th width="2000" colspan="2">MASA</th>
              <th rowspan="2">TEMPAT</th>
              <th rowspan="2">JUMLAH PENGGUNA</th>
              <th rowspan="2">TEMPAHAN OLEH</th>
              <th rowspan="2">ORGANISASI</th>
              <th rowspan="2">TINDAKAN/CATATAN</th>
              </tr>
              <tr>
              <th>MULA</th>
              <th>TAMAT</th>
              <th>MULA</th>
              <th>TAMAT</th>
              </tr>
            </thead>
            <tbody>
        <?php
        if (isset($_POST['submit'])){       
          require('conn.php');
          $count=1;
           $month=date($_POST['month']);
           $year=date($_POST['year']);



          switch ($month) {
            case "1":
              $monthn="JANUARI";
            break;
            case "2":
              $monthn="FEBRUARI";
            break;
            case "3":
              $monthn="MAC";
            break;
            case "4":
              $monthn="APRIL";
            break;
            case "5":
              $monthn="MEI";
            break;
            case "6":
              $monthn="JUN";
            break;
            case "7":
              $monthn="JULAI";
            break;
            case "8":
              $monthn="OGOS";
            break;
            case "9":
              $monthn="SEPTEMBER";
            break;
            case "10":
              $monthn="OKTOBER";
            break;
            case "11":
              $monthn="NOVEMBER";
            break;
            case "12":
              $monthn="DISEMBER";
            break;
            
            default:
              $monthn="";
            }





           //echo $month;
           //echo $year;
          //$sel_query="Select * from office ORDER BY id desc;";?>
           <h4 align="center">REKOD TEMPAHAN BILIK DAN RUANG PKG DALAT</h4>
<h5 align="center"><?php echo $monthn ?> <?php echo $year ?></h5>
          <?php 
          $count=1;
          
          $sel_query="SELECT * FROM book WHERE (MONTH(tm) = '$month' AND YEAR(tm) = '$year');";
          







          $result = mysqli_query($conn,$sel_query);
          while($row = mysqli_fetch_assoc($result)) { ?>

          <tr>
            <td width="5%" align="margin-left"><?php echo $count; ?></td>
            <td align="margin-left"><?php echo date('d-m-Y',strtotime($row['tm']));?></td>
            <td align="margin-left"><?php echo date('d-m-Y',strtotime($row['tk']));?></td>
          <td align="margin-left"><?php echo $row['atvt']?></td>
          <td align="margin-left"><?php echo date('h:i:s a',strtotime($row['mm']));?></td>
          <td align="margin-left"><?php echo date('h:i:s a',strtotime($row['mk']));?></td>
          <td align="margin-left"><?php if ($row['room'] == 0){ echo "";} else{echo "ZAMRUD";echo "</br>";}?><?php if ($row['room1'] == 0){ echo "";} else{echo "DELIMA";echo "</br>";}?><?php if ($row['room2'] == 0){ echo "";} else{echo "MUTIARA";echo "</br>";}?><?php if ($row['room3'] == 0){ echo "";} else{echo "PSP"; echo "</br>";}?></td>
          <td align="margin-left"><?php if ($row['zno'] == 0){ echo "";} else{echo $row['zno'];echo "</br>";}?><?php if ($row['dno'] == 0){ echo "";} else{echo $row['dno'];echo "</br>";}?><?php if ($row['mno'] == 0){ echo "";} else{echo $row['mno'];echo "</br>";}?><?php if ($row['pno'] == 0){ echo "";} else{echo $row['pno'];echo "</br>";}?></td>
          
          <td align="margin-left"><?php echo $row['name']?></td>
          
          <td align="margin-left"><?php echo $row['org']?></td>
          
          <td align="margin-left"><?php echo "";?></td>
          
          
          
        
          </tr>
          <?php $count++; } }?>
          </tbody>
            
      </table>
    </div>
</div>
<br />
        <input type="submit" onclick="window.print();" value=" Print " class="btn btn-primary" id="sub" name="submit"  style="margin-left: 50%;" /><br />
      </br>


  

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