<?php 
include 'koneksi.php';

date_default_timezone_set("Asia/Jakarta");

$username = $_POST['username'];
$password = $_POST['password'];
$uuid = $_POST['uuid'];
$datenow = date('Y-m-d H:i:s');
$expired = date('Y-m-d H:i:s', strtotime('+1 days', strtotime($datenow))); //+1years //+1monts //+1days //+5minutes

$query=mysqli_query($koneksi,"select * from users where username='$username'");
$cek=mysqli_num_rows($query);

if (strlen($username) > 10 || strlen($username) < 5) {
   echo 'ERROR: Username must be more than 5 characters and no more than 10 characters!';
  }else

if (strlen($password) > 10 || strlen($password) < 5) {
   echo 'ERROR: Password must be more than 5 characters and no more than 10 characters!';
  }else


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