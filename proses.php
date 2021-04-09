<?php
	session_start();
	include('koneksi.php');
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query=mysqli_query($conn,"select * from `tbl_user` where username='$username' and password='$password'");
	
	if (mysqli_num_rows($query)<1){
		$_SESSION['message']="Login Error. Please Try Again";
		header('location:index.php');
	}
	else{
		$row=mysqli_fetch_array($query);
		$_SESSION['id']=$row['id'];
		$_SESSION['FullName']=$row['FullName'];
		header('location:home.php');
	}

?>