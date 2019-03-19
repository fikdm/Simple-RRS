<html>
<body>
<?php
					require('conn.php');
					//include("auth.php");
					$id=$_REQUEST['id'];
					//if($_SESSION['username'] == 'ppd_admin'){
					$cont = 2;
						$query = "UPDATE book SET cont=$cont WHERE id=$id"; 
						$result = mysqli_query($conn,$query) or die ( mysqli_error($conn));
						header('Location: ' . $_SERVER['HTTP_REFERER']);
					//}
					//else{
					?>
					<!--<script>
						alert('Please contact to administartion for further verification!!!');
						window.location.href = document.referrer;
					</script>-->
					<?php
					
					//}
?>
</body>
</html>