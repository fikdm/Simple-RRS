<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	</script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <style type="text/css">
    th, td {
    padding: 5px;
    font-size: 12px;
    text-align: left;
}
</style>
<link rel="icon" href="image/icon.png" type="image/png" sizes="16x16">
<title>Sila Edit Maklumat Berkenaan</title>
<?php
require('conn.php');
					include("auth.php");
					$id=$_REQUEST['id'];
					//if($_SESSION['username'] == 'ppd_admin'){
function valid($id, $name, $org, $nop, $nob, $em, $atvt, $tm, $tk, $mm, $mk, $room, $room1, $room2, $zno, $zcm, $dno, $dcm, $mno, $mcm )
{
?>
<title>Log Surat</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/table.css"/>

<?php

if (isset($error))
{
echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>
</head>
<body>
	
			
			<form action="" method="post">
		
	
			<h2 style="font-family:helvetica; padding-left: 12.5%;">Sila Edit Maklumat Berkenaan</h2>
		

			<table style="width:75%; border-collapse: collapse;
    " align="center" border="1">
    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
  <tr>
    <td><label class="form-label">Nama Pemohon</label></td>
    <td colspan="3"><input type="text" name="name" id="norujukan" class="form-control" required="required" autocomplete="off" value="<?php echo $name; ?>"/></td>
  </tr>
  <tr>
    <td><label class="form-label">Organisasi</label></td>
    <td colspan="3"><input type="text" name="org" id="norujukan" class="form-control" required="required" autocomplete="off" placeholder="KPM/BTP/JPN/PPD/SEK/UNIT/AGEN" value="<?php echo $org; ?>"/></td>
  </tr>
  <tr>
    <td>Telefon</td>
    <td>Pejabat:<input type="text" name="nop" id="norujukan" class="form-control" required="required" autocomplete="off" placeholder="999" value="<?php echo $nop; ?>"/></td>
    <td>T/Bimbit:<input type="text" name="nob" id="norujukan" class="form-control" required="required" autocomplete="off" placeholder="999" value="<?php echo $nob; ?>"/></td>
    <td>Email:<input type="text" name="em" id="norujukan" class="form-control" required="required" autocomplete="off" placeholder="999" value="<?php echo $em; ?>"/></td>
  </tr>
</table>


<table style="width:75%; border-collapse: collapse;
    " align="center" border="1">
  <tr>
    <td><label class="form-label">Aktiviti/Program</label></td>
    <td colspan="6"><textarea name="atvt" rows="2" cols="50" id="perkara" class="form-control" required="required" placeholder="Aktiviti?"/><?php echo $atvt; ?></textarea></td>
  </tr>
  <tr>
    <td><label class="form-label">Tarikh</label></td>
    <td>Dari:<input type="date" name="tm" id="tarikhmasuk"  required="required" placeholder="Please Enter Name" value="<?php echo $tm; ?>"/></td>
    <td>Hingga:<input type="date" name="tk" id="tarikhmasuk"  required="required" placeholder="Please Enter Name" value="<?php echo $tk; ?>"/><br /></td>
  </tr>
  <tr>
    <td><label class="form-label">Masa</label></td>
    <td>Dari:<input type="time" name="mm" id="tarikhmasuk"  required="required" placeholder="Please Enter Name" value="<?php echo $mm; ?>"/></td>
    <td>Hingga:<input type="time" name="mk" id="tarikhmasuk"  required="required" placeholder="Please Enter Name" value="<?php echo $mk; ?>"/><br /></td>
  </tr>
  <tr>
    <td rowspan="4"><label class="form-label">Bilik/Ruang Dipohon</label></td>
    <td>Nama Bilik Dan Ruang</td>
    <td>Bilangan Pengguna</td>
    <td>Catatan</td>
  </tr>
  <tr>
    <td>ZAMRUD:<input type="hidden" name="room" value="0"/><input type="checkbox" name="room" value="1" <?php echo ($room=='1')?'checked':'' ?>/></input></td>
    <td class='key'><input type="number" name="zno" class="form-control" autocomplete="off" id="s1" value="<?php echo $zno; ?>"/></td>
    <td class='key'><input type="text" name="zcm" class="form-control" autocomplete="off" id="s1" value="<?php echo $zcm; ?>"/></td>
  </tr>
  <tr>
    <td>DELIMA:<input type="hidden" name="room1" value="0"/><input type="checkbox" name="room1" value="1" <?php echo ($room1=='1')?'checked':'' ?>/></input></td>
    <td class='key'><input type="number" name="dno" class="form-control" autocomplete="off" id="s2"  value="<?php echo $dno; ?>"/></td>
    <td class='key'><input type="text" name="dcm" class="form-control" autocomplete="off" id="s2"  value="<?php echo $dcm; ?>"/></td>
  </tr>
  <tr>
    <td>MUTIARA:<input type="hidden" name="room2" value="0"/><input type="checkbox" name="room2" value="1" <?php echo ($room2=='1')?'checked':'' ?>/></input></td>
    <td class='key'><input type="number" name="mno" class="form-control" autocomplete="off" id="s3"  value="<?php echo $mno; ?>"/></td>
    <td class='key'><input type="text" name="mcm"  class="form-control" autocomplete="off" id="s3"  value="<?php echo $mcm; ?>"/></td>
  </tr>
  
  
</table>		</br>
			<input type="submit" value=" Edit " class="btn btn-primary" name="submit" style="margin-left: 50%;"/><br />
			</form>
      
<?php
}
require('conn.php');

if (isset($_POST['submit']))
{

if (is_string($_POST['id']))
{



$id = $_POST['id'];
$name = mysqli_real_escape_string($conn, $_POST['name']);
$org = mysqli_real_escape_string($conn, $_POST['org']);
$nop = mysqli_real_escape_string($conn, $_POST['nop']);
$nob = mysqli_real_escape_string($conn, $_POST['nob']);
$em = mysqli_real_escape_string($conn, $_POST['em']);
$atvt = mysqli_real_escape_string($conn, $_POST['atvt']);
$tm = mysqli_real_escape_string($conn, $_POST['tm']);
$tk = mysqli_real_escape_string($conn, $_POST['tk']);
$mm = mysqli_real_escape_string($conn, $_POST['mm']);
$mk = mysqli_real_escape_string($conn, $_POST['mk']);
$room = mysqli_real_escape_string($conn, $_POST['room']);
$room1 = mysqli_real_escape_string($conn, $_POST['room1']);
$room2 = mysqli_real_escape_string($conn, $_POST['room2']);
$zno = mysqli_real_escape_string($conn, $_POST['zno']);
$zcm = mysqli_real_escape_string($conn, $_POST['zcm']);
$dno = mysqli_real_escape_string($conn, $_POST['dno']);
$dcm = mysqli_real_escape_string($conn, $_POST['dcm']);
$mno = mysqli_real_escape_string($conn, $_POST['mno']);
$mcm = mysqli_real_escape_string($conn, $_POST['mcm']);


if ($name == '' ||$org == '' || $nob == '' ||$nop == '' || $em == '' || $atvt == '' || $tm == '' || $tk == '' || $mm == '' || $mk == '' || $room == '' || $room1 == '' || $room2 == '')

{

$error = 'ERROR: Please fill in all required fields!';


valid($id, $name, $org, $nop, $nob, $em, $atvt, $tm, $tk, $mm, $mk, $room, $room1, $room2, $zno, $zcm, $dno, $dcm, $mno, $mcm,$error);
}

else
{

mysqli_query($conn, "UPDATE book SET name='$name',org='$org',nop='$nop',nob='$nob', em='$em', atvt='$atvt', tm='$tm', tk='$tk', mm='$mm', mk='$mk', room='$room', room1='$room1', room2='$room2', zno='$zno', zcm='$zcm',dno='$dno',dcm='$dcm',mno='$mno',mcm='$mcm'WHERE id='$id'")
or die(mysqli_error($conn));



$conn->close();

echo "<script>
             alert('Document successfully edited'); 
             window.location.href = 'view.php';
     </script>";
echo "welp";
}
}
else
{

echo 'Error!';
}
}
else

{

if (isset($_GET['id']) && is_string($_GET['id']))
{

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM book WHERE id=$id")
or die(mysqli_error($conn));
$row = mysqli_fetch_array($result);

if($row)
{
	//$name, $org, $nop, $nob, $em, $atvt, $tm, $tk, $mm, $mk, $room, $room1, $room2, $zno, $zcm, $dno, $dcm, $mno, $mcm
$name = $row['name'];
$org= $row['org'];
$nob= $row['nob'];
$nop= $row['nop'];
$em = $row['em'];
$atvt = $row['atvt'];
$tm = $row['tm'];
$tk = $row['tk'];
$mm = $row['mm'];
$mk = $row['mk'];
$room = $row['room'];
$room1 = $row['room1'];
$room2 = $row['room2'];
$zno = $row['zno'];
$zcm = $row['zcm'];
$dno = $row['dno'];
$dcm = $row['dcm'];
$mno = $row['mno'];
$mcm = $row['mcm'];


valid($id, $name, $org, $nop, $nob, $em, $atvt, $tm, $tk, $mm, $mk, $room, $room1, $room2, $zno, $zcm, $dno, $dcm, $mno, $mcm,'');
}
else
{
echo "No results!";
}
}
else

{
echo 'Error!';
}
}
?>
<script>


</script>
					
</body>
</html>