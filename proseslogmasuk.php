<?php
include 'sambungdb.php';
session_start();
?>

<?php


if ($_GET['q'] == 2) {
	$username = $_POST['username'];
	$pwd = $_POST['pwd'];

	$query = mysqli_query($db, "SELECT * FROM pentadbir WHERE namapentadbir = '$username' AND katalaluan = '$pwd'");
	if ($user = mysqli_fetch_array($query)) {
		$_SESSION['username'] = $user['idpentadbir'];
		header("Location: senaraimenu.php");
	}	else {
		echo "<script>alert('Error! try again.')</script>";
		header("Location:logmasukadmin.php");
	}
}
?>