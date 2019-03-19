<html>
<head>
  <?php
require('conn.php');
include("auth.php");
?>
	<title>Print PKG</title>
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

.no-border {
    border: 0;
    box-shadow: none; /* You may want to include this as bootstrap applies these styles too */
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
        width: 27cm;
        height: 29.7cm;
        margin: 10mm -15mm 10mm 15mm; 
        transform: scale(1.32,1.2);
        /* change the margins as you want them to be. */
        max-height: 100% !important;
        overflow: hidden !important;
        page-break-after: always;
   } 
}
  </style>
</head>

<body>
<?php
					require('conn.php');
					$id=$_REQUEST['id'];
						$query = "SELECT * FROM book WHERE id=$id"; 
						$result = mysqli_query($conn,$query);
          while($row = mysqli_fetch_assoc($result)) { ?>
           

<form action="" method="post">
			
		<hr>
		</br>
		<div class="a">
       <h2><center>Pusat Kegiatan Guru Dalat</center></h2>
            <h5><center>BORANG PERMOHONAN TEMPAHAN BILIK & RUANG DI PKG DALAT</center></h5>
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
<label style="padding-left: 12.5%;">A. MAKLUMAT PEMOHON</label>
<table style="width:75%; border-collapse: collapse;" align="center" border="1">
    
  <tr>
    <td><label class="form-label">Nama Pemohon</label></td>
    <td colspan="6"><input class="form-control no-border" type="text" value="<?php echo $row['name']?>" readonly/></td>
  </tr>
  <tr>
    <td><label class="form-label">Organisasi</label></td>
    <td colspan="6"><input class="form-control no-border"type="text" value="<?php echo $row['org']?>" readonly/><br /></td>
  </tr>
  <tr>
    <td><label>Telefon</label></td>
    <div class="form-group">
    <td><b>Pejabat:</b></td><td width="25%"><input class="form-control no-border" align="right" type="text" value="<?php echo $row['nop']?>" readonly/></td>
    <td><b>T/Bimbit:</b></td><td width="25%"><input class="form-control no-border" value="<?php echo $row['nob']?>" readonly/></td>
    <td><b>Email:</b></td><td width="50%"><input class="form-control no-border" type="text" value="<?php echo $row['em']?>" readonly/></td>
  </tr>
</table>
<label style="padding-left: 12.5%;">B. BUTIRAN TEMPAHAN</label>
<table style="width:75%; border-collapse: collapse;" align="center" border="1">
    
  <tr>
    <td><label class="form-label">Aktiviti/Program</label></td>
    <td colspan="5"><textarea class="form-control no-border" rows="2" cols="50" readonly/><?php echo $row['atvt']?></textarea></td>
  </tr>
  <tr>
    <td><label class="form-label">Tarikh</label></td>
    <td>Dari:</td><td><input type="date" value="<?php echo $row['tm']?>" style="font-size: 11px" readonly/>
    </td>
    <td>Hingga:</td><td><input type="date" value="<?php echo $row['tk']?>" style="font-size: 11px" readonly/></td>
    <td rowspan="3" style="width:50%"><p style="text-align: center;"><b>CATATAN</b>
      </p>
    </td>
  </tr>
  <tr>
    <td><label class="form-label">Masa</label></td>
    <td>Dari:</td><td><input type="time" value="<?php echo $row['mm']?>" readonly/></td>
    <td>Hingga:</td><td><input type="time" value="<?php echo $row['mk']?>" readonly/></td>
  </tr>
  <tr>
    <td rowspan="5"><label class="form-label">Bilik/Ruang Dipohon</label></td>
    <td colspan="2"><p style="text-align: left;"><b>Nama Bilik Dan Ruang</b></p></td>
    <td colspan="2"><p style="text-align: left;"><b>Bilangan Pengguna<b></p></td>
  </tr>
  <tr>
    <td colspan="2">ZAMRUD:<input type="checkbox" <?php echo ($row['room']=='1')?'checked':'' ?> onclick="return false;"></input></td>
    <td colspan="2"class='key'><input class="form-control no-border" type="number" value="<?php echo $row['zno']?>" readonly/></td>
    <td style="width:50%" class="keyy"><input class="form-control no-border keyy" type="text" value="<?php echo $row['zcm']?>" readonly/></td>
  </tr>
  <tr>
    <td colspan="2">DELIMA:<input type="checkbox" <?php echo ($row['room1']=='1')?'checked':'' ?> onclick="return false;"></input></td>
    <td colspan="2"class='key'><input class="form-control no-border" type="number" value="<?php echo $row['dno']?>" readonly/></td>
    <td style="width:50%" class="keyy"><input class="form-control no-border keyy" type="text" value="<?php echo $row['dcm']?>" readonly/></td>
  </tr>
  <tr>
    <td colspan="2">MUTIARA:<input type="checkbox" <?php echo ($row['room2']=='1')?'checked':'' ?> onclick="return false;"></input></td>
    <td colspan="2"class='key'><input class="form-control no-border" type="number" value="<?php echo $row['mno']?>" readonly/></td>
    <td style="width:50%" class="keyy"><input class="form-control no-border keyy" type="text" value="<?php echo $row['mcm']?>" readonly/></td>
  </tr>
 <tr>
    <td colspan="2">PPKG:<input type="checkbox" <?php echo ($row['room3']=='1')?'checked':'' ?> onclick="return false;"></input></td>
    <td colspan="2"class='key'><input class="form-control no-border" type="number" value="<?php echo $row['pno']?>" readonly/></td>
    <td style="width:50%" class="keyy"><input class="form-control no-border keyy" type="text" value="<?php echo $row['pcm']?>" readonly/></td>
  </tr></br></table>
  <table style="width:75%; border-collapse: collapse;
    " align="center" border="1">
    <tr><td>
 Dengan menandatangani borang ini, saya memperakukan bahawa:</br>
  <li>Semua maklumat yang dinyatakan adalah benar.</li>
<li>Saya berjanji akan memastikan diri saya dan semua peserta/pengguna dibawah pengawasan saya akan mematuhi semua peraturan yang ditetapkan oleh Pusat Kegiatan Guru Dalat</li></br>
 
 <p align="center"><b>Borang ini telah dipersetujui oleh pihak pemohon setelah dihantar ke PKG SYSTEM</b></p>
</td>
</tr>

  
</table></br>
<table style="width:75%; border-collapse: collapse;
    " align="center" border="1">
    <tr><td>
    	 <label>C. UNTUK KEGUNAAN PEJABAT SAHAJA</label>
</td></tr></table>
<table style="width:75%;" align="center">
	<tr><td colspan="2">
		<p align="center">Dimaklumkan permohonan tuan/puan di atas adalah:
      <?php if($row['cont'] == '2'){
        echo "<b>DILULUSKAN</b>";
      }
      elseif ($row['cont'] == '3') {
        echo "<b>TIDAK DILULUSKAN</b>";
      }
      else
      {
        echo "<b>DALAM PROSES</b>";
      }


      ?>



    </p></tr></td>
    <tr><td>
		<p><?php echo str_repeat('&nbsp;', 25);?>Catatan:</td><td><textarea class="form-control no-border" rows="2" style="width: 400px;" /></textarea></p></td>
		<p align="center"><b>Dokumen ini dihasilkan oleh komputer. Tandatangan adalah tidak diperlukan.</b></p>
</td></tr></table>
			</div>
			</form>
		</div>
				<input type="submit" onclick="window.print();" value=" Print " class="btn btn-primary" id="sub" name="submit"  style="margin-left: 50%;" /><br />
			</br>

<?php
          }
          ?>
          <script>
</script>
</body>
</html>