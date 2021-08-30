<!DOCTYPE html>

<?php
include 'conn.php';


if (isset($_POST['login'])) {
    $id = $_GET['id'];
    $userid = $_POST['userid'];
    $password = $_POST['password'];
   
    $updatedata = "UPDATE sessionlogin set id=$id, userid = '$userid', password='$password' where id=$id";
    mysqli_query($conn, $updatedata);
    header('location:view.php');
    
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>
    <h1 style="text-align:center;">UPDATE DATA HERE </h1>
    
    <form method="post">
        <input type="text" name="userid" id="userid" >
        <br><br>
        <input type="password" name="password" id="password" >
        <br><br>
        <button name="login">UPDATE</button>
        
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
        width:150px;
        background:green;
        border-radius:5px;
        font-size: 25px;
    }
    
</style>

</body>
</html>