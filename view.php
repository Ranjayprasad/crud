<!DOCTYPE html>
<?php 
include 'conn.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <h1 class="text-center">Data Here...</h1>
    <br><br> <Button class="btn btn-danger"><a class="text-white text-decoration-none" href="login.php">GO to Login Page</a></Button>
    <table border="1" class="table dark">
        <tr>
            <td class="col table-dark">Id</td>
            <td class="col table-dark">Password</td>
            <td class="col table-dark">User Name:</td>
            <td class="col table-dark">UPDATE DATA</td>
            <td class="col table-dark">DELETE DATA</td>
        </tr>
        <?php
        
        $q = "SELECT * from sessionlogin";
        $res = mysqli_query($conn, $q);
        while($getdata = mysqli_fetch_array($res)){

            ?>
        <tr>
            <td> <?php echo $getdata['id']; ?></td>
            <td> <?php echo $getdata['userid']; ?>  </td>
            <td> <?php echo $getdata['password']; ?> </td>
            <td><button class="btn btn-success"><a class="text-white text-decoration-none" href="update.php?id=<?php echo $getdata['id'];?>"?>UPDATE DATA</a></button></td>
            <td><button class="btn btn-danger"><a class="text-white text-decoration-none" href="delete.php?id=<?php echo $getdata['id'];?>">DELETE DATA</a></button></td>
        </tr>
    
    <?php
    }
        
    ?>
    </table>
</body>
</html>