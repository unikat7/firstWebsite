<?php
include'connection.php';
if(!$connection){
    die("connection failed");
}
else{
   $sql="select * from contact";
   $data=mysqli_query($connection,$sql);
   $rows=mysqli_num_rows($data);
   if($rows>0){
     while($record=mysqli_fetch_assoc($data)){
        echo"<tr>";
        echo"<td>".$record['name']."</td>";
        echo"<td>".$record['email']."</td>";
        echo"<td>".$record['phonenumber']."</td>";
        echo"<td>".$record['message']."</td>";
        echo"</tr>";
     }
    }
}