
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
  <link rel="stylesheet" type="text/css" href="css/jquery.css"/>
   <script type="text/javascript" charset="utf8" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquerydt.js"></script>
<link rel="stylesheet" type="text/css" href="css/dt.css">
<script type="text/javascript" language="javascript" src="js/dt.js"></script>


</head>
<body>

<div class="container">
  <h2>PKG SYSTEM</h2>
  <ul class="nav nav-pills">
    <li><a data-toggle="pill" href="permohonan.php">Permohonan</a></li>
    <li><a data-toggle="pill" href="kelulusan.php">Diluluskan</a></li>
    <li><a data-toggle="pill" href="ketidaklulusan.php">Tidak diluluskan</a></li>
    <li class="active"><a data-toggle="pill" href="carian.php">Carian</a></li>
    <li><a href="laporan.php">Laporan Bulanan</a></li>
    <li><a href="analisis.php">Analisis Tahunan</a></li>
    <li><a href="logout.php">Log Out</a></li>
  </ul>
  
  <div class="tab-content">
<div id="menu4" class="tab-pane fade in active">
      <h2>Carian</h2>

      <div>
        <form method="POST">
          <label>Tarikh Masuk: </label><input type="date" name="tm">
          <label>Tarikh Keluar: </label><input type="date" name="tk">
          <input type="submit" value="Get Data" name="submit">
        </form>
      </div>



      <table id="table_id" class="display" width="100%" cellspacing="0">
            <thead>
            <th>Bil</th>
              <th>Nama</th>
              <th>Organisasi</th>
              <th>Aktiviti</th>
              <th>Maklumat Tarikh/Masa</th>
              <th>Senarai Bilik</th>
               <th><font color='Red'>Menu</font></th>
              

            </thead>
            <tbody>
        <?php       
          if (isset($_POST['submit'])){     
          require('conn.php');    
            $tm=date('Y-m-d',strtotime($_POST['tm']));
            $tk=date('Y-m-d',strtotime($_POST['tk']));
          $count=1;
          //$sel_query="Select * from office ORDER BY id desc;";
          $sel_query="SELECT * FROM book WHERE tm<='$tk' and tk>='$tm' ORDER BY id DESC;";
          
          
          $result = mysqli_query($conn,$sel_query);
          while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
          <td width="5%" align="center"><?php echo $count; ?></td>
          <td align="center"><?php echo $row['name']?></td>
          <td align="center"><?php echo $row['org']?></td>
          <td align="center"><?php echo $row['atvt']?></td>
          <td align="center"><?php echo date('d-m-Y',strtotime($row['tm']));?><?php echo " - ";echo date('d-m-Y',strtotime($row['tk'])); echo "</br>";?><?php echo date('h:i:s a',strtotime($row['mm']))?><?php echo " - "; echo date('h:i:s a',strtotime($row['mk'])); echo "</br>";?></td>
          <td align="center"><?php if ($row['room'] == 1){echo '<img border="0" align="top" src="image/Z.png" width="100" height="30" ></br>';}?>
          <?php if ($row['room1'] == 1){echo '<img border="0" align="top" src="image/D.png" width="100" height="30" ></br>';}?>
          <?php if ($row['room2'] == 1){echo '<img border="0" align="top" src="image/M.png" width="100" height="30" ></br>';}?>
          <?php if ($row['room3'] == 1){echo '<img border="0" align="top" src="image/P.png" width="100" height="30" ></br>';}?>
            



          </td>
        
           <td align="center"> <a href="file.php?id=<?php echo $row["id"]; ?>" target="_blank"  title="Print Borang"><img border="0" align="top" src="image/print.png" width="28" height="28" style="padding:4px;"></a>

         <a href="edit.php?id=<?php echo $row["id"]; ?>"  title="Edit Borang"><img border="0" align="top" src="image/edit.png" width="28" height="28" style="padding:4px;"></a>
          <a href="delete.php?id=<?php echo $row["id"]; ?> " onclick="return confirm('Are you sure you want to delete this item?');"  title="Delete Borang"><img border="0" align="top" src="image/bin.png" width="28" height="28" style="padding:4px;"></a></td></tr>
          <?php $count++; } } ?>
          </tbody>
            
      </table>
    </div>


  </div>
</div>

</body>
<script type="text/javascript">
	$(document).ready(function() {
    $('table.display').DataTable();
} );


</script>
</html>