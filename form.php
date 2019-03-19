
<html>
<head>
  <title>PKG FORM</title>
	<script type="text/javascript" charset="utf8" src="js/jquery.js"></script>
  <script type="text/javascript" charset="utf8" src="js/jquery.timepicker.js"></script>
  <link rel="stylesheet" href="css/jquery.timepicker.css">
  <link rel="stylesheet" href="css/bs.css">
  <script src="js/bs.js"></script>
  <?php
  require('conn.php');
  session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST["subm"])){
    
    $username = stripslashes($_REQUEST['username']); // removes backslashes
    $username = mysqli_real_escape_string($conn,$username); //escapes special characters in a string
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn,$password);
    
  //Checking is user existing in the database or not
        $query = "SELECT * FROM `user` WHERE username='$username' and password='".md5($password)."'";
    $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
    $rows = mysqli_num_rows($result);
        if($rows==1){
      $_SESSION['username'] = $username;
      header("Location: permohonan.php"); // Redirect user to index.php
            }else{
        header( "Location: form.php" );
        }
    }else{
?>
  <style type="text/css">
    th, td {
    padding: 10px;
    text-align: left;
}
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 30%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}




  </style>
</head>
<body>
  

			<div class="wat">
			<h2 style="display: inline-block; font-family:helvetica;padding-left: 12.5%;">PKG SYSTEM</h2></div>
      <div style="margin-left: 81.5%;">
      <button class="btn btn-primary" id="myBtn">Login<img border="0" align="top" src="user.png" width="20" height="20" style="padding:4px;"></button>
    
  <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
   
      <span class="close">&times;</span>
    <div class="modal-body">
      <form autocomplete="off" action="" method="post" name="login">
<h2>Login</h2>
<label><b>Username.:</b></label></br>
<input type="text" class="form-control" name="username" placeholder="Username" autocomplete="false" /></br>
</br><label><b>Password.:</b></label></br>
<input type="password" class="form-control" name="password" placeholder="Password" autocomplete="false" /></br>
</br><button class="btn btn-primary" name="subm" type="submit" value="Login" style="vertical-align:middle"><span>Log in </span></button>
</form>
    </div>
    <?php } ?>
  </div>

</div>
</div>
<form action="" method="post">
		<hr>
		</br>
    <table style="width:75%; border-collapse: collapse;
    " align="center" border="1">
    <tr><td>
 <b>PROSEDUR/PERATURAN TEMPAHAN!!</b></br>
1) Tempahan hendaklah minima <b>3 HARI SEBELUM</b> sebarang aktiviti atau program.</br>
2) KELULUSAN tertakluk kepada <b>KEKOSONGAN dan KEUTAMAAN</b>.</br>
3) Pembatalan/pindaan tarikh hendaklah dimaklumkan segera.</br>
4) <b>EKSA</b> . Pastikan bilik/ruang sentiasa BERSIH, TERSUSUN dan SEPERTI ASAL selepas digunakan.</br>
5) <b>PENJIMATAN</b> Pastikan segala peralatan elektrik dan ICT '<b>SWITCH OFF</b>' dan '<b>UNPLUG</b>' selepas digunakan.</br>
6) PKG Dalat <b>tidak menyediakan</b> perkhidmatan mencetak, telefon, faks, fotostat dan bahan CD/DVD kosong.</br>
7) Sebarang kerosakan/kehilangan peralatan sebelum/semasa/selepas penggunaan pihak pemohon hendaklah dilaoprkan kepada pihak PKG dengan SEGERA.</br>
8) <b>REKOD PENGGUNAAN BILIK</b> wajib diisi.</br>
9) <b>MAKLUM BALAS PELANGGAN PKG</b> online dengan mengimbas QR CODE hendaklah diisi setiap pengguna dan peserta yang menggunakan bilik tersebut.</br>
</td>
</tr>

  
</table>
</br>
<label class="form-label" style="font-size: large; padding-left: 12.5%;">A. MAKLUMAT PEMOHON</label>
<table style="width:75%; border-collapse: collapse;
    " align="center" border="1">
  <tr>
    <td><label class="form-label">Nama Pemohon</label></td>
    <td colspan="3"><input class="form-control" type="text" name="name" id="norujukan" required="required" autocomplete="off"/></td>
  </tr>
  <tr>
    <td><label class="form-label">Organisasi</label></td>
    <td colspan="3"><input class="form-control"type="text" name="org" id="norujukan" required="required" autocomplete="off" placeholder="KPM/BTP/JPN/PPD/SEK/UNIT/AGEN"/><br /></td>
  </tr>
  <tr>
    <td><label>Telefon</label></td>
    <form class="form-horizontal">
    <div class="form-group">
    <td><label class="control-label col-sm-4">Pejabat:</label><div class="col-sm-8"><input class="form-control input" align="right" type="text" name="nop" id="norujukan" required="required" autocomplete="off" placeholder="0123456789"/></div></td>
    <td><label class="control-label col-sm-4">T/Bimbit:</label><div class="col-sm-8"><input class="form-control input" type="text" name="nob" id="norujukan" required="required" autocomplete="off" placeholder="0123456789"/></div></td>
    <td><label class="control-label col-sm-3">Email:</label><div class="col-sm-9"><input class="form-control input" type="text" name="em" id="norujukan" required="required" autocomplete="off" placeholder="abc@email.my"/></div></td></form>
  </tr>
</table>
</br>
<label class="form-label" style="font-size: large; padding-left: 12.5%;">B. BUTIRAN TEMPAHAN</label>

<table style="width:75%; border-collapse: collapse;
    " align="center" border="1">
  <tr>
    <td><label class="form-label">Aktiviti/Program</label></td>
    <td colspan="3"><textarea class="form-control" name="atvt" rows="2" cols="50" id="perkara" required="required" placeholder="Aktiviti"/></textarea></td>
  </tr>
  <tr>
    <td><label class="form-label">Tarikh</label></td>
    <td>Dari:<input type="date" name="tm" id="tarikhmasuk" required="required" placeholder="Please Enter Name"/>
    </td>
    <td>Hingga:<input type="date" name="tk" id="tarikhmasuk" required="required" placeholder="Please Enter Name"/><br /></td>
    <td rowspan="3"><p style="text-align: center;"><b>CATATAN</b>
      </p>
    </td>
  </tr>
  <tr>
    <td><label class="form-label">Masa</label></td><div class='input-group date' id='datetimepicker3'>
    <td>Dari:<input type="text" class="time" name="mm" id="mm" required="required" /></td>
    <script>

//print list for whole month
//add search
      //zamrud-green
      //mutiara-
      //delima-red
      //ppsp-blue
      $(function() {
        $('#mm').timepicker();
      });
      </script>
    <td>Hingga:<input type="text" class="time" name="mk" id="mk" required="required" /></td>
    <script>
      $(function() {
        $('#mk').timepicker();
      });
      </script>
  </tr>
  <tr>
    <td rowspan="5"><label class="form-label">Bilik/Ruang Dipohon</label></td>
    <td><p style="text-align: center;"><b>Nama Bilik Dan Ruang</b></p></td>
    <td><p style="text-align: center;"><b>Bilangan Pengguna<b></p></td>
  </tr>
  <tr>
    <td>ZAMRUD:<input type="checkbox" name="room" id="1" onclick ="toggle_dropdown(this.checked,1);" value="1"></input></td>
    <td class='key'><input class="form-control" type="number" name="zno" autocomplete="off" id="s1" disabled="true"/></td>
    <td class='key'><input class="form-control" type="text" name="zcm" autocomplete="off" id="s1" disabled="true"</td>
  </tr>
  <tr>
    <td>DELIMA:<input type="checkbox" name="room1" id="2" onclick ="toggle_dropdown(this.checked,2);" value="1"></input></td>
    <td class='key'><input class="form-control" type="number" name="dno" autocomplete="off" id="s2" disabled="true"/></td>
    <td class='key'><input class="form-control" type="text" name="dcm" autocomplete="off" id="s2" disabled="true"</td>
  </tr>
  <tr>
    <td>MUTIARA:<input type="checkbox" name="room2" id="3" onclick ="toggle_dropdown(this.checked,3);" value="1"></input></td>
    <td class='key'><input class="form-control" type="number" name="mno" autocomplete="off" id="s3" disabled="true"/></td>
    <td class='key'><input class="form-control" type="text" name="mcm"  autocomplete="off" id="s3" disabled="true"</td>
  </tr>
<tr>
    <td>PPKG:<input type="checkbox" name="room3" id="4" onclick ="toggle_dropdown(this.checked,4);" value="1"></input></td>
    <td class='key'><input class="form-control" type="number" name="pno" autocomplete="off" id="s4" disabled="true"/></td>
    <td class='key'><input class="form-control" type="text" name="pcm"  autocomplete="off" id="s4" disabled="true"</td>
  </tr></br></table>
  <table style="width:75%; border-collapse: collapse;
    " align="center" border="1">
    <tr><td>
 Dengan menekan checkbox dibawah, saya memperakukan bahawa:</br></br>
  <li>Semua maklumat yang dinyatakan adalah benar.</li>
<li>Saya berjanji akan memastikan diri saya dan semua peserta/pengguna dibawah pengawasan saya akan mematuhi semua peraturan yang ditetapkan oleh Pusat Kegiatan Guru Dalat</li></br>
<div style="margin-left: 25%">
<p style="font-weight: bold;">Saya telah membaca dan bersetuju dengan kesemua syarat-syarat diatas
    </p></br>
    </div>
    <div style="margin-left: 52.5%">
    <input type="checkbox" id="termsChkbx " onchange="isChecked(this, 'sub')" />
</div>

</td>
</tr>
  
</table></br>			
				<input type="submit" value=" Submit " class="btn btn-primary" id="sub" name="submit" disabled="disabled" style="margin-left: 50%;" /><br />
			
			</div>
			</form>

<?php
if(isset($_POST["submit"])){
require('conn.php');
error_reporting(0);






$room=$_POST['room'];
$room1=$_POST['room1'];
$room2=$_POST['room2'];
$room3=$_POST['room3'];
$tm=$_POST['tm'];
$tk=$_POST['tk'];
$mm=$_POST['mm'];
$mk=$_POST['mk'];

$query=mysqli_query($conn,"SELECT * FROM book where (room='$room' or room1='$room1' or room2='$room2' or room3='$room3') && (tm<='$tk' and tk>='$tm' ) && (mm<='$mk' and mk>='$mm' ) && cont='2'");

$rowc=mysqli_num_rows($query);

if ($rowc>0) {
  if ($room==1) {

    if ($room1==1) {

      if ($room2==1) {

             if ($room3==1) { //ABCD

                    echo "<script type= 'text/javascript'>alert('Harap Maaf,ZAMRUD, DELIMA, MUTIARA dan PPKG sudah ditempah, sila cuba sekali lagi!');</script>";
              }
              else{ //ABC
                    echo "<script type= 'text/javascript'>alert('Harap Maaf,ZAMRUD, DELIMA dan MUTIARA sudah ditempah, sila cuba sekali lagi!');</script>";
              }
      }
      else{
              if ($room3==1) { //ABD

                    echo "<script type= 'text/javascript'>alert('Harap Maaf,ZAMRUD, DELIMA dan PPKG sudah ditempah, sila cuba sekali lagi!');</script>";
              }
              else{ //AB
                    echo "<script type= 'text/javascript'>alert('Harap Maaf,ZAMRUD dan DELIMA sudah ditempah, sila cuba sekali lagi!');</script>";
              }
      }
    }
    else{
      if ($room2==1) {
              if ($room3==1) { //ACD

                    echo "<script type= 'text/javascript'>alert('Harap Maaf,ZAMRUD, MUTIARA dan PPKG sudah ditempah, sila cuba sekali lagi!');</script>";
              }
              else{ //AC
                    echo "<script type= 'text/javascript'>alert('Harap Maaf,ZAMRUD, dan MUTIARA sudah ditempah, sila cuba sekali lagi!');</script>";
              }
      }
      else{
              if ($room3==1) { //AD

                    echo "<script type= 'text/javascript'>alert('Harap Maaf,ZAMRUD, dan PPKG sudah ditempah, sila cuba sekali lagi!');</script>";
              }
              else{ //A
                    echo "<script type= 'text/javascript'>alert('Harap Maaf,ZAMRUD, sudah ditempah, sila cuba sekali lagi!');</script>";
              }
      }
    }

  }
  else{
    if ($room1==1) {
      if ($room2==1) {
              if ($room3==1) { //BCD

                    echo "<script type= 'text/javascript'>alert('Harap Maaf, DELIMA, MUTIARA dan PPKG sudah ditempah, sila cuba sekali lagi!');</script>";
              }
              else{ //BC
                    echo "<script type= 'text/javascript'>alert('Harap Maaf, DELIMA dan MUTIARA sudah ditempah, sila cuba sekali lagi!');</script>";
              }
      }
      else{
              if ($room3==1) { //BD

                    echo "<script type= 'text/javascript'>alert('Harap Maaf, DELIMA dan PPKG sudah ditempah, sila cuba sekali lagi!');</script>";
              }
              else{ //B
                    echo "<script type= 'text/javascript'>alert('Harap Maaf,DELIMA sudah ditempah, sila cuba sekali lagi!');</script>";
              }
      }
    }
    else{
      if ($room2==1) {
              if ($room3==1) { //CD

                    echo "<script type= 'text/javascript'>alert('Harap Maaf, MUTIARA dan PPKG sudah ditempah, sila cuba sekali lagi!');</script>";
              }
              else{ //C
                    echo "<script type= 'text/javascript'>alert('Harap Maaf, MUTIARA sudah ditempah, sila cuba sekali lagi!');</script>";
              }
      }
      else{
              if ($room3==1) { //ABCD

                    echo "<script type= 'text/javascript'>alert('Harap Maaf, PPKG sudah ditempah, sila cuba sekali lagi!');</script>";
              }
              else{ //ABC
                    echo "<script type= 'text/javascript'>alert('Harap Maaf, Singularities (BLACKHOLE) sudah ditempah, sila cuba sekali lagi!');</script>";
              }
      }
    }
  }



}
else{


$sql = "INSERT INTO book (name, org, nop, nob, em, atvt, tm, tk, mm, mk, room, room1, room2, room3, zno, zcm, dno, dcm, mno, mcm, pno, pcm, cont )
VALUES ('".$_POST["name"]."','".$_POST["org"]."','".$_POST["nop"]."','".$_POST["nob"]."','".$_POST["em"]."','".$_POST["atvt"]."','".$_POST["tm"]."','".$_POST["tk"]."','".$_POST["mm"]."','".$_POST["mk"]."','".$_POST["room"]."','".$_POST["room1"]."','".$_POST["room2"]."','".$_POST["room3"]."','".$_POST["zno"]."','".$_POST["zcm"]."','".$_POST["dno"]."','".$_POST["dcm"]."','".$_POST["mno"]."','".$_POST["mcm"]."','".$_POST["pno"]."','".$_POST["pcm"]."','1')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
}
?>






			<script>
function isChecked(checkbox, sub) {
    document.getElementById(sub).disabled = !checkbox.checked;
}


				$('').each(function() {
    $(this).attr('disabled', 'true');
});
// Enable them on click
$('input[type="checkbox"]').click(function() {
    var s = $(this).parent('td').siblings('td.key').children('input');
    if (s.is(':disabled')) {
        s.removeAttr('disabled');
    } else {
        s.attr('disabled', 'true');
    }
});




var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



			</script>
			</body>
		</html>