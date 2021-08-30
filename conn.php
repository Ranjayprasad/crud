<?php

$host="localhost";
$username ="root";
$pass ="";
$dbname ="login";
$conn = mysqli_connect($host,$username, $pass, $dbname);

if($conn){
	echo "";
}else{
    echo "Not Connected". mysqli_connect_error();
}
?>