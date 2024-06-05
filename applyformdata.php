<?php
include'connection.php';
if(!$connection){
    die("connection failed");
}
else{
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $qualification=$_POST['education'];
        $country=$_POST['country'];
        $phonenumber=$_POST['phonenumber'];
        $insertquery="insert into applytable values('$name','$qualification','$country','$phonenumber')";
        if(mysqli_query($connection,$insertquery)){
            echo"inserted successfully";
        }
    }
}
?>