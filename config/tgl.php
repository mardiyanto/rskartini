<?php
	date_default_timezone_set("Asia/jakarta");
	$conn = mysqli_connect("192.168.20.1", "sik", "m4rd1best", "sik");
	if (mysqli_connect_errno()){
		echo "Oops! Koneksi database gagal : --> " . mysqli_connect_error();
	}
$info=mysqli_query($conn,"SELECT * FROM setting");
$p=mysqli_fetch_array($infor);
?>