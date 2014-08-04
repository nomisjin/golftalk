<?php

$db_conx = mysqli_connect("localhost", "root", "hjin8574", "golfshare");
// Evaluate the connection
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
} else {
echo "DB connected!";
}
?>