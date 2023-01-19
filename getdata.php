<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'id16735768_testsajakok2'; // User Server
$db_pass = 'qu1/Ha+q>G#Z33*f'; // Password Server
$db_name = 'id16735768_testsajakok1'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$username = $_POST['username'];



$sql = "SELECT * FROM users Where username = ('$username')";
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
 


while ($row = mysqli_fetch_array($query))
{

echo '【USER】'.$row['username'].'【USER】';
echo '【PASS】'.$row['password'].'【PASS】';
echo '【UUID】'.$row['uuid'].'【UUID】';
echo '【EXP】'.$row['expired'].'【EXP】';
}




// Apakah kita perlu menjalankan fungsi mysqli_free_result() ini? baca bagian VII
mysqli_free_result($query);

// Apakah kita perlu menjalankan fungsi mysqli_close() ini? baca bagian VII
mysqli_close($conn);

