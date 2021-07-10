<?php 
 $dbHost="localhost";
 $dbUser="root";
 $dbPass="";
 $dbName="travel";

$conn= new mysqli("$dbHost","$dbUser","$dbPass","$dbName");

if (!$conn){
    echo "Unable to reach sever ";
}
?>