<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?php echo $_SESSION['name']?></h3>
    <p><?php  echo $_SESSION['skill'] ?></p>
    <p><?php  echo $_SESSION['age']?></p>
</body>
</html>