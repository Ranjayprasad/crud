<?php

include 'conn.php';

$id = $_GET['id'];
        
        

           
$deletequery = "DELETE FROM sessionlogin where id = $id";

mysqli_query($conn, $deletequery);

header('location:view.php');


?>