<?php 
$host = "localhost"; // Nama hostnya
$username = "id16735768_testsajakok2"; // Username
$password = "qu1/Ha+q>G#Z33*f"; // Password (Isi jika menggunakan password)
$database = "id16735768_testsajakok1"; // Nama databasenya
// Koneksi ke MySQL dengan PDO
$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);


// Ambil Data yang Dikirim dari Form
$username = $_POST['username'];
$password = $_POST['password'];
$uuid = $_POST['uuid'];
$expired = $_POST['expired'];

// Proses ubah data ke Database
$sql = $pdo->prepare("UPDATE users SET username=:username, password=:password, uuid=:uuid, expired=:expired WHERE username=:username");
$sql->bindParam(':username', $username);
$sql->bindParam(':password', $password);
$sql->bindParam(':uuid', $uuid);
$sql->bindParam(':expired', $expired);

$execute = $sql->execute(); // Eksekusi / Jalankan query
if($execute){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  echo ' Edit Data User Success ';
}else{
  echo ' Edit Data User Failed ';
}
?>

