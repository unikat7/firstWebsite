<?php
include'connection.php';
if(!$connection){
    echo("die connection failed");
}
else{
    $sql="select * from applytable";
    $data=mysqli_query($connection,$sql);
    $rows=mysqli_num_rows($data);
    if($rows>0){
        while($record=mysqli_fetch_assoc($data)){
            echo"<tr>";
            echo"<td>".$record['name']."</td>";
            echo"<td>".$record['qualification']."</td>";
            echo"<td>".$record['country']."</td>";
            echo"<td>".$record['phonenumber']."</td>";
            echo"</tr>";
        }
    }
}
?>