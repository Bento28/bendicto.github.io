<?php 
include 'koneksi.php';

date_default_timezone_set("Asia/Jakarta");

$username = $_POST['username'];
$password = $_POST['password'];
$uuid = $_POST['uuid'];
$expired = $_POST['expired'];


$query=mysqli_query($koneksi,"select * from users where username='$username'");
$cek=mysqli_num_rows($query);

if($cek > 0){
	echo "Username Already Register!";
}else{

if($username == "" ){
	echo "Nothing can be empty!";
	}elseif($username <>""){

	$sql_simpan=mysqli_query($koneksi,"INSERT INTO users(username,password,uuid,expired) VALUES('$username','$password','$uuid','$expired')");
 	echo "Membership Approved";
	} else {
 	echo "Membership Not Approved";
	}
}

?>