<?php

$db_host = "golfshare.db.8640822.hostedresource.com"; 
// Place the username for the MySQL database here 
$db_username = "golfshare";  
// Place the password for the MySQL database here 
$db_pass = "Hjin8574#";  
// Place the name for the MySQL database here 
$db_name = "golfshare"; 

// Run the connection here   
$db_conx = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or die ("could not connect to mysql");  
// Now you can use the variable $myConnection to connect in your queries   
// Evaluate the connection
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
} else {
echo "DB connected!";
}
?>