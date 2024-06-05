<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         table{
            width:100%;
         }
         th{
            padding:20px;
         }
        
    </style>
</head>
<body>
    <table border=1>
        <thead>
            <tr style="background-color:green;color:white">
                <th>Name</th>
                <th>Qualification</th>
                <th>Intended Country</th>
                <th>Phone number</th>
            </tr>
        </thead>
        <tbody style="background-color:pink">
            <?php
            include'showdata.php';
            ?>
        </tbody>
    </table>
</body>
</html>