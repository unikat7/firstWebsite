<?php
include'connection.php';
if(!$connection){
    die("failed");
}
else{
    if(isset($_POST['sbbutton'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phonenumber=$_POST['phonenumber'];
        $message=$_POST['message'];
        $insertquery="insert into contact values('$name','$email','$phonenumber','$message')";
        if(mysqli_query($connection,$insertquery)){
            echo"inserted";
        }
    }
}
?>