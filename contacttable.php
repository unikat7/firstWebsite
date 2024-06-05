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
        </style>
</head>
<body>
    <table border="1">
        <thead>
            <tr style="background-color:blue;color:white">
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody style="background-color:skyblue">
            <?php
            include'contactshow.php';
            ?>
        </tbody>
    </table>
</body>
</html>