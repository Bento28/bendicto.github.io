<?php 
$host_db="localhost";
$user_db="id16735768_testsajakok2";
$pass_db="qu1/Ha+q>G#Z33*f";
$nama_db="id16735768_testsajakok1";

$mysqli = new mysqli($host_db,$user_db,$pass_db,$nama_db);

date_default_timezone_set("Asia/Jakarta");

$username= $_POST['username'];
$password= $_POST['password'];
$uuid= $_POST['uuid'];

	//cek user login 
	$cek_login = $mysqli->query("select *from users where username='$username' and password='$password' ");
	$ktm_login = $cek_login->num_rows;
	$data_login = $cek_login->fetch_assoc();
	//$cek_login2 = $mysqli->query("UPDATE users SET uuid='$uuid' WHERE username='$username' ");


if($ktm_login>=1){
		   
              if ($uuid <=$data_login['uuid']){
                		
		    if($password <=$data_login['password']){
		   		
                           if (strtotime(date('Y-m-d H:i:s')) < strtotime($data_login['expired'])){
		
                             echo "Login Berhasil";	
	 echo "\n";
echo ";";
echo number_format(strtotime($data_login["expired"])*1000, 0, '.', '');
echo ";";
		         }    
                    else { 
                           echo "Login Gagal Akun Expired";
                        } 
            }   
                else { 
                       echo "Login Gagal Password Salah";
                    }
                    

        } else { 
                 echo "Login Gagal User Id Tidak Cocok";
             }         
   
    } else { 
             echo "Login Gagal Username Dan Password Tidak Cocok";   
         }

	$mysqli->close();

?>