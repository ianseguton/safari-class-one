<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
<form action="updateProcess.php" method="GET">
    <?php
    extract($_GET);
    $conn = mysqli_connect("localhost", "root", "", "safari");
    $fetch = mysqli_query($conn, "SELECT * FROM majina WHERE id=$y");
    if (!$fetch){
        echo "Fetching Failed";
    }else {
        while ($row = mysqli_fetch_assoc($fetch)) {
            extract($row);
        }
    }
    ?>
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <input type="text" name="name" value="<?php echo $name;?>">
    <input type="email" name="email" value="<?php echo $email;?>">
    <input type="password" name="pass" value="<?php echo $password;?>">
    <input type="submit" name="btnsubmit" value="submit">
</form>
</body>
</html>