<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 style="text-align:center;">Form</h1>
    <form method="post">
        <input type="text" name="userid" id="userid" placeholder="Enter Your User Id Here " require>
        <br><br>
        <input type="password" name="password" id="password" placeholder="Enter Your Password Here "require>
        <br><br>
        <button name="login" class = "btn btn-success col-3">Login</button>
        <button class = "btn btn-primary col-3"><a href="view.php" class="text-white text-decoration-none">View Data</a></button>
    </form>
    
<style>
    form{
        padding:150px 400px;
        background: pink;
    }
    form input{
        height:50px;
        border-radius:10px;
        width:400px
    }
    form input[type]{
        font-size:20px;
        padding:0 15px;
    }
    button{
        height:50px;
        width:80px;
        background:green;
        border-radius:5px;
        font-size: 25px;
    }
    
</style>



<?php
include 'conn.php';

if (isset($_POST['login'])) {
   $userid = $_POST['userid'];
   $password = $_POST['password'];
   
    $data = "INSERT INTO sessionlogin(userid, password) VALUES ('$userid', '$password')";

    $result = mysqli_query($conn, $data);
    if($result == true){
        echo "<script> alert('Data Submited')</script>";
    }else{
        echo "Insertion failed....";
    }

}
?>





</body>
</html>