<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/12/19
 * Time: 9:46 AM
 */

if (isset($_GET['btnsubmit'])){
    $name = $_GET['x'];
    $email = $_GET['y'];
    $password = $_GET['z'];
    $encPassword = md5($password);

    $conn = mysqli_connect("localhost", "root", "", "safari");
    if (!$conn){
        echo "Failed to Connect to the DB";
    }else{
        $insert = mysqli_query($conn, "INSERT INTO `majina`(`id`, `name`, `email`, `password`) VALUES (null, '$name', '$email', '$encPassword')");
        if (!$insert){
            echo "Failed to save";
        }else{
            echo "$name Saved Successfully";
            echo "<a href='userSave.php'>Add User</a>";
        }
    }
}
?>