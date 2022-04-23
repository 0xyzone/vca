<?php
include_once "../includes/dbconnection.php";
if($_POST){
    $name = $_POST['uname'];
    $pw = $_POST['password'];
    $securepw = md5($pw);

    $query = mysqli_query($db, "SELECT * FROM vca_users WHERE email='$name' || uname='$name' && password='$securepw'");

    if(mysqli_num_rows($query) == 1){
        echo "logged in";
    } else {
        echo "failed!";
    }

} else {
    echo "You are not allowed to view this!";
}
?>