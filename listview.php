<?php

include ('config.php');	


	$listUsr = mysqli_query($mysqli,"SELECT * FROM users");
	
	

	while($row = mysqli_fetch_assoc($listUsr)){
               $result[] = $row;

		
	}

	$json = json_encode($result,JSON_PRETTY_PRINT);
	
	file_put_contents('listview.json', $json);
	
	
	$jsonData = file_get_contents("listview.json");
        $data = json_decode($jsonData);
   
   echo "<h3> LIST VIEW USER <h3/>";
       
     foreach ($data as $page) {
                  
             echo "<br>Username : " .$page->username;
                          echo "<br>Password : " .$page->password;
             echo "<br>UID : " .$page->uuid;
             echo "<br>Expired : " .$page->expired;      
             echo "<br>";
                  
   }
	

	
?>