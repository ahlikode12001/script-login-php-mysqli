<?php
	include('koneksi.php');
	session_start();
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
	header('location:index.php');
    exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Pages</title>
</head>
<body>
<div>
	<h4>Welcome, <?= $_SESSION['FullName'];?> <a href="logout.php">Logout</a></h4>
	 
</div>
</body>
</html>