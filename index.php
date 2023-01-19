<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
 
    <table width='80%' border=1>
 
    <tr>
        <th>USER</th> <th>PASSWORD</th> <th>UUID</th> <th>EXPIRED</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['username']."</td>";
        echo "<td>".$user_data['password']."</td>";
        echo "<td>".$user_data['uuid']."</td>";    
        echo "<td>".$user_data['expired']."</td>";    
    }
    ?>
    </table>
</body>
</html>