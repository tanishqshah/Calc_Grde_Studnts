<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		$name = $_POST['name'];
		$regno=$_POST['reg'];

		$x1=$_POST['cat1'];
		$x2=$_POST['cat2'];
		$x3=$_POST['da1'];
		$x4=$_POST['da2'];
		$x5=$_POST['quiz'];
		$x6=$_POST['fat'];
		$iwp=$x1/2+$x2/2+$x3+$x4+$x5+$x6*2/5;

		$x1=$_POST['2cat1'];
		$x2=$_POST['2cat2'];
		$x3=$_POST['2da1'];
		$x4=$_POST['2da2'];
		$x5=$_POST['2quiz'];
		$x6=$_POST['2fat'];
		$bac=$x1/2+$x2/2+$x3+$x4+$x5+$x6*2/5;
		
		$x1=$_POST['3cat1'];
		$x2=$_POST['3cat2'];
		$x3=$_POST['3da1'];
		$x4=$_POST['3da2'];
		$x5=$_POST['3quiz'];
		$x6=$_POST['3fat'];
		$pdc=$x1/2+$x2/2+$x3+$x4+$x5+$x6*2/5;

		$x1=$_POST['4cat1'];
		$x2=$_POST['4cat2'];
		$x3=$_POST['4da1'];
		$x4=$_POST['4da2'];
		$x5=$_POST['4quiz'];
		$x6=$_POST['4fat'];
		$mi=$x1/2+$x2/2+$x3+$x4+$x5+$x6*2/5;
		
		$x1=$_POST['5cat1'];
		$x2=$_POST['5cat2'];
		$x3=$_POST['5da1'];
		$x4=$_POST['5da2'];
		$x5=$_POST['5quiz'];
		$x6=$_POST['5fat'];
		$isaa=$x1/2+$x2/2+$x3+$x4+$x5+$x6*2/5;
		

		$total = $iwp + $bac + $pdc + $mi + $isaa;
		$final = $total / 5.0;

		mysqli_query($conn, "INSERT INTO `student` VALUES('', '$name', '$iwp', '$bac', '$pdc','$mi','$isaa','$final','$regno')") or die(mysqli_error());
		header("location: index.php");
	}
?>